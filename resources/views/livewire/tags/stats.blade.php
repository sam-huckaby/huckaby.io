<?php

use Carbon\Carbon;
use App\Models\Tag;
use Livewire\Volt\Component;

new class extends Component {
    public int $tags;
    public string $nextAvailable;
    public bool $tagNotReady;

    public function mount(): void
    {
        $userId = auth()->user()->id;

        // There should only ever be one Tag that is "open" at a time
        $this->tags = Tag::where('user_id', $userId)->count();

        $this->nextAvailable = Carbon::parse(Tag::where('user_id', $userId)->orderBy('updated_at', 'desc')->first()->updated_at)->addHours(18)->toDateTimeString();
        $now = Carbon::now();
        $this->tagNotReady = Carbon::now()->lessThan($this->nextAvailable);
        // TODO: Need to figure out if the above time is in the past or the future
    }
}; ?>

<div class="flex flex-col gap-4">
    <span>
        You have tagged The Nerd {{ $tags }}
        @if ($tags === 1)
            time
        @else
            times
        @endif
    </span>
    @if ($tagNotReady)
        <span>You can tag again at {{ $nextAvailable }}</span>
    @endif
</div>
