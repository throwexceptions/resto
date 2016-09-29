<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\MenuTypes;

class MenuTypeController extends Controller
{
    public function index()
    {
    	return view('inventory-comp/typeadd');
    }

    public function store(Request $request,MenuTypes $types)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:menus|max:255',
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

        $types->store($request);

        return redirect('/overview');
    }
}
