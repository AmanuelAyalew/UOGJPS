<?php

namespace App\Http\Controllers;

use App\Models\DepartementName;
use App\Models\Profile4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Profile4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profile4 =
            DB::table("profile4s")
            ->where("user_id", "=", Auth()->user()->id)
            ->get();
        $departement = DepartementName::all();
        return view('profile.profile4', compact(['profile4', 'departement']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_category' => 'required',
            'employer' => 'required',
            'job_title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'experiance_letter' => 'mimes:doc,docx,pdf,txt|max:2048',
        ]);


        $input = $request->all();
        $input['user_id'] = Auth()->user()->id;

        if ($files = $request->file('expriance_letter')) {
            $destinationPath = 'files/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $input['experiance_letter'] = "$profilefile";
        }

        Profile4::create($input);


        return Redirect::back()
            ->withSuccess('Great! file has been successfully uploaded.');
    }

    public function destroy($id)
    {
        Profile4::where('id', $id)->delete();
        return
            Redirect::back()
            ->withSuccess('Great! file has been deleted successfully.');
    }
}
