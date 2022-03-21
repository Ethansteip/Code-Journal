
<div 
    x-data="{ show: @entangle($attributes->wire('model')) }" 
    x-show="show" 
    @keydown.escape.window="show = false"
    style="display: none"
>

    <div class='fixed inset-0 bg-gray-900 bg-opacity-70' @click="show = false"></div>
        <div class='flex flex-col justify-between bg-white p-4 shadow-md w-1/3 h-2/3 m-auto rounded-md fixed inset-0' x-show="show" 
        x-transition:enter.duration.100ms
        x-transition:leave.duration.100ms>

        <header>
            <h3 class='text-3xl text-black font-bold'>
                {{ $title }}
            </h3>
        </header>

        <main class='text-medium text-gray-800 gap-y-10'>
            {{ $body }}
        </main>

        <footer class='flex gap-x-4 justify-end'>
            {{ $footer }}
        </footer>
        
        </div>
</div>