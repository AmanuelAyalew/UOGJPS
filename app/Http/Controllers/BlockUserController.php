<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BlockUserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $users = User::select("*")->where('type', 0)->orWhere('type', 2)->get();
        return view('block_user', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $isBlocked = $user->isBlocked == 1 ? 0 : 1;

        User::where('id', $id)
            ->update([
                'isBlocked' => $isBlocked
            ]);

        if ($isBlocked == 1)
            $msg = 'User blocked successfully';
        else
            $msg = 'User unblocked successfully';



        return redirect()->route('block.index')->with('success', $msg);;
    }
}
