<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Category;
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
    public function ManageCateories(){
        $categories = Category::all();
        $id = 1;
        return view('manager\categories', compact('categories','id'));
    }

    public function addCategory(){
       $name = Input::get('name'); 
       $description = Input::get('description');
        $category = new Category( array(
                                        'Name' => $name,
                                        'Description' => $description,
        ));
        $category->save();

       return back();
    }

    public function deleteCategory(){
        $id = Input::get('id');
        return $id;
    }
}
