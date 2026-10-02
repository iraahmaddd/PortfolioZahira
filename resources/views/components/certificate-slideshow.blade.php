@props(['files' => []])

@php
    $labelFor = fn (string $file) => str_replace(
        ['-', '_'],
        ' ',
        pathinfo($file, PATHINFO_FILENAME)
    );
@endphp

<div data-slideshow data-interval="3000" class="relative">
    @if(count($files) > 0)
        <div class="group/cert relative mx-auto aspect-[3/4] w-full max-w-md overflow-hidden rounded-xl border border-gray-800 bg-navyDark">
            @foreach($files as $index => $file)
                <a href="{{ asset('images/certificates/' . $file) }}" target="_blank" rel="noopener noreferrer"
                   class="absolute inset-0 block bg-white transition-opacity duration-500 {{ $index === 0 ? '' : 'opacity-0 pointer-events-none' }}"
                   aria-label="{{ $labelFor($file) }}"
                   data-slide="{{ $index }}">
                    @if(preg_match('/\.pdf$/i', $file))
                        <iframe src="{{ asset('images/certificates/' . $file) }}#toolbar=0&navpanes=0"
                                title="{{ $labelFor($file) }}"
                                loading="lazy"
                                class="h-full w-full"></iframe>
                    @else
                        <img src="{{ asset('images/certificates/' . $file) }}"
                             alt="{{ $labelFor($file) }}"
                             loading="lazy"
                             class="h-full w-full object-contain">
                    @endif
                    <span class="pointer-events-none absolute inset-x-0 bottom-0 flex items-center justify-center gap-2 bg-darkBg/80 py-2 text-xs font-medium text-gray-200 opacity-0 backdrop-blur-sm transition group-hover/cert:opacity-100">
                        <i class="fa-solid fa-up-right-and-down-left-from-center text-neonBlue text-[10px]"></i>
                        {{ __('site.certifications.view_full') }}
                    </span>
                </a>
            @endforeach

            <span data-counter
                  class="absolute top-3 right-3 z-10 rounded-full bg-darkBg/80 border border-gray-700 px-2.5 py-1 text-[10px] font-semibold text-gray-300 backdrop-blur-sm pointer-events-none">
                1 / {{ count($files) }}
            </span>

            @if(count($files) > 1)
                <button type="button" data-prev aria-label="Sebelum"
                        class="absolute left-2 top-1/2 -translate-y-1/2 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-darkBg/70 border border-gray-700 text-gray-200 transition hover:bg-accentBlue hover:text-white hover:border-accentBlue opacity-0 group-hover/cert:opacity-100 focus-visible:opacity-100 max-md:opacity-100">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </button>
                <button type="button" data-next aria-label="Seterusnya"
                        class="absolute right-2 top-1/2 -translate-y-1/2 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-darkBg/70 border border-gray-700 text-gray-200 transition hover:bg-accentBlue hover:text-white hover:border-accentBlue opacity-0 group-hover/cert:opacity-100 focus-visible:opacity-100 max-md:opacity-100">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </button>
            @endif
        </div>

        @if(count($files) > 1)
            <div class="mt-4 flex items-center justify-center gap-2">
                @foreach($files as $index => $file)
                    <button type="button" data-dot="{{ $index }}" aria-label="Sijil {{ $index + 1 }}"
                            class="h-1.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'w-6 bg-neonBlue' : 'w-3 bg-gray-600 hover:bg-gray-500' }}">
                    </button>
                @endforeach
            </div>
        @endif
    @else
        <div class="mx-auto flex aspect-[3/4] w-full max-w-md flex-col items-center justify-center rounded-xl border border-dashed border-gray-700 bg-cardBg px-6 text-center">
            <i class="fa-solid fa-award text-3xl text-neonBlue mb-3"></i>
            <p class="text-xs text-gray-400 leading-relaxed">
                {{ __('site.certifications.empty') }}<br>
                <code class="text-neonBlue">public/images/certificates/</code>
            </p>
        </div>
    @endif
</div>
