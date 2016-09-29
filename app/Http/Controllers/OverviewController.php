<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Requests;
use App\Menus;
use Validator;

class OverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Menus $menu)
    {
    	$results = $menu::all();
        return view('inventory-comp/overview',compact('results'));
    }

    public function show(Request $request,Menus $menu)
    {
        $results = $menu::find($request->id);
        return view('inventory-comp/menuedit',compact('results'));
    }

    public function destroy(Request $request)
    {
    	Menus::destroy($request->id);
    	return redirect()->back();
    }

    public function edit(Request $request, Menus $menu)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'status' => 'required',
            'regular' => 'required|numeric',
            'special' => 'required|numeric',
            'id' => 'required',
        ]);

        $error = '';
        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                $error .= '*'.$message."\n";
            }

            alert()->error($error, 'Error')->persistent('Close');
            return redirect()->back();
        }

        $menu->edit($request);

        return redirect('/overview');
    }   
}
