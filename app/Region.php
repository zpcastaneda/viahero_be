<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $primaryKey = 'regionID';
    protected $fillable = ['description', 'PSGC', 'code'];

    public function store (Request $request) {
    	$region = new Region;

    	$region->PSGC = $request->PSGC;
    	$region->code = $request->code;
    	$region->description = $request->description;

    	$region->save();
    }

    public function setDescription (Request $request) {
    	$region = App\Region::find($request->regionID);
    	$region->description = $request->description;

    	$region->save();
    }
}
