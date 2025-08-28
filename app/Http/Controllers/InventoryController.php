<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
   public function _construct()
   {
      $this->middleware('auth');
   }
   
   public function index ()
   {

    //query all inventories from the table 'inventories' using model
    $inventories = Inventory::latest()->get();
    //return to view with $inventories (resources/views/inventories/index.blade.php)
    return view('inventories.index', compact('inventories'));
   } 
    
   public function create ()
   {

      return view('inventories.create');

   }

   public function store(Request $request)
   {
      // store in the table 'inventories' using model
      
      //POPOv- Plain Old PHP Object
      $inventory = new Inventory();
      $inventory->name = $request ->name;
      $inventory->qty = $request ->quantity;
      $inventory->price = $request ->price;
      $inventory->description = $request ->description;
      $inventory->user_id = auth()->user()->id;
      $inventory->save();

      // return to inventory index
      return redirect('/inventories');
    
   }

   public function show (Inventory $inventory) //laravel model binding
   {

      $this->authorize('view', $inventory);

      return view ('inventories.show', compact ('inventory'));

   }

     public function edit (Inventory $inventory) //laravel model binding
   {

      $this->authorize('update', $inventory);
      return view ('inventories.edit', compact ('inventory'));

   }

   public function update(Request $request, Inventory $inventory)
   {
      $this->authorize('update', $inventory);
      //update using model
      $inventory->name = $request ->name;
      $inventory->qty = $request ->quantity;
      $inventory->price = $request ->price;
      $inventory->description = $request ->description;
      $inventory->save();

      //return to index
      return redirect('/inventories');
   }

   public function destroy(Inventory $inventory)
   {
      
      $this->authorize('delete', $inventory);

      $inventory->delete();

      return redirect('/inventories');

   }

}
