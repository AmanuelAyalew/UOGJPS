<?php

namespace App\Http\Controllers;

use App\Models\VacancyRegister;
use GuzzleHttp\Psr7\Request;

class newcontroller extends Controller
{
    public function index()
    {
        $registeredVacancies = VacancyRegister::latest()->paginate(5);

        return view('wellcome', compact('registeredVacancies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list()
    {
        $registeredVacancies = VacancyRegister::latest()->paginate(5);

        return view('availablejobs', compact('registeredVacancies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show($id)
    {
        $vacancyRegister = VacancyRegister::find($id);

        return view('outer_detail_view', compact('vacancyRegister'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
