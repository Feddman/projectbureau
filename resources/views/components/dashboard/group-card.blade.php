<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md">
    <a href="#">
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><a href="{{route('groups.show', $group)}}">{{ $group->name }} </a></h3>
        <small><i>gemaakt op {{Date('d-m-Y', strtotime($group->created_at))}}</i></small>
    </a>

    <p class="mb-3 font-normal text-gray-700">
        {{-- @if($withProjects)
        <h4 class="mb-2 font-bold tracking-tight text-gray-900 font-italic">Actieve projecten:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-gray-500">

                @forelse($group->projects as $project)
                <li class="flex items-center">
                    <svg class="w-4 h-4 mr-1.5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <a class="underline" href="{{ route('projects.show', $project) }}">{{$project->name}}</a>
                </li>
                @empty
                    <p>Nog geen projecten aangenomen.</p>
                @endforelse
        </ul>
        @endif --}}
        <h4 class="mb-2 font-bold tracking-tight text-gray-900  font-italic">Leden:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-gray-500 ">
            @forelse($group->users as $user)
            <li class="flex items-center">
                <a class="underline" href="">{{$user->name}}</a>
            </li>
            @empty
                <p>Nog geen teamleden in dit team</p>
            @endforelse
        </ul>
    </p>
    @if( auth()->user()->id == $group->creator_id || auth()->user()->hasRole('admin'))
        @if($withProjects)
            @livewire('projects.links', ['group' => $group, 'project' => $project])
        @endif
    @endif
</div>
