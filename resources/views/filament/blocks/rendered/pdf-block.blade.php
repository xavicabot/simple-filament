<div>
    <div
        class="mx-auto max-w-xl relative isolate flex flex-col justify-center overflow-hidden bg-gray-100 px-4 sm:px-8 py-20 sm:py-36 mb-8">
        <img src="{{ asset('uploads/'. $image) }}" alt=""
             class="absolute inset-0 -z-10 h-full w-full object-cover my-0">

        <h3 class="mt-3 text-base sm:text-lg font-semibold leading-6 text-white text-center">
            <a href="{{ asset('uploads/'. $file) }}" target="_blank"
               class="bg-primary-600 no-underline py-3 px-6 block md:inline-block leading-5 sm:leading-6 uppercase font-extrabold rounded-lg hover:bg-cgreen-100 !text-white">
                {{ $title }}
            </a>
        </h3>
    </div>
</div>
