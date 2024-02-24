<div>
    <div class="bg-white w-full h-[calc(100vh-20vh)] p-10 grid grid-cols-5 gap-5">
        <div class="w-full max-h-80 col-span-2 rounded-md overflow-hidden">
            <img src="{{asset('storage/publications/'.$publication->thumbnail)}}" alt="" class="object-cover h-full w-full">
        </div>
        <div class="w-full col-span-3">
            <span class="text-red-400 font-semibold">{{$publication->category}}</span>
            <h3 class="uppercase text-lg font-semibold py-1">{{$publication->title}}</h3>
            <span class="text-sm text-gray-400 font-semibold">{{$publication->author}}</span>
            <p class="py-5">
                {{$publication->description}}
            </p>
            <span>Attached Audio:</span>
        </div>
    </div>
</div>