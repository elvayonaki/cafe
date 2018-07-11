<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class StoreController extends Controller
{
    /**
     * 
     */
    function __construct(){
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createStore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // convert time to right format
        $requestData = $request->all();
        for ($i=1; $i < count($requestData->day); $i++) { 
            if($requestData->day[$i]['open']){
                $requestData[$i]['open'] = date("H:i", strtotime($requestData[$i]['open']));
                $requestData[$i]['close'] = date("H:i", strtotime($requestData[$i]['close']));
            }
        }        
        print_r($requestData);
        die();        
        $request->replace($requestData);

        // validasi
        $validator = Validator::make($request->day, [
            '*.status' => '',
            '*.open' => 'required_if:*.status,==,true|date_format:H:i',
            // '*.close' => 'requiredif:*.status,==,true|date_format:H:i|after:start_date',
        ]);

        if ($validator->fails()) {
            return redirect('user/store/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // store data to database
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
