<div class="tab p-4">
     <h4 class="text-2xl font-bold mb-4">Gekoppelde projectgroepen</h4>
    <div class="grid grid-cols-3 gap-3">
    @forelse($project->groups as $group)
            <x-dashboard.group-card :archived=false :withProjects=true :group="$group" :project="$project" />
    @empty
    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <p class="font-bold">Geen projectgroepen</p>
        <p>Er zijn nog geen projectgroepen gekoppeld aan dit project.</p>
    </div>
    @endforelse
    </div>
    @if(\Auth::user()->hasRole('admin'))
        <div x-data="{show: false}" class="archive-container">
            <button x-on:click="show = !show" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-5 rounded p-2" x-html="show ? 'Hide Archive' : 'Show Archive'"></button>
            <div x-transition x-show="show" class="archive" >

                <h4 class="text-2xl font-bold mb-4 mt-7 ">Archief</h2>
                @forelse($project->archivedGroups as $group)
                    <x-dashboard.group-card :archived=true :withProjects=true :group="$group" :project="$project" />
                @empty
                    <p>No archived groups to show</p>
                @endforelse

            </div>
        </div>
    @endif

    @can('Manage Projects')
        <select wire:model="groupSelected" class="mt-4 mb-4 bg-gray-100 border-2 w-full p-4 rounded-lg">
            <option value="">Selecteer een projectgroep</option>
            @foreach($groups as $group)
                <option value="{{$group->id}}">{{$group->name}} (@foreach($group->users as $user) {{$user->name}}@unless($loop->last), @endunless @endforeach)</option>
            @endforeach
        </select>
    @endcan

    @if($groupSelected)
        @auth
        <button wire:click="saveGroup" type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-500 focus:outline-none dark:focus:ring-blue-500">Projectgroep koppelen</button>
        @endauth
    @endif


</div>
