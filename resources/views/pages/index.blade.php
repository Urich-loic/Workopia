<x-layout>
    <x-slot name="title">Workopia jobs listings</x-slot>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-2 py-18">
     @forelse($jobs as $job)
    <x-job-card :job="$job"/>
    @empty
    <li>No jobs found</li>
   @endforelse
</div>
    <div class="text-center">
        <x-button-link url="{{ route('jobs.index') }}">Browse All Jobs</x-button-link>
    </div>
    <x-bottom-banner/>
</x-layout>
