<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Store;
use App\Time_Works;
use Illuminate\Support\Facades\Auth;
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
        // validasi
        $validator = Validator::make($request->all(), [
            'day.*.status' => '',
            'day.*.open' => 'required_if:day.*.status,==,true',
            'day.*.close' => 'requiredif:day.*.status,==,true',
            'name' => 'required',
            'motto' => 'required',
            'descrip'=>'required',
            'phone'=>'required',
            'website'=>'required',
            'lang'=>'required',
            'lat'=>'required',
            "alamat1" => 'required',
            "alamat2" => 'required',
            "alamat3" => 'required',
            "alamat4" => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('user/store/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $store = Store::create([
            "user_id" => Auth::user()->id,
            "name" => $request->name,
            "motto" => $request->motto,
            "descrip" => $request->descrip,
            "phone" => $request->phone,
            "website" => $request->website,
            "lang" => $request->lang,
            "lat" => $request->lat,
            "alamat1" => $request->alamat1,
            "alamat2" => $request->alamat2,
            "alamat3" => $request->alamat3,
            "alamat4" => $request->alamat4,
            "status" => 0,
        ]);

        // get Time Works
        $data = [];
        $days = $request['day'];
        $no = 1;
        for ($i=1; $i < count($days) ; $i++) { 
            // check keys exist
           if(array_key_exists('status',$days[$i])){
               //set to temp array
               Time_works::create([
                    "store_id" => $store->id,
                    "day" => $i,
                    "open"=> $days[$i]['open'],      
                    "close"=> $days[$i]['close'],
                ]);        
           } 
        }                
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
