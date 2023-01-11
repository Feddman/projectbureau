<div class="flex items-center mr-4">
    <input type="checkbox" {{$attributes->merge(['class' => 'w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2'])}}>
    <label for="{{$id ?? ''}}" class="ml-2 text-sm font-medium text-gray-900">{{$slot}}</label>
</div>
