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
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="mt-6 font-inter">
                        <div class="w-full flex flex-col justify-center items-center">
                            <span class="text-6xl text-black dark:text-neutral-100/75 font-inter">Find That</span>
                            <div class="p-8 sm:p-2 w-full flex flex-col justify-center items-center">
                                <img src="nerd_logo.svg" />
                                <!-- NOTE: This is the old way I did it, and it took forever, and I can't bring myself to delete it...
                                    <div class="font-bold text-gray-500/25 font-paint text-8xl sm:text-[200px]">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-purple-500/75 font-paint rotate-3 -translate-x-2 -translate-y-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-orange-500/75 font-paint -rotate-6 translate-x-2 translate-y-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-yellow-500/75 font-paint -rotate-2 -translate-x-2 translate-y-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-green-500/75 font-paint -rotate-3">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-red-500/75 font-paint rotate-6">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-blue-500/75 font-paint rotate-3 translate-x-2">Nerd</div>
                                    <div class="absolute flex items-center justify-center text-8xl sm:text-[200px] font-bold text-black/70 font-paint">Nerd</div>
                                -->
                            </div>
                            <div class="py-8">{{__('A new twist on "Where\'s Waldo?"')}}</div>
                            <hr class="w-full py-8" />
                            <div class="p-2">
                                <div class="pb-4 text-left">We all grew up playing hide-and-seek.</div>
                                <div class="pb-4 text-center">Some of us grew up reading books about finding some guy named "Waldo".</div>
                                <div class="pb-4 text-right">Now, it's <span class="italic">the future<span></div>
                                and we've mostly lost our whimsy and desire to find people. It doesn't help that the internet has essentially made finding people very easy, at least all of the people that we're interested in finding. Most celebrities can be located with a quick search and the ability to travel - but what if we wanted to find someone unknown?
                            </div>
                            <img src="thought_loading.jpeg" class="rounded-full" alt="Picture of Sam Huckaby a.k.a. That Nerd" />
                            <div class="font-paint text-4xl text-black dark:text-white">That Nerd</div>
                            <div class="pb-4"><a class="font-inter underline underline-offset-4 hover:text-orange-600" target="_blank" href="https://x.com/samhuckaby">@samhuckaby</a></div>
                            <div class="p-2">
                                Enter: that nerd. As you may have guessed, that nerd is me. I've recently learned more about the Laravel web framework, and this app is a way for me to both explore it and to build a community around me. Admittedly, I'm not a particularly interesting guy, but that's what makes the game <span class="italic">fun</span>. I'm excited to meet you though, whoever you may be.
                            </div>
                            <div class="p-2 pb-12">
                                <h1 class="text-4xl font-paint pb-4">How to play</h1>
                                <ol class="list-decimal">
                                    <li>Locate me IRL (in real life) - the hardest part</li>
                                    <li>Approach me and start a conversation - the second hardest part</li>
                                    <li>Ask to "tag the nerd" - the easiest but most awkward part</li>
                                    <li>Repeat steps 1-3 at each new event</li>
                                </ol>
                            </div>
                        </div>
                    </main>

                </div>
            </div>
        </div>
    </body>
</html>
