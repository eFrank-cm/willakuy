<x-app-layout>
    <x-slot name="header">
        <div class='flex justify-between'>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex">
                <img src="{{ asset("images/$class.png")}}" alt="logo" class='h-11 mr-4'>
                <p class="text-2xl inline-block align-text-bottom pt-3.5">{{ __(ucwords(request()->segment(1    ))) }}</p>
            </h2>
        </div>
    </x-slot>

    <x-content>
        <div class='flex'>
            <form action="{{ route("$class.index") }}" method="GET" class='flex-grow'>
                <input type="text" name="search" placeholder="Buscar Employee" value="{{ request('search') }}"
                class='border border-gray-200 rounded py-2 px-4 w-1/2'>
            </form>

            <div>
                <a href="{{ route("$class.create") }}">
                    <svg class='w-10' viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="0" fill="none" width="35" height="35"></rect> <g> <path d="M21 14v5c0 1.105-.895 2-2 2H5c-1.105 0-2-.895-2-2V5c0-1.105.895-2 2-2h5v2H5v14h14v-5h2z"></path> <path d="M21 7h-4V3h-2v4h-4v2h4v4h2V9h4"></path> </g> </g></svg>
                </a>                
            </div>
        </div>
    </x-content>
    
    <x-content>
        <table class="w-full text-sm">
            @switch($class)
                @case('school')
                    <tr class='border-b'>
                        <th class='py-2'>Mod. code</th>
                        <th class='py-2'>Number / Name</th>
                        <th class='py-2'>Level</th>
                        <th class='py-2'>Type</th>
                        <th class='py-2'>Location</th>
                        <th class='border-l py-2'>Options</th>
                    </tr>
                    @foreach ($collection as $school)
                        <tr class='border-b border-gray-200 text-sm'>
                            <td class='px-6 py-2'>{{ $school->mod_code }}</td>
                            <td class='px-6 py-2'>{{ $school->number." - ".$school->name }}</td>
                            <td class='px-6 py-2'>{{ $school->level }}</td>
                            <td class='px-6 py-2'>{{ $school->type }}</td>
                            <td class='px-6 py-2'>{{ $school->location }}</td>
                            <td class='border-l px-6 py-2 text-center flex'>
                                <a href="{{ route('school.show', $school) }}" class='underline hover:decoration-2 px-1'>Ver</a>
                                <a href="{{ route('school.edit', $school) }}" class='underline hover:decoration-2 px-1'>Edit</a>
                                <a href="">
                                    <form action="{{ route('school.destroy', $school) }}" method="POST">                                        
                                        @csrf {{-- porporciona un toquen de validacion de seguridad --}}
                                        @method('DELETE')
                                        <input type="submit" value="Delete" onclick="return confirm('Desea eliminar?')"
                                        class='underline hover:decoration-2 px-1'>
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @break
                @case('employee')
                    <tr>
                        <th>DNI</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Profession / Specialty</th>
                        <th>Degree</th>
                        <th>Options</th>
                    </tr>
                    @foreach ($collection as $employee)
                        <tr class='border-b border-gray-200 text-sm'>
                            <td class='px-6 py-2'>{{ $employee->dni }}</td>
                            <td class='px-6 py-2'>{{ $employee->full_name }}</td>
                            <td class='px-6 py-2'>{{ $employee->email }}</td>
                            <td class='px-6 py-2'>{{ $employee->mobile_num }}</td>
                            <td class='px-6 py-2'>{{ $employee->profession. " - ".$employee->specialty }}</td>
                            <td class='px-6 py-2'>{{ $employee->degree }}</td>
                            <td class='border-l px-6 py-2 text-center flex'>
                                <a href="{{ route('employee.show', $employee) }}" class='underline hover:decoration-2 px-1'>Ver</a>
                                <a href="{{ route('employee.edit', $employee) }}" class='underline hover:decoration-2 px-1'>Edit</a>
                                <a href="">
                                    <form action="{{ route('employee.destroy', $employee) }}" method="POST">                                        
                                        @csrf {{-- porporciona un toquen de validacion de seguridad --}}
                                        @method('DELETE')
                                        <input type="submit" value="Delete" onclick="return confirm('Desea eliminar?')"
                                        class='underline hover:decoration-2 px-1'>
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @break
                @case('user')
                    
                    @break
                @default
                    <p>There aren't elements to index</p>
            @endswitch
        </table>
        {{ $collection->links() }}
    </x-content>
</x-app-layout>