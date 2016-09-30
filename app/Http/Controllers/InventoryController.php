<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menus;
use App\MenuTypes;
use Validator;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenuTypes $types)
    {
        $types = $types::all();
        return view('inventory-comp/menuadd',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Menus $menus)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:menus|max:255',
            'type' => 'required',
            'status' => 'required',
            'regular' => 'required|numeric',
            'special' => 'required|numeric',
        ]);

        $error = '';
        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                $error .= '*'.$message."\n";
            }

            alert()->error($error, 'Error')->persistent('Close');
            return redirect('/addmenu');
        }

        $menus->store($request);

        alert()->success('', 'New Menu Inserted')->persistent('Close');

        return redirect('/overview');
    }
}
