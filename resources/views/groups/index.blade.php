<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Groepen overzicht
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        {{-- add create button --}}
                        <div class="p-4 flex justify-between content-start" >
                            <h2 class="my-2 border-bottom-2 text-2xl"> Alle groepen </h2>
                        </div>

                        <div class="grid grid-cols-3 gap-3">
                            @forelse($groups as $group)
                                <x-dashboard.group-card :group="$group" :with-projects=false/>
                            @empty
                                <p>nog geen projecten</p>
                            @endforelse
                        </div>
                        {{-- pagination  --}}
                        <div class="pagination">{{ $groups->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
