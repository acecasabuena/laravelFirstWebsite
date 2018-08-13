<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quality;
use App\Crush;


use Carbon\Carbon;
class QualityController extends Controller
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
    public function create_quality()
    {
        $quality = new Quality();
       
        return view('crushes.quality', array(
            'crush'=>$quality,
            'action'=>route('crushes.store_quality'),
            'submit_text' =>"Add Quality"

        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_quality(Request $request)
    {
        $quality = new Quality();
       
      
        $quality->crush_id = $request->crush_id ;
        $quality->crush_quality = $request->crush_quality ;
        
        $quality->created_at = Carbon::now();
        $quality->updated_at = Carbon::now();
        $quality->save();

        return redirect()->route('crushes.index');
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
