<div x-data="{show:false}" @mouseleave="show = false" class="inline-block relative z-0 overflow-visible w-1/2">
    <div x-show="show" class="bg-indigo-500 text-white text-xs rounded py-1 px-4 right-0 bottom-full absolute w-full inline-block overflow-hidden">
        {{ $slot }}
        <svg x-show="'{{ $notch }}' === 'left'" class="absolute text-indigo-600 h-2 left-0 ml-3 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
        <svg x-show="'{{ $notch }}' === 'center'" class="absolute text-indigo-600 h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
        <svg x-show="'{{ $notch }}' === 'right'" class="absolute text-indigo-600 h-2 right-0 mr-3 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
    </div>
    <a @mouseover="{show=true}" class="cursor-pointer"><i class="mx-1 far fa-question-circle text-indigo-500 hover:text-indigo-600"></i></a>
</div>
