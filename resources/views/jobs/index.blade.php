<x-layout>
<x-slot name="title">Job listings</x-slot>
<h1>{{$title}}</h1>
<ul>
   @forelse($jobs as $job)
    <li>{{$job}}</li>
    @empty
    <li>No jobs found</li>
   @endforelse

</ul>
</x-layout>
