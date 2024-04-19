<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        return Member::all();
    }

    public function create(Request $request): RedirectResponse
    {

        Member::create($request->except(['_token', '_method']));

        return Redirect::to('/');
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'member' => $request->member(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        // actualizar cada campo y guardar

        $request->member()->save();

        return Redirect::route('member.edit')->with('status', 'member-updated');
    }

    public function delete(Request $request): RedirectResponse
    {

        $member = $request->member();

        $member->delete();

        return Redirect::to('/');
    }
}
