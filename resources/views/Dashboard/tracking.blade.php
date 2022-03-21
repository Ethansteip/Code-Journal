@extends('layouts.DashboardLayout')

@section('content')


    <div class='flex w-screen h-screen bg-red-200 items-center justify-center'>

        <div class='flex flex-col w-2/3 h-screen items-center justify-center'>

                <div class='flex w-1/2 h-1/2 justify-between bg-white rounded-lg shadow mx-2'>
                    
                    <div class='flex flex-col w-full h-auto mx-2 my-2'>

                        <form action='{{ route('Tracking-Submit') }}' method='POST'>
                            @csrf
                                <label for='project'>Project Name</label>
                                <input type='text' id='project' name='project' class='w-full border border-gray-800 rounded-xl py-2'>

                                <label for='title'>Log Title</label>
                                <input type='text' id='title' name='title' class='w-full border border-gray-800 rounded-xl py-2'>

                                <label for='notes'>Notes</label>
                                <input type='text' id='notes' name='notes' class='w-full border border-gray-800 rounded-xl py-2'>

                                <label for='duration'>Duration</label>
                                <input type='text' id='duration' name='duration' class='w-full border border-gray-800 rounded-xl py-2'>

                                <label for='test'>Test</label>
                                <input type='text' id='test' name='test' class='w-full border border-gray-800 rounded-xl py-2'>

                                <button type='submit' class='px-3 py-2 bg-blue-500 text-white font-medium tracking-wide rounded-xl shadow-lg mt-3 hover:bg-blue-800 transition duration-200'>Submit</button>
                        </form>


                    </div>
                </div>
        </div>


    </div>
    
    
@endsection