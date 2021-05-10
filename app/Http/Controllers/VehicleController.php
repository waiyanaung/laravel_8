<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $objs = Vehicle::where('status',1)->get();

        $objs = Vehicle::paginate(5);
        return view('vehicle/index')
                ->with(compact('objs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'color' => 'required|max:255',
            'company' => 'required|max:255',
        ]);

        $obj = new Vehicle();
        $obj->name = $request['name'];
        $obj->color = $request['color'];
        $obj->company = $request['company'];
        $obj->save();
        // return redirect('car');

        return redirect('car')->with('message', 'New Car created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Vehicle::findOrFail($id);
        return view('vehicle.show')->with(compact('obj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Vehicle::findOrFail($id);
        return view('vehicle.edit')->with(compact('obj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'color' => 'required|max:255',
            'company' => 'required|max:255',
        ]);

        $obj = Vehicle::findOrFail($id);
        $obj->name = $request['name'];
        $obj->color = $request['color'];
        $obj->company = $request['company'];
        $obj->status = $request['status'];
        $obj->save();
        return redirect('car')->with('message', 'New Car updated successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Vehicle::findOrFail($id);
        $obj->status = 0;
        $obj->save();
        return redirect('car')->with('message', 'Car deleted successfully !!');
    }
}
