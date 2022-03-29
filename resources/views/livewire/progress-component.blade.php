
<div class='flex w-1/2 gap-y-8 h-max'>
    <div class='flex flex-col columns-2 col w-full mt-20 mx-8 rounded-xl bg-white'>
        

        <div class='flex'>
        {{-- Begin Progress Ring Column --}}
        <div class='flex flex-col items-center col-span-1 w-max '>

            <div class='flex justify-center py-5'>
                <div class='flex items-center gap-x-5 px-5'>
                    <button class='py-2 text-xl tracking-wide text-gray-600 font-medium border-b-2 border-white hover:border-blue-400 transition duration-300'>This Week</button>
                    <button class='py-2 text-xl tracking-wide text-gray-600 font-medium border-b-2 border-white hover:border-blue-400 transition duration-300'>This Month</button>
                </div>
            </div>
            
                <div class='px-10 py-5'>
                    <div class='skill'>
                        <div class='outter'>
                        <div class='inner'>
                            <div id="number" class='font-extrabold'>
                            65%
                            </div>
                        </div>
                        </div>
                        
                        <svg class='progress-ring' xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                        <defs>
                            <linearGradient id="GradientColor">
                                <stop offset="0%" stop-color="#a5b4fc" />
                                <stop offset="100%" stop-color="#3730a3" />
                            </linearGradient>
                        </defs>
                        <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>

                <div class='p-3'>
                    You've logged x hours of your weekly goal of x
                </div>

        </div>
        {{-- End Progress Ring Column --}}

        {{-- Begin Progress Ring Column --}}
        <div class='flex flex-col items-center col-span-1 w-max bg-white'>
            <div class='flex justify-center w-full py-5'>
                <div class='flex items-center gap-x-5 px-5'>
                    <button class='py-2 text-xl tracking-wide text-gray-600 font-medium border-b-2 border-white hover:border-blue-400 transition duration-300'>Achievements</button>
                </div>
            </div>
        </div>
    <div>
    </div>
</div>

