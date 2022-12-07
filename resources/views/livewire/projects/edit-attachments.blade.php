<div>
     <ul class="mb-8 space-y-4 text-left text-gray-500 dark:text-gray-400">

        @foreach($project->getMedia('project_attachments') as $download)
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span><a class="text-blue-500" href="{{route('media.download', $download->id)}}"> {{$download->name}}</a> </span>
            <a wire:click="deleteImage({{$download->id}})" style="margin-left: auto">
                <svg class="text-red-400 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </a>
        </li>
        @endforeach


    </ul>
</div>
