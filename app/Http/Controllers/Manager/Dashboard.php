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

    public function showUpload(){
        return view('manager\upload');
    }
    public function upload(Request $request){
        $file = Input::get('image');
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            // return $name;
            // $file->move(public_path().'/images/'.$name);
            $file->storeAs('public/images', $name);

            return "Saved";
        }
        // $name = $file->getClientOriginalName();

        return "No Image.";
    }
}
