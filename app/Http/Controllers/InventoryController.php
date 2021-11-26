<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function inventoryList(){

        return view('pages.inventory_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create_inventory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inventory = new Inventory();

        $inventory->name = $request->name;
        $inventory->description = $request->description;
        $inventory->value = $request->value;
        $inventory->status = $request->status;

        $inventory->save();

        return redirect('create-inventory')->with(['success' => 'New Inventory created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $inventoryList = Inventory::all();

        return view('pages.inventory_list',['inventoryList'=>$inventoryList]);

    }
}