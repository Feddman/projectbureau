<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="">
                        {{-- add create button --}}
                        <div class="p-4 flex justify-between content-start" >
                            <h2 class="my-2 border-bottom-2 text-2xl"> Alle gebruikers </h2>
                        </div>

                        <div class="grid grid-cols-3 gap-3">
                            @forelse($users as $user)
                                <x-dashboard.user-card :user="$user"/>
                                    @empty
                                        <p>nog geen gebruikers</p>
                            @endforelse
                        </div>
                        {{-- pagination  --}}
                        <div class="pagination">{{ $users->onEachSide(1)->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
