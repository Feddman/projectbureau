
<div class="border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-2">
            <a wire:click="setTabActive('overzicht')" href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 @if($tabActive == 'overzicht') text-blue-600 border-blue-600 active dark:text-blue-500 dark:border-blue-500 @endif  group">
                <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Overzicht
            </a>
        </li>
        <li class="mr-2">
            <a wire:click="setTabActive('groepen')" href="#" class="inline-flex border-b-2 rounded-t-lg border-transparent p-4 @if($tabActive == 'groepen') text-blue-600 border-blue-600 active dark:text-blue-500 dark:border-blue-500 @endif group" aria-current="page">
                <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                Groepen <span class="ml-1 text-xs text-blue-500 dark:text-blue-400 font-bold">{{$project->groups->count()}}</span>
            </a>
        </li>

    </ul>



    <div class="mt-4">
        @if($tabActive == 'overzicht')
           @livewire('projects.tabs.overzicht', ['project' => $project])
        @elseif($tabActive == 'groepen')
            @livewire('projects.tabs.groepen', ['project' => $project])
        @endif
    </div>

</div>
