<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index(Request $request): RedirectResponse|Response
    {
        $validatedData = $request->validate([
            'code' => 'required|string',
        ]);

        $code = $validatedData['code'];

        $redeemCode = Tag::where('code', $code)
            ->whereNull('user_id')
            ->first();

        if (!$redeemCode) {
            // Handle the case where the code is not found or has already been redeemed
            return redirect()->route('dashboard')->with('redeem_success', false)->with('redeem_message', 'Hey! That code isn\'t real! Alerting the authorities!');
        }

        // We need to use updated_at because the tags are created as soon as the last one is tagged to a user
        // and we're looking to make sure that the currently redeeming user does not redeem another tag
        // within 18 hours
        $lastUserCode = Tag::where('user_id', $request->user()->id)->where('updated_at', '>=', Carbon::now()->subHours(18)->toDateTimeString())->first();

        if ($lastUserCode) {
            return redirect()->route('dashboard')->with('redeem_success', false)->with('redeem_message', "You can only tag me once every 18 hours!");
        }

        $userId = Auth::id();

        // Use the Tag Model here to populate the latest row with the currently logged in user and create a new code row
        $redeemCode->update(['user_id' => $userId]);

        $nextCode = new Tag([
            'code' => Str::uuid(),
            'user_id' => null,
        ]);

        $nextCode->save();

        // Redirect the user to the dashboard with a message letting them know the tag was successful
        return redirect()->route('dashboard')->with('redeem_success', true)->with('redeem_message', 'You have tagged The Nerd!');
    }
}
