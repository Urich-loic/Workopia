<x-layout>
<x-slot name="title">Job listings</x-slot>
<h1 class="text-2xl. my-5">All Jobs</h1>
<div class="grid grid-cols-1 xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-2">
     @forelse($jobs as $job)
    <x-job-card :job="$job"/>
    @empty
    <li>No jobs found</li>
   @endforelse
</div>
</x-layout>
