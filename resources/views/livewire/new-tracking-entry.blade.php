<form action='{{ route('Tracking-Submit') }}' method='POST'>
    @csrf

    <x-entry-button class='bg-indigo-400 hover:bg-indigo-600' wire:click="$set('showModal', true)">Submit New Entry</x-entry-button>


        <x-tracking-entry-modal wire:model.defer="showModal">

            <x-slot name='title'>
            New Time Entry
            </x-slot>

            <x-slot name='body'>
                <div class='flex flex-col gap-y-2'>
                    <label for='project'>Project Name</label>
                    <input type='text' id='project' name='project' class='w-full border-2 border-gray-300 rounded-lg py-2 px-2'>

                    <label for='title'>Log Title</label>
                    <input type='text' id='title' name='title' class='w-full border-2 border-gray-300 rounded-lg py-2 px-2'>

                    <label for='notes'>Notes</label>
                    <input type='text' id='notes' name='notes' class='w-full border-2 border-gray-300 rounded-lg py-2 px-2'>

                    <div class='flex gap-x-3'>
                        <div class='flex flex-col w-full'>
                            <label for='hours'>Hours</label>
                            <input type='text' id='hours' name='hours' class='w-full border-2 border-gray-300 rounded-lg py-2 px-2'>
                        </div>
                        <div class='flex flex-col w-full'>
                            <label for='minutes'>Minutes</label>
                            <input type='text' id='minutes' name='minutes' class='w-full border-2 border-gray-300 rounded-lg py-2 px-2'>
                        </div>
                    </div>
                </div>

            </x-slot>

            <x-slot name='footer'>
            <x-entry-button class='bg-gray-500 hover:bg-gray-700' wire:click="$set('showModal', false)">Cancel</x-entry-button>
            <x-entry-button type='submit' class='bg-indigo-500 hover:bg-indigo-700'>Submit</x-entry-button>
            </x-slot>

        </x-tracking-entry-modal>


</form>

