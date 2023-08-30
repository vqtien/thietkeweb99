<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Photo;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('photo')->orderBy('created_at', 'DESC')->paginate(20);
        $data = [
            'services' => $services,
        ];
        return view('admin/services/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/services/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('service');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $param['slug']     = make_permalink($param['name']);

        if ($request->file('image'))
        {
            $photo = Photo::upload($request, 'image');
            if($photo)
                $param['photo_id'] = $photo->id;
        }

        Service::create($param);

        return response()->json(['redirect' => route('admin.services.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin/services/edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
         $param = $request->input('service');

        $validator = Validator::make($param, [
            'name' => 'required',
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $param['slug']     = make_permalink($param['name']);

        if ($request->file('image'))
        {
            $photo = Photo::upload($request, 'image');
            if($photo)
                $param['photo_id'] = $photo->id;
        }

        $service->update($param);

        return response()->json(['redirect' => route('admin.services.index')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
