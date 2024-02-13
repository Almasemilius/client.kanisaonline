<div class="w-full h-full flex flex-col justify-center items-center gap-5 px-5">

    <div class="w-full text-center">
        <h1 class="text-lg font-semibold text-center">Family Information</h1>
        <p class="text-sm text-gray-400">Please take a moment to change your password for security.</p>
    </div>
    <div class="onboarding-input-group">
        <label for="password" class="login-label-select ">
            Marital Status
        </label>
        <div class="w-full relative">
            <div class="">
                <select wire:model="user.marital_status" class="dob-picker-select" name="" id="">
                    <option value="single">single</option>
                    <option value="married">married</option>
                    <option value="divorced">divorced</option>
                    <option value="widow">widow</option>
                </select>
            </div>
        </div>
    </div>
    <div class="onboarding-input-group">
        <label for="spouse" class="login-label-select">
        Spouse Name
        </label>
        <div class="w-full">
            <input wire:model.live="user.spouse_name" id="spouse" name="spouse" autofocus class="onboarding-input-field" type="text" name="password" id="password" autoComplete="false" required />
        </div>
    </div>
    <div class="onboarding-input-group">
        <label for="children" class="login-label-select">
            Number of Children
        </label>
        <div class="w-full">
            <input wire:model.live="user.number_of_children" id="children" name="children" autofocus class="onboarding-input-field" type="number" min=0 name="password" id="password" autoComplete="false" required />
        </div>
    </div>


    <div class="flex flex-col gap-4 w-full items-center">
        <button wire:click="nextStep" class="text-primary text-center">Skip</button>
        <button wire:click="saveFamilyInformation" class="bg-primary text-center w-3/5 py-3 text-white rounded-full">Save</button>
    </div>
</div>