<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $group->name }}</h3>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        <h4 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white font-italic">Actieve projecten:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-gray-500 dark:text-gray-400">
            @forelse($group->projects as $project)
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <a class="underline" href="{{ route('projects.show', $project) }}">{{$project->name}}</a>
            </li>
            @empty

            @endforelse
        </ul>

        <h4 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white font-italic">Leden:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-gray-500 dark:text-gray-400">
            @forelse($group->users as $user)
            <li class="flex items-center">
                <a class="underline" href="">{{$user->name}}</a>
            </li>
            @empty

            @endforelse
        </ul>
    </p>
    <a href="{{route('groups.show', $group)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Naar Projectgroep
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>

</div>
