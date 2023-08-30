<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\WebsiteType;
use Illuminate\Http\Request;

class WebsiteTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $website_types = WebsiteType::all();

        return view('admin/website_types/index', ['website_types' => $website_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/website_types/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('website_type');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        WebsiteType::create($param);

        return response()->json(['redirect' => route('admin.website-types.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebsiteType  $websiteType
     * @return \Illuminate\Http\Response
     */
    public function show(WebsiteType $websiteType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebsiteType  $websiteType
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsiteType $websiteType)
    {
        return view('admin/website_types/edit', ['website_type' => $websiteType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebsiteType  $websiteType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsiteType $websiteType)
    {
        $param = $request->input('website_type');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $websiteType->update($param);

        return response()->json(['redirect' => route('admin.website-types.index')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebsiteType  $websiteType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsiteType $websiteType)
    {
        $websiteType->delete();
        return response()->json(['id' => $websiteType]);
    }
}
