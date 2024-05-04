<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use Auth;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Profile update successfully!');

        return redirect()->back();
    }
}
