<div>
	<div class="p-4 flex justify-between items-center content-start">
		@can('Send Messages')
			<h2 class="my-2 border-bottom-2 text-2xl">Alle berichten</h2>

			<a href="{{ route('messages.create') }}"
			   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Nieuw bericht
			</a>
		@else
			<h2 class="my-2 border-bottom-2 text-2xl">Mijn berichten</h2>
		@endcan
	</div>

	<div class="flex flex-row w-full">
		<div class="basis-1/2">

			<div id="accordion-color" class="group" data-accordion="collapse"
			     data-active-classes="bg-blue-100 text-blue-600 !rounded-b-none">

				@forelse ($groups as $group)
					<div class="group/item" wire:key="group-{{$group->id}}">
						<h2 id="accordion-color-heading-{{$loop->index + 1}}">
							<button wire:click="selectGroup({{$group}})" type="button"
							        class="group/button group-first/item:rounded-t-xl group-last/item:rounded-b-xl flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 hover:bg-blue-100 @if($this->checkGroupAlreadySelected($group)) bg-blue-100 text-blue-600 !rounded-b-none @endif ">

								<span>{{$group->name}}</span>

								<svg data-accordion-icon
								     class="w-6 h-6 @if($this->checkGroupAlreadySelected($group)) rotate-180 @endif shrink-0"
								     fill="currentColor"
								     viewBox="0 0 20 20"
								     xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd"
									      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
									      clip-rule="evenodd"></path>
								</svg>
							</button>
						</h2>

						<div id="accordion-color-body-{{$loop->index + 1}}"
						     class="group/content @if(!$this->checkGroupAlreadySelected($group)) hidden @endif">
							<div class="group-last/item:rounded-b-xl font-light border border-gray-200">
								<ul class="w-full text-sm font-medium text-gray-900">
									@forelse($group->messages as $message)
										<x-message-li wire:click="showMessage({{$message}})"
										              wire:key="message-{{$message->id}}" :message="$message"
										              :selectedMessage="$selectedMessage"/>
									@empty
										<div class="text-center py-3">
											<p>Nog geen berichten</p>
										</div>
									@endforelse
								</ul>
							</div>
						</div>
					</div>

				@empty

					<div class="text-center py-3">
						<p>Nog geen groepen</p>
					</div>
				@endforelse

			</div>
		</div>

		<div class="basis-1/2 self-start sticky top-5">
			<div class="px-5">

				@if($selectedMessage)
					<h2 class="text-4xl font-bold">{{$selectedMessage->subject}}</h2>
					<hr class="h-px my-3 bg-gray-200 border-0">
					<p>{{$selectedMessage->message}}</p>

					@can('Send Messages')
						<h2 class="my-3 text-lg font-semibold text-gray-900">Gelezen door</h2>
						<ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside">
							@forelse($selectedMessage->readByUsers as $user)
								<li>
									<span class="text-gray-900 font-semibold">{{$user->name}}</span>
									op {{\Carbon\Carbon::parse($user->pivot->read_at)->format('d-m-Y \o\m H:i')}}
								</li>

							@empty

								<span class="text-gray-900 font-semibol">Nog niet gelezen</span>
							@endforelse
						</ul>
					@endcan
				@endif
			</div>
		</div>
	</div>
</div>
