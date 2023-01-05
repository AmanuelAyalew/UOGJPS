<?php

namespace App\Http\Controllers;

use App\Models\Profile1;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth()->user()->id);

        return view('profile.profile1', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $all = $request->all();

        $all['user_id'] = Auth()->user()->id;

        Profile1::create($all);
        return redirect('/profile2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile1  $Profile1
     * @return \Illuminate\Http\Response
     */
    public function show(Profile1 $profile1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile1  $Profile1
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile1 $profile1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile1  $Profile1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile1 $profile1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile1  $Profile1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile1 $profile1)
    {
        //
    }
}
