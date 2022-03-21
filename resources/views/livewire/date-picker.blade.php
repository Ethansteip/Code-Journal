<div class='w-full'>
    <div class="flex w-full items-center mt-8">
      <div class="flex w-full h-auto items-center gap-x-5">
        <div class="flex justify-between gap-x-8 border-r-2 border-indigo-300 pr-5">

          {{-- Start Toggle Week +/- --}}
              <button wire:click="navigateWeeks(7)">  
                <svg class="w-6 h-6 text-indigo-400 hover:text-indigo-500 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
              </button>
              <button wire:click="navigateWeeks(-7)">
                <svg class="w-6 h-6 text-indigo-400 hover:text-indigo-500 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
          {{-- End Toggle Week +/- --}}

        </div>

        {{-- Month and Year --}}
        <div class="flex items-center gap-x-5">
          <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          <h2 class="text-gray-600 text-xl font-bold">{{ $currentMonth . ' ' . $currentYear }}</h2>
        </div>
      </div>
        <button wire:click="$emit('resetDate')" class=" px-4 py-1 bg-indigo-400 hover:bg-indigo-600 text-white text-lg transition duration-200 rounded-full shadow-lg">Today</button>
    </div>

    {{--Weekly Days Display--}}
    <div class="flex items-center w-full justify-between gap-x-3 px-8 py-2 border border-gray-300 bg-gray-800 rounded-lg mt-3 shadow-lg">
        @foreach($thisWeeksArray as $key => $value)
        <button wire:click="$emit('findEntriesMatchingDate', '{{ $value[2] }}')" class='flex flex-col items-center gap-y-1 pt-1'>
          <div id="date-picker" class='flex {{ ($selectedDate == $value[2]) ? 'bg-indigo-400 flex justify-center items-center relative text-white py-3 w-20 shadow-lg rounded font-extrabold text-xl' : 'bg-gray-800 relative flex justify-center items-center text-white py-3 w-20 shadow-lg rounded font-extrabold text-xl hover:bg-gray-600 transition duration-300'}}'>
            {{ $value[0] }}
            <br>
            {{ $value[1] }}
              <div class='absolute top-0 right-0'>
                <svg class="w-4 h-4 text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              </div>
          </div>
        </button>
        @endforeach
    </div>

    {{-- Date Header --}}
    {{-- <div class='flex w-auto mt-4 ml-3'>
      <h2 class='text-2xl font-bold text-gray-800'>{{ $date }}</h2>
    </div> --}}

</div>
