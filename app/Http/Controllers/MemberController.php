<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('members.index');
    }


    public function store(Request $request)
    {
        $member = Member::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'address' => $request->address,
        ]);

        return redirect()->route('membership')->with('success', 'Registration Successfull');
    }
}
