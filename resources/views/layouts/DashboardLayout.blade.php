<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Journal</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Frappe Charts CDN --}}
    <script src="https://unpkg.com/frappe-charts@1.2.4/dist/frappe-charts.min.iife.js"></script>

    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="./css/progress-ring.css">

    @livewireStyles
    {{-- Alpine JS CDN --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>
<body>

    <div class='flex min-w-screen h-screen'>

        <!-- Main Side Nav -->
        <div class='flex min-w-screen h-screen'>
            <div class='flex flex-col w-64 h-full bg-gray-800 justify-between'>

                <div class='flex flex-col'>
                    <!-- Top Nav Logo -->
                    <a href='/'>
                        <div class='flex p-7 items-center gap-x-2'>
                            {!! file_get_contents('/Users/ethansmac/Desktop/Development Projects/Code-Journal/resources/Assets/Asset 3.svg') !!}
                            <h1 class='text-2xl font-bold text-white'>Code Journal</h1>
                        </div>
                    </a>
                    
                    <!-- NAVIGATION BUTTONS --> 
                    <a href='{{ route('home') }}'>
                        <div class='flex group mx-2 mt-5 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                            <svg class="text-gray-500 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <p class='text-gray-500 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Home</p>
                        </div>
                    </a>

                    <a href='{{ route('tracking') }}'>
                        <div class='flex group mx-2 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                            <svg class="text-gray-500 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                            <p class='text-gray-500 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Time Tracking</p>
                        </div>
                    </a>

                    <a href='{{ route('TrackingComponent')}}'>
                        <div class='flex group mx-2 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                            <svg class="text-gray-500 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                            <p class='text-gray-500 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Statistics</p>
                        </div>
                    </a>    

                    <div class='flex group mx-2 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                        <svg class="text-gray-500 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <p class='text-gray-500 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Library</p>
                    </div>

                    <div class='flex group mx-2 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                        <svg class="text-gray-500 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <p class='text-gray-500 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Pomodoro</p>
                    </div>
                </div>

                <!-- Bottom Side Nav -->
                <div class='flex flex-col mb-3'>
                    <div class='flex group mx-2 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                        <svg class="text-gray-400 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <p class='text-gray-400 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Settings</p>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type='submit' class='flex w-60 group mx-2 rounded-lg hover:bg-gray-500 transition duration-200 px-3 py-3 items-center gap-x-3'>
                                <svg class="text-gray-400 group-hover:text-white w-6 h-6 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                <p class='text-gray-400 group-hover:text-white text-lg font-medium tracking wide transition duration-200'>Logout</p>
                            </button>
                    </form>
                </div>
               
            </div>

            
        </div>

        <!-- Yield Content -->

        @yield('content')


    </div>
    @livewireScripts
</body>
</html>