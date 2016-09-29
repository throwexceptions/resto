<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTypes extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menutypes';

    public function store($request)
    {
    	$this->name = $request->name;
    	$this->save();
    }
}
