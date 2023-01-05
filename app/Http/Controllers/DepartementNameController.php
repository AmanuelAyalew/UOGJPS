<?php

namespace App\Http\Controllers;

use App\Models\DepartementName;
use Illuminate\Http\Request;

class DepartementNameController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $departementNames = DepartementName::latest()->paginate(5);

        return view('departement.index', compact('departementNames'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('departement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        DepartementName::create($request->all());

        return redirect()->route('departement.index')
            ->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $departementName = DepartementName::find($id);
        return view('departement.show', compact('departementName'));
    }
    public function edit($id)
    {
        $departementName = DepartementName::find($id);
        return view('departement.edit', compact('departementName'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $departementName = DepartementName::find($id);

        $departementName->update($request->all());

        return redirect()->route('departement.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $departementName = DepartementName::find($id);

        $departementName->delete();

        return redirect()->route('departement.index')
            ->with('success', 'Product deleted successfully');
    }
}
