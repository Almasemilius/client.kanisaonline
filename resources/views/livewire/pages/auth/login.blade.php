<?php

use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    #[Rule(['required', 'string', 'email'])]
    public string $email = '';

    #[Rule(['required', 'string'])]
    public string $password = '';

    #[Rule(['boolean'])]
    public bool $remember = false;

    // public string $today =  Carbon::now();

    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (!auth()->attempt($this->only(['email', 'password'], $this->remember))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        session()->regenerate();

        $this->loginRedirect();
    }

    function loginRedirect() {
        if(auth()->user()->new_user){
            return redirect()->route('complete.user.profile');
        }else{
            $this->redirect(
                session('url.intended', RouteServiceProvider::HOME),
                navigate: true
            );
        }
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }
}; ?>

<form wire:submit="login" autocomplete="off" class="w-3/5 h-4/5 2xl:h-4/6 bg-white m-auto grid grid-cols-2 rounded-md overflow-hidden">
    <div class="w-full h-full flex flex-col justify-between">
        <div class="p-10">
            <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1706051141/KanisaOnline/logo_jbdbax.png" alt="" class="h-14">
            <div class="w-full space-y-1 lg:space-y-5 lg:py-1">
                <h1 class="text-base font-semibold text-black pt-5">
                    Welcome to our Church Management System!</span>
                </h1>
            </div>
            <div class="pt-5 pb-10">
                <hr>
            </div>

            <div class="">
                <div class="login-input-group">
                    <label for="email" class="login-label ">
                        Phone or Email
                    </label>
                    <div class="w-full relative p-0 m-0">
                        <input wire:model="email" id="email" name="email" autofocus class="login-input-field" type="email" name="email" id="email" autoComplete="false" required />
                        <div class="svg-container">
                            <svg stroke-width="1.5" viewBox="0 0 24 24" class="login-svg" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 9L12 12.5L17 9" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2 17V7C2 5.89543 2.89543 5 4 5H20C21.1046 5 22 5.89543 22 7V17C22 18.1046 21.1046 19 20 19H4C2.89543 19 2 18.1046 2 17Z" stroke-width="1.5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <div class="login-input-group mt-10">
                    <label for="password" class="login-label ">
                        Password
                    </label>
                    <div class="w-full relative">
                        <input wire:model="password" id="password" name="password" autofocus class="login-input-field" type="password" name="password" id="password" autoComplete="false" required />
                        <div class="svg-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="login-svg" viewBox="0 0 24 24">
                                <g fill="none" stroke-width="1.5">
                                    <path d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z" />
                                    <path d="M11 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z" />
                                    <path stroke-linecap="round" d="M11 12h4.5m0 0H17a1 1 0 0 1 1 1v1m-2.5-2v1.5" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="w-full flex justify-center items-center py-10">
                <h5 class=" text-gray-400 lg:text-description text-sm">
                    Forgot Password?
                    <a href="/reset-password" class="text-primary font-semibold">
                        Get Help
                    </a>
                </h5>
            </div>
            <div class="w-full ">
                <button type="submit" class="w-full bg-primary py-2 2xl:py-3 rounded-full text-white text-lg">
                    Login
                </button>
            </div>

        </div>
        <div class="p-10 text-sm text-gray-400">
            <span>{{today()->format('Y')}} &copy; KanisaOnline</span>
        </div>
    </div>
    <div class=" w-full h-full flex justify-center items-center">
        <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1706051706/KanisaOnline/Church_Image_bsytvz.png" alt="" class=" h-4/5">
    </div>
</form>