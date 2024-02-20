 <div class="space-y-5">

     <div class="w-full grid grid-cols-12 gap-1 bg-white p-10">
         <div class="col-span-12 px-10">
             <h3 class="text-xl font-semibold">Publish Sermon</h3>
             <div class="">
                 <span class="text-sm">Please fill out the following details accurately. Mandatory fields are marked with an asterisk (*)</span>
             </div>
         </div>
         <div class="col-span-8 space-y-2">
             <div class=" py-5 px-10 space-y-3">


                 <div class="w-full input-group">
                     <label for="title" class="new-label">Title <span class="required-label">*</span></label>
                     <input wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Title">
                     <div class="w-full flex items-end">
                         <x-error-message property='event.title' />
                     </div>
                 </div>
                 <!-- Image Upload -->
                 <div class="input-group">
                     <label for="title" class="new-label">Thumbnail <span class="required-label">*</span></label>

                     <label x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" wire:ignore for="dropzone-file" class="flex flex-col items-center justify-center w-full border border-gray-300 border-dashed rounded-lg cursor-pointer bg-white p-1">
                         <div class="flex flex-col items-center justify-center pt-3 pb-3 h-24 ">
                             <p class="mb-2 text-sm text-black">Drop files to upload or</p>
                             <span class="text-blue-700 underline font-extralight">Browse</span>
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
         <div class="col-span-4 space-y-5">
             <div class="duration-200 ease-out bg-white" x-cloak>
                 <label @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-4 font-semibold text-left select-none">
                     Refund Policy
                 </label>

                 <input wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Title">
                 <div class="w-full flex items-end">
                     <x-error-message property='event.title' />
                 </div>
             </div>
             <div class="duration-200 ease-out bg-white" x-cloak>
                 <label @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-4 font-semibold text-left select-none">
                     Category
                 </label>

                 <select wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Title">
                     <option value="" class="text-gray-300">Select Category</option>
                     <option value="" class="text-gray-300">Option 1</option>
                     <option value="" class="text-gray-300">Option 2</option>
                 </select>
                 <div class="w-full flex items-end">
                     <x-error-message property='event.title' />
                 </div>
             </div>
             <div class="duration-200 ease-out bg-white" x-cloak>
                 <label @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-4 font-semibold text-left select-none">
                     Files
                 </label>

                 <select wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Title">
                     <option value="" class="text-gray-300">Select FileType</option>
                     <option value="" class="text-gray-300">Video</option>
                     <option value="" class="text-gray-300">Audio</option>
                 </select>
                 <div class="w-full flex items-end">
                     <x-error-message property='event.title' />
                 </div>
             </div>
             <div class="duration-200 ease-out bg-white" x-cloak>
                 <label @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-4 font-semibold text-left select-none">
                     Video Link
                 </label>

                 <input wire:model="event.title" type="text" id="title" class="input-field w-full placeholder:text-gray-300" placeholder="Enter Title">
                 <div class="w-full flex items-end">
                     <x-error-message property='event.title' />
                 </div>
             </div>
             <div class="w-full flex justify-between">
                <button class="primary-btn-rounded-outlined">Discard</button>
                <button class="primary-btn-rounded">Publish</button>
             </div>
         </div>
     </div>
 </div>
 <script>
     ClassicEditor
         .create(document.querySelector('#description'))
         .then(editor => {
             editor.model.document.on('change:data', () => {
                 console.log('changed')
                 //  let description = $('#description').data('description')
                 console.log(editor.getData())
                 @this.set('description', editor.getData())
                 //  eval(description).set('state.description', editor.getData())
             })
         })
         .catch(error => {
             console.error(error);
         });
 </script>

 </div>