<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontEndContact;

class AdminApiFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // feedbacks

        if(FrontEndContact::count() > 0){
            $feedbacks =  FrontEndContact::all();
            $count_feedbacks = FrontEndContact::count();
    
             // return
             return [
                "status" => 200,
                "Number of Feedbacks" =>   $count_feedbacks,
                "message" => "Feedbacks Retrieved successfully",
                "data" => $feedbacks
            ];
        }
    
        else { 
            //response
            return [
                "status" => 404,
                "message" => "Oops!, No Feedbacks Found in Database ",
               
            ];
        
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // find post id
        if(FrontEndContact::where("id", $id)->exists()){
            $feedback = FrontEndContact::find($id);
    
            // return response
            return [
                "status" => 200,
                "message" => "Feedback Retrieved successfully",
                "data" =>$feedback
            ];
        }
    
         // if no record
         else { 
    
            return [
                "status" => 404,
                "message" => "Oops!, No Feedback Found ",
               
            ];
        
        }
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
        // find id
        if(FrontEndContact::where("id", $id)->exists()){
            $feedback = FrontEndContact::find($id);
            $feedback->delete();
            // response for success
            return [
                "status" => 200,
                "message" => "Feedback Deleted successfully",
                "data" => $feedback,
            ];
        }  
        
        // if no record
        else { 
            // response for success
            return [
                "status" => 404,
                "message" => "Oops!, No Feedback Found to Delete "
                
               
            ];
        
        }
    }
}
