<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menus';

    public function store($request)
    {
    	$this->name = $request->name;
        $this->type = $request->type;
        $this->status = $request->status;
        $this->regular = $request->regular;
        $this->special = $request->special;
        $this->save();
    }

    public function edit($request)
    {
    	$this::where('id',$request->id)
    		->update([
    			'type' => $request->type,
    			'status' => $request->status,
    			'regular' => $request->regular,
    			'special' => $request->special,
    		]);
    }
}
