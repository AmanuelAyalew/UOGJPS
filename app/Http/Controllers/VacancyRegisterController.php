<?php

namespace App\Http\Controllers;

use App\Models\DepartementName;
use App\Models\VacancyRegister;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class VacancyRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $registeredVacancies = VacancyRegister::latest()->paginate(5);

        return view('vacancy_register.index', compact('registeredVacancies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $departementNames = DepartementName::all();
        return view("vacancy_register.create", compact('departementNames'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "job_title" => 'required',
            "vacancy_type" => 'required',
            "departement_name" => 'required',
            "currency" => 'required',
            "date_posted" => 'required',
            "sum_of_expertise" => 'required',
            "deadline" => 'required',
            "maximum_age" => 'required',
            "location" => 'required',
            "minimum_grade" => 'required',
            "job_requirement" => 'required',
            "year_of_graduation_starts_at" => 'required'
        ]);
        $vacancy_code = Helper::IDGenerator(new VacancyRegister, 'vacancy_code', 4, 'UOG');
        /** Generate id */
        $q = new VacancyRegister;

        $all = $request->all();
        $all['vacancy_code'] = $vacancy_code;
        VacancyRegister::create($all);



        return redirect()->route('vacancy_register.index')
            ->with('success', 'Product created successfully.');
    }


    public function show(VacancyRegister $vacancyRegister)
    {
        return view('vacancy_register.show', compact('vacancyRegister'));
    }


    public function edit(VacancyRegister $vacancyRegister)
    {
        $departementNames = DepartementName::all();

        return view('vacancy_register.edit', compact(['vacancyRegister', 'departementNames']));
    }


    public function update(Request $request, VacancyRegister $vacancyRegister)
    {
        $request->validate([
            "job_title" => 'required',
            "vacancy_type" => 'required',
            "departement_name" => 'required',
            "currency" => 'required',
            "date_posted" => 'required',
            "sum_of_expertise" => 'required',
            "deadline" => 'required',
            "maximum_age" => 'required',
            "location" => 'required',
            "minimum_grade" => 'required',
            "job_requirement" => 'required',
            "year_of_graduation_starts_at" => 'required'
        ]);


        $vacancyRegister->update($request->all());

        return redirect()->route('vacancy_register.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(VacancyRegister $vacancyRegister)
    {

        $vacancyRegister->delete();

        return redirect()->route('vacancy_register.index')
            ->with('success', 'Product deleted successfully');
    }
}
