<?php

namespace App\Http\Controllers;


use App\Models\Apply;
use App\Models\VacancyRegister;
use Illuminate\Http\Request;

class ApplyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index($id)
    {
        $vacancy = VacancyRegister::find($id);
        // $Applies = Apply::all();
        return view("apply", compact('vacancy'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "Jobcode" => 'required',
            "Jobexp" => 'required',
            "Grade" => 'required',
            "Age" => 'required',

        ]);

        Apply::create($request->all());


        return redirect()->route('Apply.index')
            ->with('success', 'registerd successfully.');
    }
}
