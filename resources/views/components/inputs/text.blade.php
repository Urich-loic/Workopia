@props(['name', 'label' => null, 'value' => '','placeholder'=>'', 'type'=>'text', 'id'])
<div class="mb-4">
       @if($label)
        <label class="block text-gray-700" for="{{$id ?? $name}}">{{$label}}</label>
       @endif
        <input
          id="{{$id}}"
          type="{{$type}}"
          name="{{$name}}"
          value="{{ old($name,$value) }}"
          class="w-full px-4 py-2 rounded-md border @error($name)border-red-500 @enderror"
          placeholder="{{$placeholder}}"
        />
        @error($name)
        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
        @enderror
      </div>
