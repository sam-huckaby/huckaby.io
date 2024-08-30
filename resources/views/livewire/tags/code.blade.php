<?php

use App\Models\Tag;
use Livewire\Volt\Component;

new class extends Component {
    public string $code;

    public function mount(): void
    {
        $this->code = Tag::latest()->first()->code;
    }

}; ?>

<div class="flex flex-col justify-center items-center">
    @if (auth()->user()->nickname === 'sam-huckaby')
        <span class="p-4">{{ __("Scan here to tag me!") }}</span>
        {!! QrCode::size(256)->generate( env('APP_URL') . '/redeem?code=' . $code) !!}
        <span class="text-gray-400 dark:text-gray-600 p-4">{!! env('APP_URL') . '/redeem?code='.$code !!}</span>
    @else
        <span>{{ __("You're in!") }}</span>
    @endif
</div>
