<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\WebFunction;
use Illuminate\Http\Request;

class WebFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $functions = WebFunction::orderBy('created_at', 'DESC')
                            ->paginate(20);
        return view('admin/functions/index', ['functions' => $functions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/functions/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input('web_function');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        WebFunction::create($param);

        return redirect()->to(route('admin.web-functions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebFunction  $webFunction
     * @return \Illuminate\Http\Response
     */
    public function show(WebFunction $webFunction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebFunction  $webFunction
     * @return \Illuminate\Http\Response
     */
    public function edit(WebFunction $webFunction)
    {
        return view('admin/functions/edit', ['web_function' => $webFunction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebFunction  $webFunction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebFunction $webFunction)
    {
        $param = $request->input('web_function');

        $validator = Validator::make($param, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);                        
        }

        $webFunction->update($param);

        return redirect()->to(route('admin.web-functions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebFunction  $webFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebFunction $webFunction)
    {
        $webFunction->delete();
        return response()->json(['id' => $webFunction->id]);
    }
}
