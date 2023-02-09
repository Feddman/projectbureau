<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            Groep: {{ $group->name }} 
            {{-- filter om alleen de groep eigenaar en de admin de groep naam kunnen wijzigen  --}}
            @if( auth()->user()->id == $group->creator_id || auth()->user()->hasRole('admin'))
            {{-- Button voor groep naam wijzigen  --}}
            <a style="display: inline" href="{{route('groups.edit', $group)}}">
                <svg style="display: inline-block" class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            </a>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @livewire('groups.view-group', ['group' => $group])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
