<x-guest-layout>

    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <p>Projectbureau</p>
            </li>
            <li>
                <div class="flex items-center">
                    Curio Software Developer
                </div>
            </li>
        </ol>
        <div class="fixed top-0 right-0 px-6 py-4 sm:block xs:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-blue-700 no-underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-blue-700 no-underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-blue-700 no-underline">Register</a>
                @endif
            @endauth
        </div>
    </nav>

    <div class="py-12">
        <div class="text-center max-w-6xl mx-auto sm:px-6 lg:px-8">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">De plek voor projecten!</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque beatae delectus dicta dolorem error exercitationem ipsum natus nobis odit voluptates! Dolores, natus, optio? Ducimus eligendi harum in, iure repudiandae tenetur?</p>

            <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white" class="py-7">
                <h2 id="accordion-color-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                        <span>Wat is Projectbureau?</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi distinctio dolorum, eligendi fugiat impedit iure iusto laboriosam magnam maiores molestias mollitia nam nobis nulla placeat quis tempore veritatis? Provident?</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                        <span>Test</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur et libero magnam natus odio perferendis porro quibusdam rerum soluta, suscipit tenetur veritatis! Beatae libero obcaecati possimus, quas rem sint!</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                        <span>Test</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio dolorum ea est exercitationem fuga, iusto magnam maxime nemo nesciunt non pariatur, quaerat quibusdam saepe, sint tenetur vel veritatis voluptatum!</p>
                    </div>
                </div>
            </div>
            <a href=""><button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 h-12">Ga naar Projecten</button></a>
        </div>
    </div>
</x-guest-layout>
