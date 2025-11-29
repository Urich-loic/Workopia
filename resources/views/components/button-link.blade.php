@props([
    'url'=>'/',
    'icon' => 'edit'
    ])
<a
href="{{$url}}"
class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300 "
>
<i class="fa fa-{{$icon}}"></i> {{ $slot }}
</a>
