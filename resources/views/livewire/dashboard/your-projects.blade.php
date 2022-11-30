<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex flex-wrap -mx-4">
                    @foreach ($projects as $project)
                        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                            <x-dashboard.project-card :project="$project" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
