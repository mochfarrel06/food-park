<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfilePasswordUpdateRequest;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use App\Traits\FileUploadTrait;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use FileUploadTrait;
    public function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Profile update successfully!');

        return redirect()->back();
    }

    public function updatePassword(ProfilePasswordUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->password = bcrypt($request->password);
        $user->save();

        toastr()->success('Password updated is successfully!');

        return redirect()->back();
    }

    public function updateAvatar(Request $request)
    {
        /** Handle image file */
        $imagePath = $this->uploadImage($request, 'avatar');

        $user = Auth::user();
        $user->avatar = $imagePath;
        $user->save();

        return response(['status' => 'success', 'message' => 'Avatar updated successfully!']);
    }
}
