<form wire:submit="changePassword" autocomplete="off" class="w-full h-full">
    <div class="w-full flex flex-col justify-between h-full">
        <div class="w-full flex flex-col items-center pt-10 space-y-5 px-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 stroke-white fill-black p-7 bg-gray-100 rounded-full" viewBox="0 0 24 24">
                <g stroke-width="1.5">
                    <path d="M2 12c0-4.714 0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464C22 4.93 22 7.286 22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12Z" />
                    <path d="M11 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z" />
                    <path stroke-linecap="round" d="M11 12h4.5m0 0H17a1 1 0 0 1 1 1v1m-2.5-2v1.5" />
                </g>
            </svg>
            <h3 class="font-semibold text-lg">Congratulations, Its your first login!</h3>
            <p class="text-sm text-gray-400">Please take a moment to change your password for security.</p>
            <div class="w-full">
                <hr>
            </div>
            <div class="login-input-group">
                <label for="password" class="login-label ">
                    New Password
                </label>
                <div class="w-full relative">
                    <input wire:model.live="password" id="password" name="password" autofocus class="login-input-field" type="password" name="password" id="password" autoComplete="false" placeholder="************" required />
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
            <div class="w-full">
                <span class="text-sm text-gray-400">Password Strength: <span class="text-red-500">Weak</span></span>
            </div>
            <ul class="w-full text-gray-400 text-sm space-y-3">
                <li class="flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22" />
                    </svg>
                    <span class="@if (strpos(strtolower($password), strtolower($user->name)) === false || strpos(strtolower($password), strtolower($user->email)) === false)
                        text-green-700
                    @endif">Must not contain your name or email</span>
                </li>
                <li class="flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22" />
                    </svg>
                    <span class="@if (strlen($password) >= 8)
                        text-green-700
                    @endif">At least 8 characters</span>
                </li>
                <li class="flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22" />
                    </svg>
                    <span class="@if (preg_match('/\d/', $password) && preg_match('/[^a-zA-Z0-9\s]/', $password))
                        text-green-700
                    @endif">Contains a symbol or number</span>
                </li>
            </ul>
            <div class="w-full ">
                <button type="submit" class="w-full bg-primary py-2 2xl:py-3 rounded-full text-white text-lg">
                    Save
                </button>
            </div>
        </div>
        <div class="text-sm py-5 px-10 text-gray-400">
            <span>{{today()->format('Y')}} &copy; KanisaOnline</span>
        </div>
    </div>
</form>