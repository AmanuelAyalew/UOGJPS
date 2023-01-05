<?php

namespace App\Http\Controllers;

use App\Models\Profile2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile2Controller extends Controller
{

    public function index()
    {

        $profile2 = Profile2::latest()->paginate(16);

        return view('profile.profile2', compact('profile2'))
            ->with('i', (request()->input('page', 1) - 1) * 16);
        //
    }

    public function store(Request $request)
    {
        $request->validate([


            'files' => 'nullable|mimes:pdf,zip|max:2048',
            'file' => 'nullable|mimes:pdf,zip|max:2048',

        ]);

        $input = $request->all();

        if ($files = $request->file('files')) {
            $destinationPath = 'files/';
            $file = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $file);
            $input['files'] = "$file";
        }



        if ($file = $request->file('file')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }

        $input['user_id'] = Auth()->user()->id;

        Profile2::create($input);

        return redirect()->route('profile3.index');
    }
}
