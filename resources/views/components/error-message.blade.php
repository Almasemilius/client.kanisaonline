@props([
'property'
])
@error ($property)
<li class="text-red-600">{{ $message }}</li>
@enderror