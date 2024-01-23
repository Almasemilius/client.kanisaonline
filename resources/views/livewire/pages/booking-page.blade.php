<div class="bg-gray-100">
    <div class="w-full h-80 lg:h-[50vh]  bg-primary z-0 inset-x-0 top-0">
        <div class="container pt-32 text-3xl font-semibold text-white">
            <h1>Conferences</h1>
        </div>
    </div>
    <div class="px-5 lg:container relative -top-24">
        <div class=" grid grid-cols-6 gap-5">
            <div class="col-span-6 lg:col-span-4 bg-white p-10">
                <div class="space-y-1 py-5">
                    <h1 class="text-xl lg:text-2xl font-semibold">Ticket Details</h1>
                    <p class="text-sm text-gray-500">To complete the booking, kindly input the necessary details for
                        each ticket.</p>
                </div>
                <h1 class="py-5 font-semibold">1. Atendee Information</h1>
                <div x-data="{ 
                            activeAccordion: '', 
                            setActiveAccordion(id) { 
                                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                            } 
                        }" class="relative w-full mx-auto overflow-hidden text-sm font-normal   space-y-1" wire:ignore>
                    @foreach ($tickets as $key=>$ticket)
                    @for ($i = 0; $i
                    < $ticket['quantity']; $i++) 
                    <livewire:booking.booking-tickets :ticket="$ticket" :i="$i" :trackId="$key" />
                    @endfor
                    @endforeach

                    <x-error-message property='mismatch' />
                </div>
                <h1 class="py-5 font-semibold">2. Delivery Method</h1>
                <div x-data="{method:null,
                    setMethod(method){
                        this.method = method;
                        $dispatch('set-method',{delivery: this.method})
                    }
                }" class="w-full grid lg:grid-cols-3 gap-1 lg:gap-5">
                    <button @click="setMethod('email')" class="card-container transition-all duration-300" :class="{'bg-blue-50' : method == 'email', 'bg-gray-50' : method != 'email'}">
                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="card-container-svg transition-all duration-300 " :class="{'fill-white bg-primary' : method == 'email', 'fill-gray-500 bg-gray-200' : method != 'email'}" viewBox="0 0 24 24">
                                <path d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.588 1.413T20 20H4ZM20 8l-7.475 4.675q-.125.075-.263.113t-.262.037q-.125 0-.263-.037t-.262-.113L4 8v10h16V8Zm-8 3l8-5H4l8 5ZM4 8v.25v-1.475v.025V6v.8v-.012V8.25V8v10V8Z" />
                            </svg>

                            <span class="card-container-label">E-Mail</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="card-container-sub-svg transition-all duration-300" :class="{'bg-primary fill-white' : method == 'email', 'bg-gray-200 fill-gray-500': method != 'email'}" viewBox="0 0 24 24">
                            <path d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4l4.25 4.25ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z" />
                        </svg>
                    </button>
                    <button @click="setMethod('sms')" class="card-container transition-all duration-300" :class="{'bg-blue-50' : method == 'sms', 'bg-gray-50' : method != 'sms'}">
                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="card-container-svg transition-all duration-300 " :class="{'fill-white bg-primary' : method == 'sms', 'fill-gray-500 bg-gray-200' : method != 'sms'}" viewBox="0 0 24 24">
                                <path d="M8 11q.425 0 .713-.288T9 10q0-.425-.288-.713T8 9q-.425 0-.713.288T7 10q0 .425.288.713T8 11Zm4 0q.425 0 .713-.288T13 10q0-.425-.288-.713T12 9q-.425 0-.713.288T11 10q0 .425.288.713T12 11Zm4 0q.425 0 .713-.288T17 10q0-.425-.288-.713T16 9q-.425 0-.713.288T15 10q0 .425.288.713T16 11ZM2 22V4q0-.825.588-1.413T4 2h16q.825 0 1.413.588T22 4v12q0 .825-.588 1.413T20 18H6l-4 4Zm3.15-6H20V4H4v13.125L5.15 16ZM4 16V4v12Z" />
                            </svg>

                            <span class="card-container-label">SMS</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="card-container-sub-svg transition-all duration-300" :class="{'bg-primary fill-white' : method == 'sms', 'bg-gray-200 fill-gray-500': method != 'sms'}" viewBox="0 0 24 24">
                            <path d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4l4.25 4.25ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z" />
                        </svg>
                    </button>
                    <button @click="setMethod('whatsapp')" class="card-container transition-all duration-300" :class="{'bg-blue-50' : method == 'whatsapp', 'bg-gray-50' : method != 'whatsapp'}">
                        <div class="flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="card-container-svg transition-all duration-300 " :class="{'fill-white bg-primary' : method == 'whatsapp', 'fill-gray-500 bg-gray-200' : method != 'whatsapp'}" viewBox="0 0 15 15">
                                <path d="m1.9 11.7l.447.224l.138-.277L2.3 11.4l-.4.3Zm1.4 1.4l.3-.4l-.247-.185l-.277.138l.224.447ZM.5 14.5l-.447-.224a.5.5 0 0 0 .67.671L.5 14.5Zm4-10l-.277-.416A.5.5 0 0 0 4 4.5h.5Zm6 6v.5a.5.5 0 0 0 .416-.223L10.5 10.5ZM6.254 5.026l.493-.083l-.493.083Zm.14.836l-.493.082l.493-.082Zm-.432.997l.277.416l-.277-.416Zm4.68 3.428l.416.277l-.416-.277Zm-.668-1.541l.083-.493l-.083.493Zm-.836-.14l-.082.493l.082-.493Zm-.997.432l-.416-.277l.416.277ZM0 7.5c0 1.688.558 3.247 1.5 4.5l.8-.6A6.47 6.47 0 0 1 1 7.5H0ZM7.5 0A7.5 7.5 0 0 0 0 7.5h1A6.5 6.5 0 0 1 7.5 1V0ZM15 7.5A7.5 7.5 0 0 0 7.5 0v1A6.5 6.5 0 0 1 14 7.5h1ZM7.5 15A7.5 7.5 0 0 0 15 7.5h-1A6.5 6.5 0 0 1 7.5 14v1ZM3 13.5A7.47 7.47 0 0 0 7.5 15v-1a6.469 6.469 0 0 1-3.9-1.3l-.6.8ZM.723 14.947l2.8-1.4l-.448-.894l-2.8 1.4l.448.894Zm.729-3.47l-1.4 2.8l.894.447l1.4-2.8l-.894-.447ZM4 4.5v1h1v-1H4ZM9.5 11h1v-1h-1v1ZM4 5.5A5.5 5.5 0 0 0 9.5 11v-1A4.5 4.5 0 0 1 5 5.5H4Zm.777-.584l.214-.142l-.555-.832l-.213.142l.554.832Zm.984.192l.14.836l.986-.164l-.14-.837l-.986.165Zm-.076 1.335l-.962.641l.554.832l.962-.641l-.554-.832Zm.216-.499a.5.5 0 0 1-.216.499l.554.832a1.5 1.5 0 0 0 .648-1.495l-.986.164Zm-.91-1.17a.5.5 0 0 1 .77.334l.986-.165a1.5 1.5 0 0 0-2.311-1.001l.555.832Zm5.925 6.003l.142-.213l-.832-.555l-.142.214l.832.554Zm-.86-2.524l-.836-.14l-.164.987l.836.139l.165-.986Zm-2.33.508l-.642.962l.832.554l.641-.962l-.832-.554Zm1.494-.648a1.5 1.5 0 0 0-1.495.648l.832.554a.5.5 0 0 1 .499-.216l.164-.986Zm1.838 2.451a1.5 1.5 0 0 0-1.001-2.311l-.165.986a.5.5 0 0 1 .334.77l.832.555Z" />
                            </svg>

                            <span class="card-container-label">Whatsapp</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="card-container-sub-svg transition-all duration-300" :class="{'bg-primary fill-white' : method == 'whatsapp', 'bg-gray-200 fill-gray-500': method != 'whatsapp'}" viewBox="0 0 24 24">
                            <path d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4l4.25 4.25ZM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z" />
                        </svg>
                    </button>
                </div>
                <h1 class="py-5 font-semibold">3. Payment Method</h1>
                <div x-data="{payment:null,
                    setPayment(payment){
                        this.payment = payment;
                        $dispatch('set-payment',{payment: this.payment})
                    }
                }" class="w-full grid grid-cols-5 gap-5">
                    <button @click="setPayment('mastercard')" class="flex items-center justify-center  py-3 rounded-md border transition-all duration-300" :class="{'bg-blue-50 border-primary' : payment == 'mastercard', 'bg-gray-50 border-gray-50' : payment != 'mastercard' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-14" viewBox="0 0 256 199">
                            <path d="M46.54 198.011V184.84c0-5.05-3.074-8.342-8.343-8.342c-2.634 0-5.488.878-7.464 3.732c-1.536-2.415-3.731-3.732-7.024-3.732c-2.196 0-4.39.658-6.147 3.073v-2.634h-4.61v21.074h4.61v-11.635c0-3.731 1.976-5.488 5.05-5.488c3.072 0 4.61 1.976 4.61 5.488v11.635h4.61v-11.635c0-3.731 2.194-5.488 5.048-5.488c3.074 0 4.61 1.976 4.61 5.488v11.635h5.05Zm68.271-21.074h-7.463v-6.366h-4.61v6.366h-4.171v4.17h4.17v9.66c0 4.83 1.976 7.683 7.245 7.683c1.976 0 4.17-.658 5.708-1.536l-1.318-3.952c-1.317.878-2.853 1.098-3.951 1.098c-2.195 0-3.073-1.317-3.073-3.513v-9.44h7.463v-4.17Zm39.076-.44c-2.634 0-4.39 1.318-5.488 3.074v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.536-5.488 4.39-5.488c.878 0 1.976.22 2.854.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22Zm-59.052 2.196c-2.196-1.537-5.269-2.195-8.562-2.195c-5.268 0-8.78 2.634-8.78 6.805c0 3.513 2.634 5.488 7.244 6.147l2.195.22c2.415.438 3.732 1.097 3.732 2.195c0 1.536-1.756 2.634-4.83 2.634c-3.073 0-5.488-1.098-7.025-2.195l-2.195 3.512c2.415 1.756 5.708 2.634 9 2.634c6.147 0 9.66-2.853 9.66-6.805c0-3.732-2.854-5.708-7.245-6.366l-2.195-.22c-1.976-.22-3.512-.658-3.512-1.975c0-1.537 1.536-2.415 3.951-2.415c2.635 0 5.269 1.097 6.586 1.756l1.976-3.732Zm122.495-2.195c-2.635 0-4.391 1.317-5.489 3.073v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.537-5.488 4.39-5.488c.879 0 1.977.22 2.855.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22Zm-58.833 10.976c0 6.366 4.39 10.976 11.196 10.976c3.073 0 5.268-.658 7.463-2.414l-2.195-3.732c-1.756 1.317-3.512 1.975-5.488 1.975c-3.732 0-6.366-2.634-6.366-6.805c0-3.951 2.634-6.586 6.366-6.805c1.976 0 3.732.658 5.488 1.976l2.195-3.732c-2.195-1.757-4.39-2.415-7.463-2.415c-6.806 0-11.196 4.61-11.196 10.976Zm42.588 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976c0 6.366 4.61 10.976 10.537 10.976c3.073 0 5.269-1.097 6.586-3.073v2.634h4.61v-10.537Zm-16.904 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805Zm-55.1-10.976c-6.147 0-10.538 4.39-10.538 10.976c0 6.586 4.39 10.976 10.757 10.976c3.073 0 6.147-.878 8.562-2.853l-2.196-3.293c-1.756 1.317-3.951 2.195-6.146 2.195c-2.854 0-5.708-1.317-6.367-5.05h15.587v-1.755c.22-6.806-3.732-11.196-9.66-11.196Zm0 3.951c2.853 0 4.83 1.757 5.268 5.05h-10.976c.439-2.854 2.415-5.05 5.708-5.05Zm114.372 7.025v-18.879h-4.61v10.976c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976c0 6.366 4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61v-10.537Zm-16.903 0c0-3.732 2.414-6.805 6.366-6.805c3.732 0 6.366 2.854 6.366 6.805c0 3.732-2.634 6.805-6.366 6.805c-3.952-.22-6.366-3.073-6.366-6.805Zm-154.107 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976c0 6.366 4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61v-10.537Zm-17.123 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805Z" />
                            <path fill="#FF5F00" d="M93.298 16.903h69.15v124.251h-69.15z" />
                            <path fill="#EB001B" d="M97.689 79.029c0-25.245 11.854-47.637 30.074-62.126C114.373 6.366 97.47 0 79.03 0C35.343 0 0 35.343 0 79.029c0 43.685 35.343 79.029 79.029 79.029c18.44 0 35.343-6.366 48.734-16.904c-18.22-14.269-30.074-36.88-30.074-62.125Z" />
                            <path fill="#F79E1B" d="M255.746 79.029c0 43.685-35.343 79.029-79.029 79.029c-18.44 0-35.343-6.366-48.734-16.904c18.44-14.488 30.075-36.88 30.075-62.125c0-25.245-11.855-47.637-30.075-62.126C141.373 6.366 158.277 0 176.717 0c43.686 0 79.03 35.563 79.03 79.029Z" />
                        </svg>
                    </button>
                    <button @click="setPayment('visa')" class="flex items-center justify-center  py-3 rounded-md border transition-all duration-300" :class="{'bg-blue-50 border-primary' : payment == 'visa', 'bg-gray-50 border-gray-50' : payment != 'visa' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-14" viewBox="0 0 256 83">
                            <defs>
                                <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%" y1="-2.006%" y2="100%">
                                    <stop offset="0%" stop-color="#222357" />
                                    <stop offset="100%" stop-color="#254AA5" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#logosVisa0)" d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473" transform="matrix(1 0 0 -1 0 82.668)" />
                        </svg>
                    </button>
                    <button @click="setPayment('selcom')" class="flex items-center justify-center  py-3 rounded-md border transition-all duration-300" :class="{'bg-blue-50 border-primary' : payment == 'selcom', 'bg-gray-50 border-gray-50' : payment != 'selcom' }">
                        <img src="{{asset('assets/logos/selcom.png')}}" alt="">
                    </button>
                    <button @click="setPayment('mpesa')" class="flex items-center justify-center  py-3 rounded-md border transition-all duration-300" :class="{'bg-blue-50 border-primary' : payment == 'mpesa', 'bg-gray-50 border-gray-50' : payment != 'mpesa' }">
                        <img src="{{asset('assets/logos/mpesa.png')}}" alt="">
                    </button>
                    <button @click="setPayment('other')" class="flex items-center justify-center  py-3 rounded-md border transition-all duration-300" :class="{'bg-blue-50 border-primary' : payment == 'other', 'bg-gray-50 border-gray-50' : payment != 'other' }">
                        <span class="text-xs font-semibold text-gray-400">OTHER</span>
                    </button>
                </div>
                <div x-data="{ 
                            activeAccordion: '', 
                            setActiveAccordion(id) { 
                                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                            } 
                        }" class="relative w-full mx-auto overflow-hidden text-sm font-normal my-5  space-y-1">
                    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group bg-blue-50 rounded-md">
                        <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none">
                            <span class="text-primary font-semibold">Billing Information</span>
                            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div x-show="activeAccordion==id" x-collapse x-cloak>
                            <div class="w-full p-4 pt-0 grid grid-cols-2 gap-5">
                                <div class="input-group">
                                    <label for="billing-name">Name <span class="required-label">*</span></label>
                                    <div class="relative">
                                        <input wire:model="billing.name" type="text" id="billing-name" class="input-field w-full placeholder:text-gray-300" required>
                                        <div class="w-full flex items-end">
                                            <x-error-message property='billing.name' />
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <label for="billing-phone">Phone <span class="required-label">*</span></label>
                                    <div class="relative">
                                        <input wire:model="billing.phone" type="text" id="billing-phone" class="input-field w-full placeholder:text-gray-300" required>
                                        <div class="w-full flex items-end">
                                            <x-error-message property='billing.phone' />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label for="billing-email">Email <span class="required-label">*</span></label>
                                    <div class="relative">
                                        <input wire:model="billing.email" type="email" id="billing-email" class="input-field w-full placeholder:text-gray-300" required>
                                        <div class="w-full flex items-end">
                                            <x-error-message property='billing.email' />
                                        </div>
                                    </div>
                                </div>
                                <div></div>
                                <div class="col-span-2 W-full  flex justify-end">
                                    <button wire:click="addBillingInformation" class="primary-btn rounded-md">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-error-message property='payment' />
                    <x-error-message property='delivery' />

                </div>
            </div>
            <div class="col-span-6 lg:col-span-2 p-5 bg-white">
                <div class="space-y-1 py-5">
                    <h1 class="text-2xl font-semibold">Order</h1>
                </div>
                <div class="grid grid-cols-2">
                    <div>
                        <span>Total</span>
                    </div>
                    <div class=" w-full text-right">
                        <span>Tsh. {{number_format($totalAmount)}}/=</span>
                    </div>
                    <div class="col-span-2 pt-3">
                        <hr>
                        <h3 class="text-lg text-gray-500 font-semibold py-3">Tickets</h3>
                    </div>
                    @foreach ($tickets as $$key=>$ticket)
                    <div class="col-span-2 py-3 w-full flex text-sm">
                        <div class="w-1/2">
                            <span class="text-gray-500">{{$ticket['quantity']}} X {{$ticket['title']}}</span>
                        </div>
                        <div class="w-1/2 text-right">
                            <span class="text-gray-500">Tsh. {{$ticket['amount']}}/=</span>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-span-2 pt-3">
                        <hr>
                        <h3 class="text-lg text-gray-500 font-semibold py-3">Discount & Fees</h3>
                    </div>
                    <div>
                        <span class="text-gray-500">Processing Fees</span>
                    </div>
                    <div class="w-full text-right">
                        <span class="text-gray-500">Tsh. 0/=</span>
                    </div>
                    <div class="py-5">
                        <span class="text-gray-500 truncate ">Applied Discount (0%)</span>
                    </div>
                    <div class="w-full text-right py-5">
                        <span class="text-gray-500">Tsh. 0/=</span>
                    </div>
                    <div class="col-span-2 py-5">
                        <hr>
                    </div>
                    <div class="col-span-2">
                        <button wire:click='bookEvent' class="bg-primary text-white p-3 w-full text-center ">Complete
                            Booking </button>

                    </div>
                    <div class="col-span-2 py-10">
                        <div class="flex items-center h-5">
                            <input name="custom-checkbox" id="custom-checkbox" type="checkbox" class="hidden peer" required>
                            <label for="terms" class=" text-sm font-medium text-neutral-400 peer-checked:text-blue-600 [&_svg]:scale-0 peer-checked:[&_.custom-checkbox]:border-blue-500 peer-checked:[&_.custom-checkbox]:bg-blue-500 select-none flex items-center space-x-5">
                                <input type="checkbox" id="terms">
                                <span class="text-sm">by confirming the order, I accept the
                                    <span class="text-primary underline"> terms of the user</span> agreement</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div