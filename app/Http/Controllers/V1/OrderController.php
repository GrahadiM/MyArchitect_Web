<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use JWTAuth;
use Illuminate\Support\Facades\Validator;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $order = Order::whereUserId(auth()->user()->id)->paginate(10);
         return response()->json(['success'=>true,'data'=>['order'=>$order],'message'=>'Success'],200);
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

      // return response()->json(['success'=>false,'data'=>$request->all(),'message'=>"User Not Found"],500);

      try {
        $auth =  User::where('remember_token',"LIKE","%".$request->token)->first();
        $auth->id;
      } catch (\Exception $e) {
        return response()->json(['success'=>false,'data'=>"{}",'message'=>"User Not Found".$e->getMessage()],500);
      }

      $validator = Validator::make($request->except('_token'), [
         'portofolio_id' => ['required'],
         'wa' => ['required'],
         'area' => ['required'],
         'address' => ['required'],
     ]);

     if ($validator->fails()) {
       return response()->json(['success'=>false,'data'=>$validator->messages(),'message'=>'failed register'],400);
     }

      // return ;
      try {
        $order = Order::create([
          "user_id"=>$auth->id,
          "portofolio_id"=>$request->portofolio_id,
          "price_id"=>$request->price_id != null ? $request->price_id : 1,
          "wa"=>$request->wa,
          "area"=>$request->area,
          "address"=>$request->address,
          "luas_lahan"=>$request->luasLahan
        ]);
      } catch (\Exception $e) {
        return response()->json(['success'=>false,'data'=>"{}",'message'=>"Failed Create ".$e->getMessage(),'request'=>$request->all()],500);
      }

      return response()->json(['success'=>true,'data'=>['order'=>$order],'message'=>'Success'],200);
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
