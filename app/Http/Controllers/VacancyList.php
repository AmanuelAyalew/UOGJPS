<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\VacancyRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class VacancyList extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $registeredVacancies =  VacancyRegister::get();
        return view('vacancy_list', compact('registeredVacancies'));
    }

    // public function create()
    // {
    //     dd();
    //     return view('apply.blade.php');
    // }

    public function show($id)
    {
        $registeredVacancy = VacancyRegister::find($id);
        return view('apply', compact('registeredVacancy'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "Jobcode" => 'required',
            "Jobexp" => 'required',
            "Grade" => 'required',
            "Age" => 'required',
            "max_age" => 'required'
        ]);

        $all  = $request->all();

        $all['user_id'] = Auth()->user()->id;

        Apply::create($all);


        return redirect()->route('vacancy_list.index')
            ->with('success', 'registerd successfully.');
    }
}
