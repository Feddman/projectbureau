<div class="tab p-4">
     <h4 class="text-2xl font-bold mb-4">Gekoppelde projectgroepen</h4>
    <div class="grid grid-cols-3 gap-3">
    @forelse($project->groups as $group)

        <x-dashboard.group-card :withProjects=false :group="$group" />

    @empty

    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <p class="font-bold">Geen projectgroepen</p>
        <p>Er zijn nog geen projectgroepen gekoppeld aan dit project.</p>
    </div>
    @endforelse
    </div>
</div>
