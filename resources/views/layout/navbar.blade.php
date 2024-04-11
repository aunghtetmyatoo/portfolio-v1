<!-- ====== Navbar Section Start -->
<header x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            {{-- <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <span class="text-xl xl:text-2xl font-bold text-[#090E34] dark:text-white">Home</span>
                </a>
            </div> --}}

            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                        x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            <button @click="darkMode = !darkMode" class="mr-4 text-black">
                                <template x-if="darkMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32"
                                        height="32" class="fill-current text-white">
                                        <path
                                            d="M192 64C86 64 0 150 0 256S86 448 192 448H384c106 0 192-86 192-192s-86-192-192-192H192zm192 96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                                    </svg>
                                </template>
                                <template x-if="!darkMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32"
                                        height="32" class="fill-current">
                                        <path
                                            d="M384 128c70.7 0 128 57.3 128 128s-57.3 128-128 128H192c-70.7 0-128-57.3-128-128s57.3-128 128-128H384zM576 256c0-106-86-192-192-192H192C86 64 0 150 0 256S86 448 192 448H384c106 0 192-86 192-192zM192 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z" />
                                    </svg>
                                </template>

                            </button>
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
