<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;
use App\Quality;


use Carbon\Carbon;
class CrushesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   private function Quality_validation($quality,$request)
    {
        
        $request->validate(['crush_quality' => 'required']);
        
        


    }
    private function setAndSaveCrushData($crush,$request)
    {
        
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'fb_profile_link' => 'required|url',
            'contact_number' => 'required|digits:11',



        ]);
        
        $crush->first_name = $request->first_name;
        $crush->last_name = $request->last_name;
        $crush->fb_profile_link = $request->fb_profile_link;
        $crush->contact_number = $request->contact_number;
        $crush->created_at = Carbon::now();
        $crush->updated_at = Carbon::now();

        $crush->save();


    }

    public function index()
    {
        $crushes = Crush::all();

        return view('crushes.index',array('crushes' => $crushes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_quality($id)
    {
        $quality = new Quality();
       
        return view('crushes.quality', array(
            'crush'=>$quality,
            'id'=>$id,
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
       
        $this->Quality_validation($quality, $request);
        $quality->crush_id = $request->crush_id ;
        $quality->crush_quality = $request->crush_quality ;
        
        $quality->created_at = Carbon::now();
        $quality->updated_at = Carbon::now();
        $quality->save();

        return redirect()->route('crushes.id.show', array('id'=>$quality->crush_id));
    }
    public function delete_quality(Request $request,$id)
    {

       
     
        $quality = Quality::where('id', $id)->delete();
        

        return redirect()->back();
    }
    public function create()
    {
        $crush = new Crush();

        return view('crushes.create', array(
            'crush'=>$crush,
            'action'=>route('crushes.store'),
            'submit_text' =>"Create Crush"

        ));
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crush = new Crush();
        $this->setAndSaveCrushData($crush, $request);
        $crush->first_name = $request->first_name ;
        $crush->last_name = $request->last_name ;
        $crush->fb_profile_link = $request->fb_profile_link ;
        $crush->contact_number = $request->contact_number ;
        $crush->created_at = Carbon::now();
        $crush->updated_at = Carbon::now();
        $crush->save();

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
        $crush = Crush::find($id);

        $quality = Crush::find($id)->quality;

        return view('crushes.show', array(

            'crush' => $crush,
            'quality' => $quality,
            'action' => route('crushes.id.show', array('id'=>$crush->id)),
            'submit_text' =>"dsa"


        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crush = Crush::find($id);

        return view('crushes.create', array(

            'crush' => $crush,
            'action' => route('crushes.id.update', array('id'=>$crush->id)),
            'submit_text' =>"Update Crush"


        ));
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
        $crush = Crush::find($id);
        $this->setAndSaveCrushData($crush,$request);
        return redirect()->route('crushes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crush = Crush::find($id);
        $crush->delete();

        return redirect()->back();
    }
}

