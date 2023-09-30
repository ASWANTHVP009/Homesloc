<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function review(Request $request)
    {
        $input = $request->all();
        $error = '';
        if (!isset($input['rating']) || empty($input['rating'])) {
            $error['rating_error'] = "Please fill the rating";
        }
        if (!isset($input['text']) || empty($input['text'])) {
            $error['text_error'] = "Please fill the rating";
        }
        if ($error) {
            return response()->json(['error' => $error], 400);
        }
        $user = auth()->user();
        if ($user) {
            $customerId = $user->id;
        } else {
            $customerId = 0;
        }
        $data = [
            'property_id' => $input['hotel_id'] ? $input['hotel_id'] : 0,
            'customer_id' => $customerId,
            'rating' => $input['rating'] ? $input['rating'] : 0,
            'description' => $input['text'] ? $input['text'] : '',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('reviews')->insert($data);

        return response()->json(['success' => null], 200);
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->name = $request->name;
        $request->user()->last_name = $request->last_name ? $request->last_name : '';
        $request->user()->email = $request->email;
        $request->user()->mobile = $request->mobile;
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
