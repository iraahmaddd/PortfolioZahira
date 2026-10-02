@props(['videos' => []])

<div data-slideshow class="relative">
    @if(count($videos) > 0)
        <div class="group/slideshow relative aspect-video overflow-hidden bg-black border-b border-gray-800">
            @foreach($videos as $index => $file)
                <video src="{{ asset('videos/' . $file) }}"
                       class="absolute inset-0 h-full w-full object-contain transition-opacity duration-500 {{ $index === 0 ? '' : 'opacity-0 pointer-events-none' }}"
                       controls playsinline preload="metadata"
                       data-slide="{{ $index }}"></video>
            @endforeach

            <span data-counter
                  class="absolute top-3 right-3 z-10 rounded-full bg-darkBg/80 border border-gray-700 px-2.5 py-1 text-[10px] font-semibold text-gray-300 backdrop-blur-sm pointer-events-none">
                1 / {{ count($videos) }}
            </span>

            @if(count($videos) > 1)
                <button type="button" data-prev aria-label="Sebelum"
                        class="absolute left-3 top-1/2 -translate-y-1/2 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-darkBg/70 border border-gray-700 text-gray-200 transition hover:bg-accentBlue hover:text-white hover:border-accentBlue opacity-0 group-hover/slideshow:opacity-100 focus-visible:opacity-100 max-md:opacity-100">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </button>
                <button type="button" data-next aria-label="Seterusnya"
                        class="absolute right-3 top-1/2 -translate-y-1/2 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-darkBg/70 border border-gray-700 text-gray-200 transition hover:bg-accentBlue hover:text-white hover:border-accentBlue opacity-0 group-hover/slideshow:opacity-100 focus-visible:opacity-100 max-md:opacity-100">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </button>
            @endif
        </div>

        @if(count($videos) > 1)
            <div class="flex items-center justify-center gap-2 py-3 bg-cardBg border-b border-gray-800">
                @foreach($videos as $index => $file)
                    <button type="button" data-dot="{{ $index }}" aria-label="Video {{ $index + 1 }}"
                            class="h-1.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'w-6 bg-neonBlue' : 'w-3 bg-gray-600 hover:bg-gray-500' }}">
                    </button>
                @endforeach
            </div>
        @endif
    @else
        <div class="aspect-video flex flex-col items-center justify-center text-center px-6 bg-navyDark/60 border-b border-gray-800">
            <i class="fa-solid fa-film text-3xl text-neonBlue mb-3"></i>
            <p class="text-xs text-gray-400 leading-relaxed">
                {{ __('site.projects.video_empty') }}<br>
                <code class="text-neonBlue">public/videos/</code>
            </p>
        </div>
    @endif
</div>
