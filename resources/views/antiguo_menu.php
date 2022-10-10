<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Name: {{ Auth::user()->name }}
        </h2>
    </x-slot> --}}

    <div
        class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <!-- Sidebar // barrera lateral  // navegador -->
        <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">

            <div
                class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        {{-- BOTONES DEL NAVEGADOR --}}
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">
                                    Menu
                                </div>
                            </div>
                        </li>

                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">CM Motor´s @2022</p>
                </div>
            </div>
            <!-- ./Sidebar -->
        </div>

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            You're logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
