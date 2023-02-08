<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Project: {{ $project->name }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="border-b border-gray-200 dark:border-gray-700">
                        <div class="mt-4">
                            @livewire('projects.tabs.overzicht', ['project' => $project])

                            {{-- accepted project --}}
                            <form action="" method="POST">
                                @csrf
                                @method('')
                                <button type="submit" class="bg-green-500 pull-right text-white px-4 py-3 rounded font-medium">Project accepteren</button>
                            </form>

                            {{-- denied project --}}
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-5 bg-red-500 pull-right text-white px-4 py-3 rounded font-medium">Project weigeren</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
