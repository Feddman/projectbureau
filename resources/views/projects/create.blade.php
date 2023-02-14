<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nieuw project aanmaken
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 justify-center text-gray-900">
                    {{-- make project form --}}
                    <form x-data="{newCustomer: false}" class="md:w-1/2" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="name">Naam project</label>
                            <input type="text" name="name" id="name"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                           <div class="mb-4">
                            <label for="name">Type project</label>
                            <select name="type" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('customer_id') border-red-500 @enderror">
                                <option value="">Selecteer type project</option>
                                @foreach(\App\Models\ProjectType::all() as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach

                            </select>
                            @error('customer_id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="name">Startdatum project</label>
                            <input type="date" name="start_date" id="start_date"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('start_date') border-red-500 @enderror" value="{{ old('start_date') }}">
                            @error('start_date')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description">Beschrijving</label>
                            <textarea name="description" id="description" cols="30" rows="4" placeholder="Korte samenvatting van het project in enkele zinnen" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                          <div class="mb-4">
                            <label for="name">Contactpersoon</label>
                            <select name="customer_id" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('customer_id') border-red-500 @enderror">
                                <option value="">Selecteer een contactpersoon</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->contact_name }} <i>({{$customer->contact_email }})</i></option>
                                @endforeach
                            </select>
                            @error('customer_id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button @click="newCustomer =! newCustomer" type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-500 focus:outline-none dark:focus:ring-blue-500">Nieuwe contactpersoon</button>

                        <div x-show="newCustomer">
                             <div class="mb-4">
                                <label for="contact_name">Naam contactpersoon</label>
                                <input type="text" name="contact_name" id="contact_name"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('contact_name') border-red-500 @enderror" value="{{ old('contact_name') }}">
                                @error('contact_name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                              <div class="mb-4">
                                <label for="contact_email">Email contactpersoon</label>
                                <input type="text" name="contact_email" id="contact_email"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('contact_email') border-red-500 @enderror" value="{{ old('contact_email') }}">
                                @error('contact_email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="mb-4">
                                <label for="contact_phone">Telefoonnummer contactpersoon</label>
                                <input type="text" name="contact_phone" id="contact_phone"  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('contact_phone') border-red-500 @enderror" value="{{ old('contact_phone') }}">
                                @error('contact_phone')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="info_docent">Info vanuit docent</label>
                            <textarea name="info_docent" id="info_docent" cols="30" rows="4" placeholder="Informatie geleverd door docenten" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('info_docent') border-red-500 @enderror">{{ old('info_docent') }}</textarea>
                            @error('info_docent')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        @livewire('projects.tags-input')

                        @if( auth()->user()->hasRole('admin'))
                        <div class="mb-4">
                            <label for="priority">Prioriteit</label>
                            <select name="priority" id="" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('customer_id') border-red-500 @enderror">
                                <option value="standaard">standaard</option>
                                <option value="hoog">hoog</option>
                            </select>
                            @error('priority')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @endif

                        <div class="mb-4">
                            <label for="info-docent">Upload documenten</label>
                            <input multiple name="files[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                            @error('files')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Project aanmaken</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')
</x-app-layout>
