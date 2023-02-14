<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Project in review
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-4 flex justify-between items-center content-start">
                        <h2 class="my-2 border-bottom-2 text-2xl">Projecten in review</h2>

                        <div class="flex">
                            <x-checkbox id="frontend" value="Frontend" name="filterTags[]" wire:model="filterTags">
                                Frontend
                            </x-checkbox>
                            <x-checkbox id="backend" value="Backend" name="filterTags[]" wire:model="filterTags">
                                Backend
                            </x-checkbox>
                            <x-checkbox id="HTML" value="HTML" name="filterTags[]" wire:model="filterTags">
                                HTML
                            </x-checkbox>
                            <x-checkbox id="PHP" value="PHP" name="filterTags[]" wire:model="filterTags">
                                PHP
                            </x-checkbox>
                            <x-checkbox id="C#" value="C#" name="filterTags[]" wire:model="filterTags">
                                C#
                            </x-checkbox>
                        </div>

                        <select wire:model="filterType" id="type" class="w-fit bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 pr-7">
                            <option value="">Filteren op type</option>
                            @foreach(\App\Models\ProjectType::all() as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="grid grid-cols-3 gap-3">
                        @forelse($projects as $project)
                            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$project->name}}</h5>
                                    <p class="font-bold"><i>type: {{$project->type->name}}</i></p>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">{{ $project->description }}</p>
                                <a href="{{route('projects.review_show', $project)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Naar reviewpagina
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>

                        @empty
                            <p>nog geen projecten</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
