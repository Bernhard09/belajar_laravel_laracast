{{-- <a href="/home"> Home </a>
<a href="/contact"> Contact</a>
<a href="/about"> About </a> --}}
{{-- <a {{ $attributes }}> {{ $slot }} </a> --}}

@props(["active" => false, "type"])

@if ($type == 'anchor')
    <a class="{{ $active ? "bg-gray-900 text-white" :  "text-gray-300 hover:bg-gray-700 hover:text-white"}}  
        rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false'}}"
        {{ $attributes }}
        >{{ $slot }}</a>
@else
    <button class="{{ $active ? "bg-gray-900 text-white" :  "text-gray-300 hover:bg-gray-700 hover:text-white"}}  
    rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false'}}"
    > <a {{ $attributes }}> {{ $slot }} </a></button>
@endif


