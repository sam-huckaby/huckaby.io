<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Where's Huckaby?</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=finger-paint:400|inter:500" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans dashed dark:bg-slate-900">
        <div class="bg-gradient-to-br from-transparent to-slate-100 dark:via-slate-900/50 via-10% dark:to-slate-900 to-25% text-black/50 dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-between">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10">
                        <div class="flex">
                            <div class="text-black dark:text-neutral-200 relative isolate text-bold text-3xl sm:text-6xl font-mono italic drop-shadow-[0_1.2px_0.2px_rgb(255,255,255)]">
                            Huckaby
                            </div>
                        </div>
                        @if (Route::has('loginX'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="w-full flex flex-col justify-center items-center">
                            <span class="text-6xl sm:text-[90px] text-black dark:text-neutral-100/75 font-inter">Find That</span>
                            <div class="p-8 sm:p-2 w-1/2 flex flex-col justify-center items-center">
                                    <div class="font-bold text-gray-500/25 font-paint text-8xl sm:text-[200px]">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-purple-500/75 font-paint rotate-3 -translate-x-2 -translate-y-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-orange-500/75 font-paint -rotate-6 translate-x-2 translate-y-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-yellow-500/75 font-paint -rotate-2 -translate-x-2 translate-y-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-green-500/75 font-paint -rotate-3">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-red-500/75 font-paint rotate-6">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-blue-500/75 font-paint rotate-3 translate-x-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-black/70 font-paint">Nerd</div>
                            </div>
                        </div>
                    </main>

                </div>
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70 font-inter">
                       {{__('A new twist on "Where\'s Waldo?"')}}
                    </footer>
            </div>
        </div>
    </body>
</html>
