<?php

namespace App\Http\Controllers;

use App\Models\DepartementName;
use App\Models\Profile3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Profile3Controller extends Controller
{

    public function index()
    {

        $profile3 =
            DB::table("profile3s")
            ->where("user_id", "=", Auth()->user()->id)
            ->get();
        $departement = DepartementName::all();
        return view('profile.profile3', compact(['profile3', 'departement']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'catagory' => 'required',
            'qualification_type' => 'required',
            'department' => 'required',
            'qualification_title' => 'required',
            'grade' => 'required',
            'date_recived' => 'required',
            'diploma' => 'mimes:doc,docx,pdf,txt|max:2048',
            'transcript' => 'mimes:doc,docx,pdf,txt|max:2048',
            'cost_sharing' => 'mimes:doc,docx,pdf,txt|max:2048',
        ]);


        $input = $request->all();
        $input['user_id'] = Auth()->user()->id;

        if ($files = $request->file('diploma')) {
            $destinationPath = 'files/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $input['diploma'] = "$profilefile";
        }

        if ($files = $request->file('transcript')) {
            $destinationPath = 'files/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $input['transcript'] = "$profilefile";
        }

        if ($files = $request->file('cost_sharing')) {
            $destinationPath = 'files/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);
            $input['cost_sharing'] = "$profilefile";
        }



        Profile3::create($input);

        return Redirect::back()
            ->withSuccess('Great! file has been successfully uploaded.');
    }

    public function destroy($id)
    {
        Profile3::where('id', $id)->delete();
        return
            Redirect::back()
            ->withSuccess('Great! file has been deleted successfully.');
    }
}
