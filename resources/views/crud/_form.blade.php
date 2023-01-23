@csrf
@switch(request()->segment(1))
    {{-- Form create school --}}
    @case('schools')
        <label class="uppercase text-gray-700 text-xs">Modular Code</label>
        <span class="text-xs text-red-600">@error('mod_code') {{ $message }} @enderror</span>
        <input type="text" name="mod_code" class="rounded border-gray-200 w-full mb-4" value="{{ old('mod_code', $obj->mod_code) }}">

        <label class="uppercase text-gray-700 text-xs">Number</label>
        <span class="text-xs text-red-600">@error('number') {{ $message }} @enderror</span>
        <input type="text" name="number" class="rounded border-gray-200 w-full mb-4" value="{{ old('number', $obj->number) }}">

        <label class="uppercase text-gray-700 text-xs">Name</label>
        <span class="text-xs text-red-600">@error('name') {{ $message }} @enderror</span>
        <input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $obj->name) }}">
        
        <label class="uppercase text-gray-700 text-xs">Level</label>
        <span class="text-xs text-red-600">@error('level') {{ $message }} @enderror</span>
        <input type="text" name="level" class="rounded border-gray-200 w-full mb-4" value="{{ old('level', $obj->level) }}">
        
        <label class="uppercase text-gray-700 text-xs">Type</label>
        <span class="text-xs text-red-600">@error('type') {{ $message }} @enderror</span>
        <input type="text" name="type" class="rounded border-gray-200 w-full mb-4" value="{{ old('type', $obj->type) }}">

        <label class="uppercase text-gray-700 text-xs">Province</label>
        <span class="text-xs text-red-600">@error('province') {{ $message }} @enderror</span>
        <input type="text" name="province" class="rounded border-gray-200 w-full mb-4" value="{{ old('province', $obj->province) }}">

        <label class="uppercase text-gray-700 text-xs">District</label>
        <span class="text-xs text-red-600">@error('district') {{ $message }} @enderror</span>
        <input type="text" name="district" class="rounded border-gray-200 w-full mb-4" value="{{ old('district', $obj->district) }}">

        <label class="uppercase text-gray-700 text-xs">Zone</label>
        <span class="text-xs text-red-600">@error('zone') {{ $message }} @enderror</span>
        <input type="text" name="zone" class="rounded border-gray-200 w-full mb-4" value="{{ old('zone', $obj->zone) }}">
        
        <label class="uppercase text-gray-700 text-xs">Address</label>
        <span class="text-xs text-red-600">@error('address') {{ $message }} @enderror</span>
        <input type="text" name="address" class="rounded border-gray-200 w-full mb-4" value="{{ old('address', $obj->address) }}">
        @break
    {{-- Form create employee --}}
    @case('employees')
        <label class="uppercase text-gray-700 text-xs">DNI</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="dni" class="rounded border-gray-200 w-full mb-4" value="{{ old('dni', $obj->dni) }}">

        <label class="uppercase text-gray-700 text-xs">Name</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $obj->name) }}">
        
        <label class="uppercase text-gray-700 text-xs">Last Names</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="last_names" class="rounded border-gray-200 w-full mb-4" value="{{ old('last_names', $obj->last_names) }}">
        
        <label class="uppercase text-gray-700 text-xs">Email</label>
        <span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
        <input type="text" name="email" class="rounded border-gray-200 w-full mb-4" value="{{ old('email', $obj->email) }}">

        <label class="uppercase text-gray-700 text-xs">Mobile Number</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="mobile_num" class="rounded border-gray-200 w-full mb-4" value="{{ old('mobile_num', $obj->mobile_num) }}">

        <label class="uppercase text-gray-700 text-xs">Education Level</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="edu_level" class="rounded border-gray-200 w-full mb-4" value="{{ old('edu_level', $obj->edu_level) }}">

        <label class="uppercase text-gray-700 text-xs">Profession</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="profession" class="rounded border-gray-200 w-full mb-4" value="{{ old('profession', $obj->profession) }}">

        <label class="uppercase text-gray-700 text-xs">Specialty</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="specialty" class="rounded border-gray-200 w-full mb-4" value="{{ old('specialty', $obj->specialty) }}">

        <label class="uppercase text-gray-700 text-xs">Degree</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="degree" class="rounded border-gray-200 w-full mb-4" value="{{ old('degree', $obj->degree) }}">

        <label class="uppercase text-gray-700 text-xs">Study Center</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="study_center" class="rounded border-gray-200 w-full mb-4" value="{{ old('study_center', $obj->study_center) }}">

        <label class="uppercase text-gray-700 text-xs">Mention</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="mention" class="rounded border-gray-200 w-full mb-4" value="{{ old('mention', $obj->mention) }}">
        @break
    @case('users')
        <label class="uppercase text-gray-700 text-xs">Name</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $obj->name) }}">
        
        <label class="uppercase text-gray-700 text-xs">Email</label>
        <span class="text-xs text-red-600"></span>
        <input type="text" name="email" class="rounded border-gray-200 w-full mb-4" value="{{ old('email', $obj->email) }}">

        <label class="uppercase text-gray-700 text-xs">Password</label>
        <span class="text-xs text-red-600"></span>
        <input type="password" name="password" class="rounded border-gray-200 w-full mb-4" value="{{ old('password', $obj->password) }}">
        @break
    @default
        <p>No hay elementos</p> 
@endswitch
