@props([
    'url'=>'/',
    'active' => false,
    'mobile' => null
    ])

    @if ($mobile)
    <a href="{{ $url }}" class="block px-4 py-2 hover:bg-blue-700 text-white hover:underline  {{ $active ? 'text-yellow-400 font-bold':'' }}">{{ $slot }}</a>
    @else
    <a href="{{ $url }}" class="text-white hover:underline py-2  {{ $active ? 'text-yellow-400 font-bold':'' }}">{{ $slot }}</a>
    @endif

