<div class="max-w-sm p-6 bg-gradient-to-r from-pink-200 to-pink-300 border border-gray-200 rounded-lg shadow-md">
  
    <span class="flex justify-between">
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-blue-900"><a href="{{route('groups.show', $group)}}">{{ $group->name }} </a></h3>
        @if(isset($archived) && !$archived)
            <form action="{{route('group-projects.destroy', $group->pivot->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Ontkoppel groep" class="bg-red-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            </form>
        @elseif(isset($archived) && $archived)
            <form action="{{route('group-projects.update', $group->pivot->id)}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="project_id" value="{{$group->pivot->project_id}}">
                <input type="submit" value="Koppel groep opnieuw" class="bg-green-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            </form>
        @endif
        

    </span>
    <small><i class="text-blue-900">gemaakt op {{Date('d-m-Y', strtotime($group->created_at))}}</i></small>

    <p class="mb-3 font-normal text-blue-900">
        {{-- @if($withProjects)
        <h4 class="mb-2 font-bold tracking-tight text-blue-900 font-italic">Actieve projecten:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-blue-900">

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
        <h4 class="mb-2 font-bold tracking-tight text-blue-900  font-italic">Leden:</h4>
        <ul class="mb-4 space-y-1 max-w-md list-inside text-blue-900 ">
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
