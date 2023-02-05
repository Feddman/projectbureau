<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nieuw bericht aanmaken
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @livewire('messages.messages-index', ['groups' => $groups])
                <div class="flex p-6 justify-center text-gray-900">
                    {{-- make project form --}}
                    <form x-data="{newCustomer: false}" class="md:w-1/2" action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="name">Selecteer groep</label>
                            <select name="type" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                                <option value="">Selecteer een groep</option>
                                @foreach(\App\Models\Group::all() as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach

                            </select>
                            @error('customer_id')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="name">Onderwerp</label>
                            <input type="text" name="topic" id="topic"  class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                            @error('topic')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description">Bericht</label>
                            <textarea name="description" id="description" cols="30" rows="4" placeholder="" class="bg-gray-100 border-2 w-full p-4 rounded-lg"></textarea>
                            @error('description')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Bericht versturen</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')
</x-app-layout>
