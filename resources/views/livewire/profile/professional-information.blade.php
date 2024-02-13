<div class="w-full h-full flex flex-col justify-center items-center gap-5 px-5">

    <div class="w-full text-center">
        <h1 class="text-lg font-semibold text-center">Professional Information</h1>
        <p class="text-sm text-gray-400">Please take a moment to change your password for security.</p>
    </div>
    <div class="onboarding-input-group">
        <label for="password" class="login-label-select ">
            Education Level
        </label>
        <div class="w-full relative">
            <div class="">
                <select wire:model="user.education_level" class="dob-picker-select" name="" id="">
                    <option value=""></option>
                    <option value="Primary Level Education">Primary Level Education</option>
                    <option value="Secondary Level Education">Secondary Level Education</option>
                    <option value="Advanced Secondary Level Education">Advanced Secondary Level Education</option>
                    <option value="Certificate Level Education">Certificate Level Education</option>
                    <option value="Diploma Level Education">Diploma Level Education</option>
                    <option value="Bachelor Degree">Bachelor's Degree</option>
                    <option value="Master Degree">Master's Degree</option>
                    <option value="PhD Degree">PhD Degree</option>
                </select>
            </div>
        </div>
    </div>
    <div class="onboarding-input-group">
        <label for="password" class="login-label-select ">
            Employment Status
        </label>
        <div class="w-full relative">
            <div class="">
                <select wire:model="user.employment_status" class="dob-picker-select" name="" id="">
                    <option value=""></option>
                    <option value="Unemployed">Unemployed</option>
                    <option value="Self Employed">Self Employed</option>
                    <option value="Part-time Employed">Part-time Employed</option>
                    <option value="Full-time Employed">Full-time Employed</option>
                </select>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4 w-full items-center">
        <button wire:click="nextStep" class="text-primary text-center">Skip</button>
        <button wire:click="saveProfessionalInformation" class="bg-primary text-center w-3/5 py-3 text-white rounded-full">Save</button>
    </div>
</div>