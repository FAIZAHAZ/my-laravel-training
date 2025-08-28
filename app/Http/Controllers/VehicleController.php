<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
   public function _construct()
   {
      $this->middleware('auth');
   }

   public function index ()
   {

    //query all inventories from the table 'inventories' using model
    $vehicles = Vehicle::latest()->get();
    //return to view with $inventories (resources/views/inventories/index.blade.php)
    return view('vehicles.index', compact('vehicles'));
   } //

       
   public function create ()
   {

      return view('vehicles.create');

   }

   public function store(Request $request)
   {
      // store in the table 'vehicles' using model
      
      //POPOv- Plain Old PHP Object
      $vehicle = new Vehicle();
      $vehicle->id = $request ->id;
      $vehicle->noplat = $request ->noplat;
      $vehicle->model = $request ->model;
      $vehicle->color = $request ->color;
      $vehicle->user_id = auth()->user()->id;
      $vehicle->save();

      return redirect('/vehicles');
      // return to vehicle index
   }

     public function show (Vehicle $vehicle) //laravel model binding
   {
      $this->authorize('view', $inventory);
      return view ('vehicles.show', compact ('vehicle'));

   }

   
     public function edit (Vehicle $vehicle) //laravel model binding
   {

      return view ('vehicles.edit', compact ('vehicle'));

   }

   public function update (Request $request, Vehicle $vehicle)
   {
      //update using model
      $vehicle->id = $request ->id;
      $vehicle->noplat = $request ->noplat;
      $vehicle->model = $request ->model;
      $vehicle->color = $request ->color;
      $vehicle->save();

      //return to index
      return redirect('/vehicles');
   }

      public function destroy(Vehicle $vehicle)
   {
      $vehicle->delete();

      return redirect('/vehicles');

   }

}
