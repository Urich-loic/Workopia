<header class="bg-blue-900 text-white p-4">
  <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-3xl font-semibold">
      <a href="{{url('/')}}">Workopia</a>
    </h1>
    <nav class="hidden md:flex items-center space-x-4">
      <x-nav-link url='/jobs' :active="request()->is('jobs')" :mobile="false">All Jobs</x-nav-link>
      <x-nav-link url='/saved-jobs' :active="request()->is('saved-jobs')"  :mobile="false">Saved Jobs</x-nav-link>
      <x-nav-link url='/login' :active="request()->is('login')"  :mobile="false">Login</x-nav-link>
      <x-nav-link url='/register' :active="request()->is('register')"  :mobile="false">Register</x-nav-link>
      <x-nav-link url='/dashboard' :active="request()->is('dashboard')"  :mobile="false">
        <i class="fa fa-gauge mr-1"></i> Dashboard
      </x-nav-link>
       <x-button-link icon="edit" url="/jobs/create">
        Create Job
       </x-button-link>

    </nav>
    <button id="hamburger" class="text-white md:hidden flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div
    id="mobile-menu"
    class=" md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
  >
  <x-nav-link url='/jobs' :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-link>
  <x-nav-link url='/saved-jobs' :active="request()->is('saved-jobs')" :mobile="true">Saved Jobs</x-nav-link>
  <x-nav-link url='/login' :active="request()->is('login')" :mobile="true">Login</x-nav-link>
  <x-nav-link url='/register' :active="request()->is('register')" :mobile="true">Register</x-nav-link>
  <x-nav-link url='/dashboard' :active="request()->is('dashboard')" :mobile="true">Dashboard</x-nav-link>
    <a
      href="create-job.html"
      class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
    >
      <i class="fa fa-edit"></i> Create Job
    </a>

  </div>
</header>

