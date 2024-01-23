<?php

use App\Providers\RouteServiceProvider;
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

    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! auth()->attempt($this->only(['email', 'password'], $this->remember))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        session()->regenerate();

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
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
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

<div>
    <form wire:submit="login" autocomplete="off" class="w-full flex flex-col justify-between lg:pt-0 ">
        <div
            class="w-full  py-12 2xl:py-24 lg:w-9/12 mx-auto flex flex-col h-[calc(100vh-56px)] gap-3 2xl:gap-5 items-center justify-center px-5">
            <div class="w-full ">
                <img src="https://res.cloudinary.com/do6zpq1dx/image/upload/v1698643093/tymtalk/Logo_xy5tj9.png" alt=""
                    class="h-10">
            </div>
            <div class="w-full space-y-1 lg:py-5">
                <h1 class="text-xl lg:text-3xl font-extrabold text-black">
                    Login to Your Account
                </h1>
                <p class="text-gray-400  text-sm py-1 2xl:py-5">
                    Welcome Back! Select method to login
                </p>
            </div>

            <div class="w-full space-y-7">
                <div class="w-full space-y-2">
                    <div class="w-full relative">
                        <input wire:model="email" id="email" name="email" placeholder="Email" autofocus
                            class="login-input-field" type="email" name="email" id="email" autoComplete="false"
                            required />
                        <div class="svg-container">
                            <svg stroke-width="1.5" viewBox="0 0 24 24" class="login-svg" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 9L12 12.5L17 9" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M2 17V7C2 5.89543 2.89543 5 4 5H20C21.1046 5 22 5.89543 22 7V17C22 18.1046 21.1046 19 20 19H4C2.89543 19 2 18.1046 2 17Z"
                                     stroke-width="1.5" />
                            </svg>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="w-full space-y-2">
                    <div class="w-full relative">
                        <input wire:model="password" id="password" placeholder="Password" class="login-input-field"
                            type="password" name="password" autoComplete="false" required />
                        <div class="svg-container">
                            <svg xmlns="http://www.w3.org/2000/svg" class="login-svg" viewBox="0 0 24 24">
                                <g fill="none" stroke-width="1.5">
                                    <path
                                        d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z" />
                                    <path d="M11 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z" />
                                    <path stroke-linecap="round" d="M11 12h4.5m0 0H17a1 1 0 0 1 1 1v1m-2.5-2v1.5" />
                                </g>
                            </svg>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="remember_me" class="w-full flex justify-between">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" name="" id="remember_me">
                            <span class="text-sm md:text-base">Remember me</span>
                        </div>
                        <div>
                            <a href="#" class="text-sm md:text-base text-primary font-semibold">Forgot Password?</a>
                        </div>
                    </label>
                </div>
            </div>

            <div class="w-full py-5">
                <button type="submit" class="w-full bg-primary py-3 2xl:py-3 text-white text-lg">
                    Login
                </button>
            </div>
        </div>
    </form>
</div>