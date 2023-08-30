<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\PriceProperty;
use Illuminate\Http\Request;

class PricePropertyController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('price_property');

        $validator = Validator::make($param, [
            'price_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $priceProperty = PriceProperty::where(['price_id' => $param['price_id'], 'property_id' => $param['property_id']])->first();

        if ($priceProperty){
            $priceProperty->delete();
        }
        else{            
            $priceProperty = PriceProperty::create($param);
        }

        return response()->json(['message' => "Thành công"]);
    }
}
