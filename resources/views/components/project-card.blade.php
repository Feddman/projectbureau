<div class="flex flex-col justify-between max-w-sm p-6  border-gray-200 rounded-lg shadow-md @if($project->groups->count() == 0) bg-gradient-to-r from-lime-200 to-lime-300 @else bg-gradient-to-r from-orange-200 to-orange-300 @endif">
    <div class="flex-col">
        <a class="flex justify-between" href="#">
            <div class="left-card">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$project->name}}</h5>
                <p class="font-bold"><i>type: {{$project->type->name}}</i></p>
            </div>
            <div class="right-priority">
                <span class="bg-white-100 bg-white-500 text-xs font-medium mr-2 px-3.5 py-2.5 rounded dark:text-white-700 dark:text-gray-700 border border-gray-700">
                    @if(isset($project->priority))
                        @if($project->priority == 3)3 
                        @elseif($project->priority == 2)2 
                        @else 1 
                        @endif 
                    @endif</span>
            </div>
        </a>
        <p class="mb-3 font-normal text-gray-700">{{ $project->description }}</p>
    </div>
    <a href="{{route('projects.show', $project)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white focus:ring-4 focus:outline-none rounded focus:ring-blue-300 @if($project->groups->count() == 0) bg-gradient-to-r from-lime-700 to-lime-800 hover:bg-lime-600 @else bg-gradient-to-r from-orange-700 to-orange-800 hover:bg-orange-600 @endif">
        Naar projectpagina
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
</div>
