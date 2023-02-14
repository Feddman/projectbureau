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
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue-900 border-b border-gray-200">
                    @livewire('projects.projects-index', ['projects' => $projects])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
