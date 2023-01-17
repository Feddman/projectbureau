<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md">
    <a href="#">
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><a href="{{route('projects.show', $project)}}">{{ $project->name }} </a></h3>
        <small><i>gemaakt op {{Date('d-m-Y', strtotime($group->created_at))}}</i></small>
    </a>
    @if( auth()->user()->id == $group->creator_id || auth()->user()->hasRole('admin'))
        @if($withProjects)
            @livewire('projects.links', ['group' => $group, 'project' => $project])
        @endif
    @endif
</div>
