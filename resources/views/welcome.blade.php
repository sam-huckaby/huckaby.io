<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Where's Huckaby?</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=finger-paint:400" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-repeat bg-[url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAKCAYAAACT+/8OAAABhWlDQ1BJQ0MgcHJvZmlsZQAAKJF9kT1Iw0AcxV9TpUUqgnYQUchQnSyIVXHUKhShQqgVWnUwufRDaNKQtLg4Cq4FBz8Wqw4uzro6uAqC4AeIs4OToouU+L+k0CLGg+N+vLv3uHsHCPUS06yOMUDTK2YqERcz2RUx8IoghtCLGCZlZhmzkpSE5/i6h4+vd1Ge5X3uz9Gt5iwG+ETiGWaYFeJ14qnNisF5nzjMirJKfE48atIFiR+5rrj8xrngsMAzw2Y6NUccJhYLbay0MSuaGvEEcUTVdMoXMi6rnLc4a6Uqa96TvzCU05eXuE5zEAksYBESRCioYgMlVBClVSfFQor24x7+AccvkUsh1wYYOeZRhgbZ8YP/we9urXxs3E0KxYHOF9v+GAYCu0CjZtvfx7bdOAH8z8CV3vKX68D0J+m1lhY5Anq2gYvrlqbsAZc7QP+TIZuyI/lpCvk88H5G35QF+m6BrlW3t+Y+Th+ANHWVvAEODoGRAmWvebw72N7bv2ea/f0AAYly4HnkguUAAAAGYktHRAA6AKUAYm7dhKcAAAAJcEhZcwAALiMAAC4jAXilP3YAAAAHdElNRQfoCB0SNwArZSDmAAAAGXRFWHRDb21tZW50AENyZWF0ZWQgd2l0aCBHSU1QV4EOFwAAACBJREFUCNdjYMABtkAxHPyHYgYmdKXUEGCB0ltxuYcBANsRBCqQo/aGAAAAAElFTkSuQmCC')]">
        <div class="bg-gradient-to-br from-transparent to-slate-100 to-25% text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-between">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10">
                        <div class="flex">
                            <div class="text-black relative isolate text-bold text-3xl sm:text-6xl font-mono italic drop-shadow-[0_1.2px_0.2px_rgb(255,255,255)]">
                            Huckaby
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="w-full flex flex-col justify-center items-center">
                            <span class="text-6xl sm:text-[100px] text-black font-mono">Find That</span>
                            <div class="p-8 sm:p-0 w-1/2 flex flex-col justify-center items-center">
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
                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        The biggest game of hide-and-seek in the world
                    </footer>
            </div>
        </div>
    </body>
</html>
