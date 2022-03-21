@extends('layouts.DashboardLayout')

@section('content')

    <div class='flex w-screen h-screen bg-gray-200'>

        <div class='w-2/3 h-screen'>
            <div class='w-auto h-fit rounded-lg shadow-lg bg-white mt-16 ml-5 pb-6'>
                <div class='flex flex-col w-full h-1/4'>

                    <!-- Overview -->
                    <div class='flex w-auto h-1/4 m-5 items-center justify-between'>
                        <div class='flex gap-x-2'>
                            {!! file_get_contents('/Users/ethansmac/Desktop/Development Projects/Code-Journal/resources/Assets/Gradient-Block-for-real.svg') !!}
                            <p class='flex text-4xl text-black font-bold tracking-wide'>Overview</p>
                        </div>
                        
                            
                          
                    </div>

                    <!-- Overview Cards -->
                    <div class='flex w-auto h-full m-5 items-center justify-between rounded-lg'>
                        
                        <!-- #1 -->
                        <div class='flex flex-col w-1/2 h-full bg-gray-800 m-2 rounded-lg gap-x-2 shadow-xl'>
                            <div class='w-full flex items-center justify-around mt-3'>
                                <div class='flex w-10 h-10 bg-gradient-to-t from-blue-800 to-blue-500 items-center justify-center rounded-full'>
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class='flex font-bold tracking-wide text-gray-300'>Hours Logged This Week</p>
                                <div class='flex px-2 py-1 bg-gray-500 rounded-lg items-center'>
                                    <svg class="text-green-300 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                    <p class=' text-green-300 font-medium'>12<span class='text-xs text-green-300 font-medium'>%</span></p>
                                </div>
                            </div>
                            <div class='flex items-center justify-center'>
                                <p class='font-bold tracking-wide text-5xl text-white mb-2'>14</p>
                            </div>
                        </div>

                        <!-- #2 -->
                        <div class='flex flex-col w-1/2 h-full bg-gray-800 m-2 rounded-lg gap-x-2 shadow-xl'>
                            <div class='w-full flex items-center justify-around mt-3'>
                                <div class='flex w-10 h-10 bg-gradient-to-t from-indigo-800 to-indigo-500 items-center justify-center rounded-full'>
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <p class='flex font-bold tracking-wide text-gray-300'>Hours Logged This Month</p>
                                <div class='flex px-2 py-1 bg-gray-500 rounded-lg items-center'>
                                    <svg class="text-red-300 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                                    <p class='text-red-300 font-medium'>6<span class='text-xs text-red-300 font-medium'>%</span></p>
                                </div>
                            </div>
                            <div class='flex items-center justify-center'>
                                <p class='font-bold tracking-wide text-5xl text-white mb-2'>37</p>
                            </div>
                        </div>

                    </div>

                    <!-- Daily Progress Circles -->
                    <div class='flex flex-col w-auto h-1/2 mx-5'>

                        <div class='flex justify-between items-center'>
                            <p class='font-bold tracking-wide text-gray-900 text-xl'>Daily Check-ins</p>
                            <button class='px-3 py-2 bg-white border-2 border-gray-300 hover:bg-gray-400 rounded-lg text-gray-800 transition duration-200 hover:text-white'>Update Check-Ins</button>
                        </div>

                        <!-- Progress Circles -->
                        <div class='flex items-center justify-between mt-10'>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-indigo-500'>
                                    <svg class="text-indigo-500 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Monday</p>
                            </div>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-indigo-500'>
                                    <svg class="text-indigo-500 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Tuesday</p>
                            </div>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-indigo-500'>
                                    <svg class="text-indigo-500 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Wednesday</p>
                            </div>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-gray-500'>
                                    <svg class="text-gray-800 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Thursday</p>
                            </div>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-gray-500'>
                                    <svg class="text-gray-800 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Friday</p>
                            </div>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-gray-500'>
                                    <svg class="text-gray-800 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Saturday</p>
                            </div>

                            <div class='flex flex-col gap-y-3 items-center'>
                                <div class='flex items-center justify-center h-16 w-16 rounded-full border-4 border-gray-500'>
                                    <svg class="text-gray-800 w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                </div>
                                <p class='font-medium text-gray-800 tracking-wider'>Sunday</p>
                            </div>

                            

                            
                        </div>
                    </div>

                    
                </div>

        </div>
                <!-- Github Contributions Component -->
                <div class='flex w-auto h-1/5 rounded-lg shadow-lg bg-white mt-10 ml-5 items-center justify-center relative'>
                    <img class='w-full h-auto blur-lg' src="{{ asset('/assets/Github-Contributions.png') }}">
                    <button class='flex absolute px-3 py-2 bg-white  hover:bg-gray-400 rounded-lg font-semibold text-gray-800 transition duration-200 hover:text-white items-center gap-x-2'>
                        <svg class='w-6 h-6' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        Show Github Contributions</button>
                </div>
    </div>

            <!-- Reading List Component -->
            <div class='flex w-1/3 h-3/4 rounded-lg shadow-lg bg-white mt-16 mx-5'>
                <div class='flex flex-col m-5 w-full'>

                    <!-- Header -->
                    <p class='flex text-2xl text-black font-bold tracking-wide'>Latest Entries</p>

                    <!-- Nav Header -->
                    <div class='flex items-center justify-between mt-10 border-b border-gray-800 pb-3'>
                        <p class='text-lg text-gray-800 font-bold tracking-wide'>Title</p>
                        <p class='text-lg text-gray-800 font-bold tracking-wide'>Date</p>
                    </div>
                    
                    <!-- Articles -->
                    <div class='flex flex-col w-full my-5 gap-y-6'>
                        <!-- #1 -->
                        <div class='flex justify-between items-center'>
                            <div class='flex gap-x-2'>
                                <div class='h-20 w-20 rounded-xl shadow-lg bg-blue-300'></div>
                                <div class='flex flex-col'>
                                    <p class='text-lg text-gray-800 font-bold tracking-wide'>This Is A Test Article</p>
                                    <p class='text-gray-400 tracking-wide'>How is this for a brief description for the <br>article I plan on writing?</p>
                                </div>
                            </div>
                                <div class='px-2 py-1 border border-gray-300 tracking-wider bg-white text-gray-800 rounded-lg'>Dec. 20</div>
                        </div>

                        <!-- #2 -->
                        <div class='flex items-center justify-between'>
                            <div class='flex gap-x-2'>
                                <div class='h-20 w-20 rounded-xl shadow-lg bg-orange-300'></div>
                                <div class='flex flex-col'>
                                    <p class='text-lg text-gray-800 font-bold tracking-wide'>This Is A Test Article</p>
                                    <p class='text-gray-400 tracking-wide'>How is this for a brief description for the <br>article I plan on writing?</p>
                                </div>
                            </div>
                            <div class='px-2 py-1 border border-gray-300 tracking-wider bg-white text-gray-800 rounded-lg'>Dec. 19</div>
                        </div>

                        <!-- #3 -->
                        <div class='flex items-center justify-between'>
                            <div class='flex gap-x-2'>
                                <div class='h-20 w-20 rounded-xl shadow-lg bg-green-300'></div>
                                <div class='flex flex-col'>
                                    <p class='text-lg text-gray-800 font-bold tracking-wide'>This Is A Test Article</p>
                                    <p class='text-gray-400 tracking-wide'>How is this for a brief description for the <br>article I plan on writing?</p>
                                </div>
                            </div>
                            <div class='px-2 py-1 border border-gray-300 tracking-wider bg-white text-gray-800 rounded-lg'>7 min.</div>
                        </div>

                        <!-- #4 -->
                        <div class='flex items-center justify-between'>
                            <div class='flex gap-x-2'>
                                <div class='h-20 w-20 rounded-xl shadow-lg bg-indigo-300'></div>
                                <div class='flex flex-col'>
                                    <p class='text-lg text-gray-800 font-bold tracking-wide'>This Is A Test Article</p>
                                    <p class='text-gray-400 tracking-wide'>How is this for a brief description for the <br>article I plan on writing?</p>
                                </div>
                            </div>
                            <div class='px-2 py-1 border border-gray-300 tracking-wider bg-white text-gray-800 rounded-lg'>7 min.</div>
                        </div>

                    </div>

                    <button class='mt-5 w-full px-3 py-2 justify-center items-center bg-white text-xl tracking-wider border-2 border-gray-300 rounded-xl hover:bg-gray-800 hover:text-white transition duration-300'>See All</button>



                </div>
            </div>
            
            
            


    </div>
    
    
@endsection