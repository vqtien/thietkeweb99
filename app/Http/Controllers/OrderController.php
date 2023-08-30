<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Price;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hash = sha1(time());
        session()->put('captcha', $hash);
        
        $data = [
            'hash' => $hash,
            'prices' => Price::all()
        ];
        return view('orders/new', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hash       = session()->get('captcha');
        $param      = $request->input('order');
        $callme     = $request->input('callme') ?? null;
        $price_id   = $request->input('price_id') ?? null;

        if($hash != $request->input('captcha')){
            return response([
                'message'   => 'Đã xảy ra lỗi khi gửi thông tin',
            ], 403);
        }

        if($callme){
            $param['description'] = 'Gọi cho tôi';
            $param['phone'] = $request->input('phone');
            $param['name'] = 'Gọi cho tôi';
            $param['email'] = 'Gọi cho tôi';
        }
        else{
            $validator  = Validator::make($param, [               
                'name' => 'required|max:175',       
                'phone' => 'required',
                'description' => 'required',            
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 403);            
            } 
        }

        $order = Order::create($param);

        if($price_id){
            OrderDetail::create([
                'order_id' => $order->id,
                'price_id' => $price_id,
            ]);
        }

        session()->forget('captcha');
        return response([
            'message'   => 'Gửi thông tin thành công',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
