<?php

namespace App\Http\Controllers;

use App\Models\VacancyRegister;
use Illuminate\Http\Request;

class DetailView extends Controller
{
    public function index(Request $request, $id)
    {
        $vacancyRegister = VacancyRegister::find($id);
        return view('detail_view', compact('vacancyRegister'));
    }
}
