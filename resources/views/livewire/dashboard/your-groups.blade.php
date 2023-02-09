<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                {{-- session message --}}
                @if (session()->has('message'))
                    <div class="p-4 mb-4 text-sm text-blue-900 bg-pink-100 rounded-lg dark:bg-pink-200 dark:text-blue-900" role="alert">
                        <p class="font-bold">Succes!</p>
                        <p>{{ session('message') }}</p>
                    </div>
                @endif
                <div class="flex justify-between align-center">
                    <h2 class="my-2 border-bottom-2 text-2xl"> Jouw projectgroepen </h2>
                </div>
                <div class="flex flex-wrap -mx-4">

                    @forelse ($groups as $group)
                        <div class=" w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                            <x-dashboard.group-carddash :withProjects=false :group="$group" />
                        </div>
                    @empty
                        {{-- info message --}}
                        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                            <p class="font-bold">Geen projectgroepen</p>
                            <p>Je bent nog niet aangemeld bij een projectgroep.</p>
                        </div>
                    @endforelse

                </div>
                <div class="add-group">
                    <label for="">Nieuwe groep aanmaken</label>
                    <div>
                        <input wire:model="newGroup" type="text" class="mb-4 block border-2 border-gray-300 p-4 rounded-lg" placeholder="Naam projectgroep">
                        <button wire:click="saveGroup" type="button" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-500 focus:outline-none dark:focus:ring-blue-500">Groep aanmaken</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
