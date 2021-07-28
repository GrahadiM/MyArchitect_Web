<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;
use Illuminate\Support\Facades\Validator;
class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $akun = User::whereId(auth()->user()->id)->first();
        return response()->json(['success'=>true,'data'=>['akun'=>$akun],'message'=>'Success'],200);
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
     public function edit(Request $request)
     {

       // return response()->json(['success'=>false,'data'=>$request->all(),'message'=>"User Not Found"],500);

       try {
         $auth =  User::where('remember_token',"LIKE","%".$request->token)->first();
         $auth->id;
       } catch (\Exception $e) {
         return response()->json(['success'=>false,'data'=>"{}",'message'=>"User Not Found".$e->getMessage()],500);
       }

       $validator = Validator::make($request->except('_token'), [
          'name' => ['required'],
          'phone' => ['required'],
          'desc' => ['required'],
          'city' => ['required'],
          'address' => ['required'],
          'email' => ['required'],
      ]);

      if ($validator->fails()) {
        return response()->json(['success'=>false,'data'=>$validator->messages(),'message'=>'failed register'],400);
      }

       // return ;
       try {
         $auth->update([
           "name"=>$request->name,
           "phone"=>$request->phone,
           "desc"=>$request->desc,
           "city"=>$request->city,
           "address"=>$request->address,
           // "email"=>$request->email,
         ]);

         if ($request->password != null) {
           $auth->update(['password' => bcrypt($request->password)]);
         }
       } catch (\Exception $e) {
         return response()->json(['success'=>false,'data'=>"{}",'message'=>"Failed Create ".$e->getMessage(),'request'=>$request->all()],500);
       }

       return response()->json(['success'=>true,'data'=>['auth'=>$auth],'message'=>'Success'],200);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      try {
        $auth =  User::whereId($request->userId)->first();
        $auth->id;
      } catch (\Exception $e) {
        return response()->json(['success'=>false,'data'=>"{}",'message'=>"User Not Found".$e->getMessage()],500);
      }

      return response()->json(['success'=>true,'data'=>['auth'=>$auth],'message'=>'Success'],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store($id)
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
