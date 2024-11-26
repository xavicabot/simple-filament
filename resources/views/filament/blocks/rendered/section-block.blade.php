@php use Carbon\Carbon; @endphp
@if(now() >= Carbon::createFromFormat('Y-m-d H:i:s', $visible_at)->format('Y-m-d H:i:s'))
    <div x-data="{
        id: '{{ $title }}',
        active: 0,

    }" role="region" class="">
        <h2>
            <button x-on:click="active = !active" :aria-active="active"
                    class="flex justify-between w-full text-left items-center border-b border-black font-semibold">
                <span class="uppercase">{{ $title }}</span>
                <span x-show="active" aria-hidden="true" class="pr-4 text-cgreen-500 text-3xl"
                      style="display: none;">−</span>
                <span x-show="!active" aria-hidden="true" class="pr-4 text-cgreen-500 text-3xl" style="">+</span>
            </button>
        </h2>

        <div x-show="active" x-collapse="" style="display: none;">
            <div class="pb-4">
                <div class="mt-10 max-w-7xl prose lg:prose-md font-[18px]">
                    {!! tiptap_converter()->asHTML($content) !!}
                </div>
            </div>
        </div>
    </div>
@endif
