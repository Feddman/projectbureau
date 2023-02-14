<div x-data="{showInputs: false}">
    <x-alerts></x-alerts>
    @if(!empty($group->pivot))
        <ul class="w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200">
            <li class="text-blue-500 py-2 px-4 w-full rounded-t-lg border-b border-gray-200">
                <a href="{{$group->pivot['trello_link']}}" class="flex">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    <span class="ml-2"> Trello link</span>
                </a>
                <input class="w-full" x-transition x-show="showInputs" wire:model="group.pivot.trello_link" type="text">
            </li>

            <li class="text-blue-500 py-2 px-4 w-full border-b border-gray-200">
                <a href="{{$group->pivot['github_link']}}" class="flex">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    <span class="ml-2"> Github Repo </span>
                </a>
                <input class="w-full" x-transition x-show="showInputs" wire:model="group.pivot.github_link" type="text">
            </li>
        </ul>

    {{-- save button here --}}
    <button class="text-white bg-green-500 p-2 my-2" x-show="showInputs" @click="showInputs = false" wire:click="save">Opslaan</button>
    <button class="text-white bg-blue-500 p-2 my-2" x-show="showInputs" @click="showInputs = !showInputs">Annuleren</button>
    {{-- edit button here --}}
    <button class="text-white bg-blue-500 p-2 my-2" x-show="!showInputs" @click="showInputs = !showInputs">Edit</button>
    @endif
</div>
