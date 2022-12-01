<div x-data="{modalOpen: false}">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between align-center">
                    <h2 class="my-2 border-bottom-2 text-2xl"> Jouw projectgroepen </h2>
                    <button @click="modalOpen = true" type="button" class="flex-end focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-bold text-2xl">+</button>
                </div>
                <div class="flex flex-wrap -mx-4">

                    @forelse ($groups as $group)
                        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                            <x-dashboard.group-card :group="$group" />
                        </div>
                    @empty
                        <p>Je bent nog niet lid van een projectgroep.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
