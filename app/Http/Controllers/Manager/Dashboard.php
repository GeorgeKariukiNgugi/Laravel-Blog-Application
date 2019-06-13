<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class Dashboard extends Controller
{
    public function dashboard(){
        return view('manager\dashboard');
    }
    public function viewAllUsers(){

        $users = User::all();
        $id = 1;
        return view('admin\users', compact('users','id'));
    }
}
