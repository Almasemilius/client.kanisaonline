<div class="w-full h-full flex flex-col justify-center items-center gap-5 px-5">

    <div class="w-full text-center">
        <h1 class="text-lg font-semibold text-center">Your Date of Birth</h1>
        <p class="text-sm text-gray-400">Please take a moment to change your password for security.</p>
    </div>
    <div class="w-full grid grid-cols-3 gap-5">
        <div class="">
            <select wire:model="date" class="dob-picker" name="" id="">
                <option value="">Date</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
        </div>
        <div >
            <select wire:model="month" name="" id="" class="dob-picker">
                <option value="">Month</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div >
            <select wire:model="year" name="" id="" class="dob-picker">
                <option value="">Year</option>
                @for ($i = (int)$from->format('Y') ; $i <= (int) $to->format('Y') ; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
        </div>
    </div>
    <div class="flex flex-col gap-4 w-full items-center">
        <button wire:click="nextStep" class="text-primary text-center">Skip</button>
        <button wire:click="saveDateOfBirth" class="bg-primary text-center w-3/5 py-3 text-white rounded-full">Save</button>
    </div>
</div>