<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $leaders;

    public function mount(): void
    {
        // Query to get top 10 users by their tag count
        $this->leaders = User::withCount('tags')
            ->orderBy('tags_count', 'desc')
            ->take(10)
            ->get();
    }
}; ?>

<div class="w-full">
    <h2 class="pt-4 font-paint text-4xl text-center">Top 10 <span class="text-orange-600">Taggers</span></h2>
    <div class="text-center pt-1 pb-4 dark:text-gray-600">(a.k.a. Nerd Finder Extraordinaires)</div>
    <table class="w-full p-4">
        <thead>
            <tr class="border-b border-solid border-black">
                <th>Rank</th>
                <th>Nickname</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leaders as $index => $leader)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td class="text-center">{{ $leader->nickname }}</td>
                    <td class="text-center">{{ $leader->tags_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
