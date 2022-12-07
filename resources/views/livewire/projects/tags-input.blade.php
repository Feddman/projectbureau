<div class="mb-4">
    @if(isset($project))
     <i>Labels: @foreach($project->tags as $tab)
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$badge->name}}</span>
                @endforeach
     </i>
    @endif
    <label for="">Tags (zonder hashtag, gescheiden door komma's)</label>
    <input type="text" placeholder="html, php, javascript" name="tags" id="tags"  class="bg-gray-100 border-2 w-full p-4 rounded-lg">
</div>
