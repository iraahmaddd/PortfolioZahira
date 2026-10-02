<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $videosFor = function (string $prefix) {
        if (! is_dir(public_path('videos'))) {
            return [];
        }

        return collect(glob(public_path("videos/{$prefix}*")))
            ->filter(fn (string $path) => preg_match('/\.(mp4|webm|ogv|mov|m4v)$/i', $path))
            ->map(fn (string $path) => basename($path))
            ->sort()
            ->values()
            ->all();
    };

    $projectVideos = [
        'espbt' => $videosFor('espbt'),
        'na' => $videosFor('bookweb'),
    ];

    $certDir = public_path('images/certificates');

    $certificates = is_dir($certDir)
        ? collect(glob($certDir . '/*'))
            ->filter(fn (string $path) => preg_match('/\.(jpe?g|png|webp|gif|pdf)$/i', $path))
            ->map(fn (string $path) => basename($path))
            ->sort()
            ->values()
            ->all()
        : [];

    $githubUrl = env('GITHUB_URL', 'https://github.com/USERNAME');

    return view('welcome', compact('projectVideos', 'certificates', 'githubUrl'));
});

Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'ms'])) {
        session(['locale' => $locale]);
    }

    return back();
})->name('lang.switch');
