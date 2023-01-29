@props([
    'message' => $message,
    'read' => $message->isReadByUser(auth()->id()),
    'selected' => $selectedMessage == $message
])

<ul {{$attributes->class([
    'w-full px-4 py-2 text-left border-b border-gray-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700',
    'font-bold' => !$read,
    'font-medium' => $read,
    'text-white bg-blue-700' => $selected,
    'hover:bg-gray-100 hover:text-blue-700 focus:ring-2 focus:ring-blue-700 focus:text-blue-700' => !$selected])->merge()}}>
	<div class="flex justify-between">
		<span>{{$message->subject}}</span>
		<span>{{\Carbon\Carbon::parse($message->created_at)->format('d-m-Y H:i')}}</span>
	</div>
	<p>{{$message->message}}</p>
</ul>
