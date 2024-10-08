<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-neutral-100 leading-tight">
            {{ auth()->user()->nickname === 'sam-huckaby' ? __('Tag') : __('My Stats') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-neutral-100 flex flex-col justify-center items-center">
                @if ( session('redeem_success') === true )
                    <div class="bg-green-700/50 rounded p-2 border border-solid border-green-900/50 dark:border-green-200/50">{{ session('redeem_message') }}</div>
                @endif
                @if ( session('redeem_success') === false )
                    <div class="bg-red-700/50 rounded p-2 border border-solid border-red-900/50 dark:border-red-200/50">{{ session('redeem_message') }}</div>
                @endif
                @auth
                    @if( auth()->user()->nickname === 'sam-huckaby' )
                        <livewire:tags.code />
                    @else
                        <livewire:tags.stats />
                    @endif
                @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
