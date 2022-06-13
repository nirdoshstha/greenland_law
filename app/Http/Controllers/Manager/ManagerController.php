<?php

namespace App\Http\Controllers\Manager;

use App\Models\Mydocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function index(){

        if(Auth::check() && Auth::user()->user_role=='1')
        {
            // $mydocument = Mydocument::orderBy('dname', 'asc')->paginate(7);
            $mydocument = Mydocument::all();
            return view('manager.index')->with('mydocument',$mydocument);
        }
        else{
            return redirect('/login')->with('status','Pls Login First, you are not Allowed to access..');
        }

    }

    public function myDocuments(){
        // $mydocument = Mydocument::orderBy('dname', 'asc')->paginate(7);
        $mydocument = Mydocument::all();
        return view('manager.my-documents')->with('mydocument',$mydocument);;
    }

}
