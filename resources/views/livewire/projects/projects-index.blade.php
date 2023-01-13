<div class="">
	<div class="p-4 flex justify-between items-center content-start">
		<h2 class="my-2 border-bottom-2 text-2xl"> Lopende projecten </h2>

		<div class="flex">
			<x-checkbox id="frontend" value="frontend" name="filterTags[]" wire:model="filterTags">
				Frontend
			</x-checkbox>
			<x-checkbox id="backend" value="backend" name="filterTags[]" wire:model="filterTags">
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

		<a href="{{ route('projects.create') }}"
		   class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Nieuw project
		</a>
	</div>

	<div class="grid grid-cols-3 gap-3">
		@forelse($projects as $project)
			<x-project-card :project="$project"/>
		@empty
			<p>nog geen projecten</p>
		@endforelse
	</div>
</div>
