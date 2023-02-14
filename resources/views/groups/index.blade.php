<style>
.min-h-screen.bg-gray-100 {
  background: #101074;
}
.bg-blue-900.py-12 {
  background: #101074;
} 
.pagination p span {
  background-color: #1e3a8a !important;
  color: white !important;
}
.text-sm.text-gray-700.leading-5 {
  color: #84cc16;
}
</style>
<x-app-layout>
  

    <div class="bg-blue-900 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-600 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue-900 border-b border-gray-200">
                    <div class="">
                        {{-- add create button --}}
                        <div class="p-4 flex justify-between content-start" >
                            <h2 class="text-lime-500 my-2 border-bottom-2 text-2xl"> Alle groepen </h2>
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
