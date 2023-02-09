<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Groep wijzigen: {{ $group->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- success message --}}
                @if (session()->has('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Succes!</strong>
                        <span class="block sm:inline">{{ session('message') }}</span>
                    </div>
                @endif
                <div class="flex p-6 justify-center text-gray-900">
                    {{-- make project form --}}
                    <form  class="md:w-1/2" action="{{ route('groups.update', $group) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-4">
                            <label for="name">Naam groep</label>
                            <input type="text" name="name" id="name"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ $group->name }}">
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Groep wijzigen</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
