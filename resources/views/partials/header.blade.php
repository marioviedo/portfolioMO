<header>
    <div class="w-full ">

        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">

                <a href="{{route('home')}}" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">Mario Oviedo</a>
                
                <!-- dropdown button -->
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- end dropdown button -->

            </div>
            <!-- navbar -->
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <!-- Navigation Buttons -->
                <a class="{{request()->routeIs('home') ? 'text-gray-900 bg-gray-200 ':''}}px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('home')}}">Portfolio</a>
                <a class="{{request()->routeIs('projects') ? 'text-gray-900 bg-gray-200 ':''}}px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('projects')}}">Projects</a>
                <a class="{{request()->routeIs('contact') ? 'text-gray-900 bg-gray-200 ':''}}px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('contact')}}">Contact</a>
                <!-- end Navigation Buttons-->

                <!-- Dark Mode toggle -->
                <div class="flex  items-center space-x-2 px-4 py-2 md:mt-0 ">
                    <span class="text-sm">Light</span>
                    <label for="toggle" class="flex items-center w-9 h-5 dark:bg-gray-600 bg-gray-200 p-1 cursor-pointer rounded-full duration-300 ease-in-out">
                        <div class="toggle-dot w-4 h-4 rounded-full dark:bg-blue-100 bg-gray-800 transform duration-300 ease-in-out dark:translate-x-3"></div>
                    </label>
                    <span class="text-sm">Dark</span>
                    <input @click="isDark = !isDark" id="toggle" type="checkbox" class="hidden"/>
                </div>
                <!-- end Dark Mode toggle-->
            </nav>
            <!-- end nav bar -->
        </div>
    </div>
</header>
