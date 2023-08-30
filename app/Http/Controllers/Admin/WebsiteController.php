<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\WebsiteType;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websites = Website::orderBy('created_at', 'DESC')
                        ->paginate(20);
        return view('admin/websites/index', ['websites' => $websites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $website_types = WebsiteType::all();

        $data = [
            'website_types' => $website_types,
        ];

        return view('admin/websites/new', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('website');

        $validator = Validator::make($param, [
            'name' => 'required',
            'code' => 'required',
            'website_type_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        if ($request->file('image'))
        {
            $photo = Photo::upload($request, 'image');
            if($photo)
                $param['photo_id'] = $photo->id;
        }

        Website::create($param);

        return response()->json(['message' => "Thành công"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        $website_types = WebsiteType::all();

        $data = [
            'website_types' => $website_types,
            'website' => $website
        ];

        return view('admin/websites/new', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $website)
    {
        $param = $request->input('website');

        $validator = Validator::make($param, [
            'name' => 'required',
            'code' => 'required',
            'website_type_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        if ($request->file('image'))
        {
            $photo = Photo::upload($request, 'image');
            if($photo)
                $param['photo_id'] = $photo->id;
        }

        $website->update($param);

        return response()->json(['message' => "Thành công"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        $website->delete();
        return response()->json(['id' => $website->id]);
    }
}
