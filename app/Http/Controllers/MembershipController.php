<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function create()
    {
        return view('membership.create');
    }

    public function store(Request $request)
    {
        // Validate and process the request
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:15',
            'member_code' => 'nullable|string|max:10',
        ]);

        // Logic to save data goes here (e.g., in the database)

        return redirect('/membership')->with('success', 'Membership registered successfully!');
    }
}

