<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function index()
    {

        $data = User::all();

        return view('index', compact('data'));
    }
}
