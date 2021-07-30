<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Order;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $review = Review::paginate(10);
      return response()->json(['success'=>true,'data'=>['review'=>$review],'message'=>'Success'],200);
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
      try {
        $auth =  User::where('remember_token',"LIKE","%".$request->token)->first();
        $auth->id;
      } catch (\Exception $e) {
        return response()->json(['success'=>false,'data'=>"{}",'message'=>"User Not Found".$e->getMessage()],500);
      }

      try {
        $order = Order::whereId($request->order_id)->first();
        $order->portofolio_id;
      } catch (\Exception $e) {
        return response()->json(['success'=>false,'data'=>"{}",'message'=>"User Not Found".$e->getMessage()],500);
      }


      try {
        $review = Review::create([
          "user_id"=>$auth->id,
          "portofolio_id"=>$order->portofolio_id,
          "order_id"=>$request->order_id,
          "comment"=>$request->comment,
          "star"=>$request->star
        ]);
      } catch (\Exception $e) {
        return response()->json(['success'=>false,'data'=>"{}",'message'=>"User Not Found".$e->getMessage()],500);
      }

      return response()->json(['success'=>true,'data'=>['review'=>$review],'message'=>'Success'],200);
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
