 <div class="space-y-5">

     <div class="w-full grid grid-cols-5 gap-3 bg-white p-10">
         <div class="col-span-3 space-y-2">
             <div class=" py-5 px-10 space-y-5">
                 <h3>General information</h3>

                 <div class="">
                     <span class="text-sm">Please fill out the following details accurately.</span>
                 </div>

                 <div class="w-full input-group">
                     <label for="title">Title <span class="required-label">*</span></label>
                     <input wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Event Title">
                     <div class="w-full flex items-end">
                         <x-error-message property='event.title' />
                     </div>
                 </div>
                 <!-- Image Upload -->
                 <div>
                     <label for="title">Thumbnail <span class="required-label">*</span></label>

                     <label x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" wire:ignore for="dropzone-file" class="flex flex-col items-center justify-center w-full border border-gray-300 border-dashed rounded-lg cursor-pointer bg-blue-50 p-3">
                         <div class="flex flex-col items-center justify-center pt-5 pb-6 h-32 ">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-red-500 p-2 bg-gray-200 rounded-md" viewBox="0 0 16 16">
                                 <path d="M7 2.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0zm4.225 4.053a.5.5 0 0 0-.577.093l-3.71 4.71l-2.66-2.772a.5.5 0 0 0-.63.062L.002 13v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4.5l-4.777-3.947z" />
                             </svg>
                             <p class="mb-2 text-sm text-black">Drop your image Here, or <span class="text-blue-700">Browse</span></p>
                             <p class="text-xs text-gray-600">Supported Formats PNG or JPEG</p>
                         </div>
                         <input wire:model="thumbnail" id="dropzone-file" type="file" class="hidden" />
                         <div class="w-full flex space-x-2 items-center rounded-md p-2 border bg-gray-50 justify-between ">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 fill-yellow-500" viewBox="0 0 24 24">
                                 <path d="M13.17 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8.83c0-.53-.21-1.04-.59-1.41l-4.83-4.83c-.37-.38-.88-.59-1.41-.59zM16 15c0 2.34-2.01 4.21-4.39 3.98C9.53 18.78 8 16.92 8 14.83V9.64c0-1.31.94-2.5 2.24-2.63A2.5 2.5 0 0 1 13 9.5V14c0 .55-.45 1-1 1s-1-.45-1-1V9.5c0-.28-.22-.5-.5-.5s-.5.22-.5.5v5.39c0 1 .68 1.92 1.66 2.08A2 2 0 0 0 14 15v-3c0-.55.45-1 1-1s1 .45 1 1v3zm-2-8V4l4 4h-3c-.55 0-1-.45-1-1z" />
                             </svg>
                             <div x-show="isUploading" class="w-full">
                                 <progress max="100" x-bind:value="progress" class="w-full h-0.5"></progress>
                             </div>
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-primary" :class="{'hidden' : isUploading == false}" viewBox="0 0 24 24">
                                 <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17L12 13.41L8.41 17L7 15.59L10.59 12L7 8.41L8.41 7L12 10.59L15.59 7L17 8.41L13.41 12L17 15.59z" />
                             </svg>
                             <!-- Upload Prograss Indicator -->
                         </div>
                     </label>

                     <!-- Progres Indicator -->
                 </div>
                 <div class="w-full flex items-end">
                     <x-error-message property='thumbnail' />
                 </div>

                 <div wire:ignore class="col-span-4 input-group">
                     <label for="organizer">Description</label>
                     <textarea wire:model='description' id="description" data-description="@this"></textarea>
                 </div>

             </div>
         </div>
         <div class="col-span-2">
             <div x-data="{ 
                    activeAccordion: '', 
                    setActiveAccordion(id) { 
                                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
                            } 
                        }" class="relative w-full max-full mx-auto text-base space-y-2">

                 <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
                     <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                         <span>Refund Policy</span>
                         <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                             <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                             </div>
                             <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                             </div>
                         </div>
                     </button>
                     <div wire:ignore x-show="activeAccordion==id" x-collapse x-cloak>
                         <div class="px-10 py-5 input-group">
                             <label for="organizer">Refund Policy</label>
                             <div id="refund" data-refund="@this"></div>
                         </div>
                     </div>
                 </div>
                 <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
                     <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                         <span>Sponsors</span>
                         <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                             <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                             </div>
                             <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full">
                             </div>
                         </div>
                     </button>
                     <div wire:ignore x-show="activeAccordion==id" x-collapse x-cloak>
                         <div class="px-10 py-5">
                             <div class="w-full">
                                 <select wire:model='selectedSponsors' multiple x-data="multiselect">
                                     @foreach ($sponsors as $sponsor)
                                     <option value="{{$sponsor->id}}">{{$sponsor->name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="space-y-3">
         <div class="w-full bg-white p-5">

         </div>
         <div class="">
             <button wire:click="addEvent" class="w-full flex justify-center primary-btn">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " viewBox="0 0 24 24">
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14" />
                 </svg>
                 <span>Add Event</span>
             </button>
         </div>
     </div>
 </div>
 <script>
     ClassicEditor
         .create(document.querySelector('#description'))
         .then(editor => {
             editor.model.document.on('change:data', () => {
                 // console.log('changed')
                 let description = $('#description').data('description')
                 console.log(editor.getData())
                 @this.set('description', editor.getData())
                 // eval(description).set('state.description', editor.getData())
             })
         })
         .catch(error => {
             console.error(error);
         });

 </script>

 </div>