<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Projectoverzicht
        </h2>
    </x-slot>

    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        <h2 class="my-2 border-bottom-2 text-2xl"> Lopende projecten </h2>
                        <div class="grid grid-cols-3 gap-3">
                        @forelse($projects as $project)
                            <x-project-card :project="$project" />
                        @empty
                            <p>nog geen projecten</p>
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
