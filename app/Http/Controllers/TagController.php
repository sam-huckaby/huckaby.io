<?php

namespace App\Http\Controllers;

use App\Models\Tag;
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

        dd($redeemCode);

        if (!$redeemCode) {
            // Handle the case where the code is not found or has already been redeemed
            return response('Hey! That code isn\'t real! Alerting the authorities!');
        }

        $userId = Auth::id();

        $redeemCode->update(['user_id' => $userId]);

        $nextCode = new Tag([
            'code' => Str::uuid(),
            'user_id' => null,
        ]);

        $nextCode->save();

        return redirect()->route('dashboard');


        // Use the Tag Model here to populate the latest row with the currently logged in user and create a new code row
    }
}
