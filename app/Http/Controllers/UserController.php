<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     public function _construct()
   {
      $this->middleware('auth');
   }

      public function index ()
   {

    //query all inventories from the table 'inventories' using model
    $users = User::latest()->get();
    //return to view with $inventories (resources/views/inventories/index.blade.php)
    return view('users.index', compact('users'));
   } 

   public function create ()
   {

      return view('users.create');

   }

   public function store(Request $request)
   {
      // store in the table 'vehicles' using model
      
      //POPOv- Plain Old PHP Object
      $user = new User();
      $user->id = $request ->id;
      $user->name = $request ->name;
      $user->email = $request ->email;
      $user->save();

      return redirect('/users');
      // return to vehicle index
   }

   
     public function show (User $user) //laravel model binding
   {

      return view ('users.show', compact ('user'));

   }

}