
<div class="flex flex-col w-full h-4/5 bg-white rounded-xl mt-5 border border-gray-100 justify-between shadow-xl">
    @if($isCollectionEmpty)
        <div class='flex w-full h-full justify-center items-center'>
            <h1 class='font-medium text-gray-600 text-lg'><span class='px-2'>&#128549;</span>No entries on this date...</h1>
        </div>
    @else
        <div class='overflow-auto'>
            {{-- Daily User Entries --}}
            @foreach ($userEntries as $entry)
            <div class="flex mt-5 px-5 gap-x-20 border-b border-gray-300">
                <h2 class="flex text-xl text-gray-600 tracking-wide font-bold">
                
                {{ $entry->hours . ":" . $entry->minutes }}</h2>

                <div class="flex flex-col gap-y-1">
                    <h3 class="text-gray-900 font-bold text-lg">{{ isset($entry) ? $entry->title : '-' }}</h3>
                    <div class="flex gap-x-5 mt-1">
                        <div class="flex gap-x-2 items-center">
                            <svg class="w-5 h-5 text-indigo-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path></svg>
                            <h4 class="text-gray-500 tracking-wide text-sm">{{ isset($entry) ? $entry->project : '-' }}</h4>
                        </div>
                        <span style="width: 5px;, height: 5px;">&#183;</span>
                            <div class="flex gap-x-2 items-center">
                            <svg class="w-5 h-5 text-indigo-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>
                        <h4 class="text-gray-500 tracking-wide text-sm">{{ isset($entry) ? $entry->notes : '-' }}</h4>
                        </div>
                    </div>
                    <div class="flex gap-x-2 items-center mb-10">
                        <svg class="w-5 h-5 text-indigo-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                        <h4 class="text-gray-500 tracking-wide text-sm">Feature Documentation</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
  
        
  
    <!-- Time Tracking Submit button section -->
    <div class='flex items-center justify-between px-5 py-6 border-t-2 border-gray-300'>
        <div class='flex items-center gap-x-10'>
            <div class='flex flex-col'>
                <h2 class='text-indigo-300 font-bold'>Total Time</h2>
                <h2 class='text-gray-900 text-3xl font-medium'>{{-- isset($sumOfEntryDurations) ? $sumOfEntryDurations : '-' --}}00:00</h2>
            </div>
            <h2 class='text-gray-600 font-medium tracking-wide'>{{ $dateForHumans }}</h2>
        </div>
    <livewire:new-tracking-entry />
    </div>
  
  
</div>
