@props(['id', 'url' => null, 'alt' => 'Demo video'])

@php
    $link = $url ?? ('https://youtu.be/' . $id);
@endphp

<div class="group/yt relative aspect-video overflow-hidden bg-black border-b border-gray-800">
    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"
       class="absolute inset-0 block"
       aria-label="{{ __('site.projects.watch_youtube') }}">
        <img src="https://i.ytimg.com/vi/{{ $id }}/maxresdefault.jpg"
             onerror="this.onerror=null;this.src='https://i.ytimg.com/vi/{{ $id }}/hqdefault.jpg';"
             alt="{{ $alt }}"
             loading="lazy"
             class="h-full w-full object-cover opacity-90 transition duration-500 group-hover/yt:scale-[1.03] group-hover/yt:opacity-100">
        <span class="absolute inset-0 flex items-center justify-center">
            <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-red-600 text-white shadow-lg shadow-red-600/40 transition duration-300 group-hover/yt:scale-110 group-hover/yt:bg-red-500 md:h-16 md:w-16">
                <i class="fa-brands fa-youtube text-3xl"></i>
            </span>
        </span>
        <span class="absolute bottom-3 right-3 rounded-full bg-darkBg/80 border border-gray-700 px-3 py-1 text-[10px] font-semibold text-gray-300 backdrop-blur-sm pointer-events-none">
            {{ __('site.projects.watch_youtube') }}
            <i class="fa-solid fa-arrow-up-right-from-square ms-1 text-neonBlue"></i>
        </span>
    </a>
</div>
