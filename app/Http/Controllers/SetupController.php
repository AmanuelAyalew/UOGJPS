<?php

namespace App\Http\Controllers;

use App\Models\setup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth()->user();
        // dd($user);
        return view('profile.profile1', compact('user'));
    }
    public function create()
    {
        return view('profile.profile1');
    }


    public function store(Request $request)
    {
        $request->validate([
            "Email" => 'required',
            "Mobile_Number" => 'required',
            "First_Name" => 'required',
            "FatherName" => 'required',
            "last_name" => 'required',
            "BirthDate" => 'required',
            "Marital_Status" => 'required',
            "Gender" => 'required',
            "Title" => 'required',
            "Country" => 'required',
            "region" => 'required',
            "Zone" => 'required',
            "Wereda" => 'required',
            "Kebele" => 'required',
            "House_Number" => 'required',
            "Phone" => 'required',
            "fax" => 'required',
        ]);

        // dd($request->all());
        setup::create($request->all());
        return redirect()->route('profile2.index')
            ->with('success', 'Product created successfully.');
    }
}
