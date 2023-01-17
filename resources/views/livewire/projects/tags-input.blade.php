<div class="mb-4">
	@if(isset($project))
		<i>Labels: @foreach($project->tags as $tab)
				<span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{$badge->name}}</span>
			@endforeach
		</i>
	@endif
	<label for="">Tags (gekozen uit dropdown)</label>
	<select id="tag-input" name="tags[]" class="border-2 w-full p-4 rounded-lg" multiple></select>
</div>

@push('scripts')
	<script type="module">
		$( document ).ready( function () {
			let projectTags = {!! json_encode($projectTags) ?? [] !!};
			let formattedTags = projectTags.map( ( tag ) => {
				return tag.id || tag;
			} );

			$( "#tag-input" ).select2( {
				tags: true,
				tokenSeparators: [ ',' ],
				theme: 'classic',
				placeholder: 'HTML, PHP, JavaScript',
				createTag: function ( params ) {
					return undefined;
				},
				data: {!! json_encode($allTags) !!},
			} )
				.val( formattedTags ).trigger( 'change' );
		} );
	</script>
@endpush
