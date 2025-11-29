<x-layout>
  <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
    <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>
    <form method="POST" action="{{route('jobs.index')}}" enctype="multipart/form-data">
        @csrf
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
        Job Info
      </h2>


      <x-inputs.text
          label="Job title"
          id="title"
          type="text"
          name="title"
          placeholder="Software Engineer"
      />

      <x-text-area
            label="Job Description"
            id="description"
            name="description"
            placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team. In this role, you will be responsible for designing, developing, and maintaining high-quality software solutions that meet our clients' needs. You will work closely with cross-functional teams to deliver robust applications and improve existing systems."

      />

      <x-inputs.text
          label="Annual Salary"
          id="salary"
          type="text"
          name="salary"
          placeholder="$90,000"
      />

        <x-text-area
            label="Requirements"
            id="requirements"
            name="requirements"
            placeholder="Bachelor's degree in Computer Science"
      />

          <x-text-area
            label="Benefits"
            id="benefits"
            name="benefits"
            placeholder="Health insurance, 401k, paid time off"
      />


          <x-inputs.text
          label="Tags (comma-separated)"
          id="salary"
          type="text"
          name="tags"
          placeholder="development, coding, java, python"
      />

      <x-select
      :options="['Full-Time'=>'Full-Time',
     'Part-Time'=>'Part-Time',
     'Contract'=>'Contract',
     'Temporary'=>'Temporary',
     'Internship'=>'Internship',
     'Volunteer'=>'Volunteer',]"
     label="{{ 'Job Type' }}"
     id="job_type"
     name="job_type"
     />

      <x-select
        :options="['1'=>'Yes','0'=>'No',]"
        label="Remote"
        id="remote"
        name="remote"
     />

      <x-inputs.text
          label="Country"
          id="country"
          type="text"
          name="country"
          placeholder="USA"
      />

      <x-inputs.text
          label="City"
          id="city"
          type="text"
          name="city"
          placeholder="Albany"
      />

      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
        Company Info
      </h2>

      <x-inputs.text
          label="Company name"
          id="company_name"
          type="text"
          name="company_name"
          placeholder="Company name"
      />

      <x-inputs.text
          label="Company website"
          id="company_website"
          type="text"
          name="company_website"
          placeholder="Enter website"
      />


      <x-inputs.text
          label="Contact email"
          id="email"
          type="email"
          name="email"
          placeholder="Email where you want to receive applications"
      />

      <div class="mb-4">
        <label class="block text-gray-700" for="company_logo"
          >Company Logo</label
        >
        <input
          id="company_logo"
          type="file"
          name="company_logo"
          class="w-full px-4 py-2 border rounded focus:outline-none"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
      >
        Save
      </button>
    </form>
  </div>
</x-layout>
