<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="{{route('groups.show', $group)}}">{{ $group->name }} </a></h3>
        <small><i>gemaakt op {{Date('d-m-Y', strtotime($group->created_at))}}</i></small>
    </a>

    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        @if($withProjects)
        <h4 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white font-italic">Actieve projecten:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-gray-500 dark:text-gray-400">

                @forelse($group->projects as $project)
                <li class="flex items-center">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <a class="underline" href="{{ route('projects.show', $project) }}">{{$project->name}}</a>
                </li>
                @empty
                    <p>Nog geen projecten aangenomen.</p>
                @endforelse
        </ul>
        @endif
        <h4 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white font-italic">Leden:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-gray-500 dark:text-gray-400">
            @forelse($group->users as $user)
            <li class="flex items-center">
                <a class="underline" href="">{{$user->name}}</a>
            </li>
            @empty
                <p>Nog geen teamleden in dit team</p>
            @endforelse
        </ul>
    </p>
    @if($withProjects)
    <ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

        <li class="text-blue-500 py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
            <a href="{{$group->pivot->trello_link}}" class="flex">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                <span class="ml-2"> Trello link</span>
            </a>
        </li>
        <li class="text-blue-500 py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">
            <a href="{{$group->pivot->github_link}}" class="flex">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                <span class="ml-2"> Github Repo </span>
            </a>

        </li>

    </ul>
    @endif
</div>
