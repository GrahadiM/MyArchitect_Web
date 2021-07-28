<?php

namespace App\Http\Controllers\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use JWTException;
use App\Models\User;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
      $credentials = $request->only('email', 'password');

      try {
        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['success'=>false,'data'=>'{}','message'=> 'invalid_credentials','token'=>null], 500);
        }
      } catch (JWTException $e) {
        return response()->json(['success'=>false,'data'=>'{}','message'=> 'could_not_create_token','token'=>null], 500);
      }

      $user = User::whereId(auth()->user()->id)->first();

      if ($user->role_id != 3) {
        return response()->json(['success'=>false,'data'=>'{}','message'=> 'hanya customer yang bisa login','token'=>null], 500);
      }
      $user->update(["remember_token"=>"Bearer ".$token]);
      return response()->json(['success'=>true,'data'=>['token'=>$token],'message'=>'Success Login','token'=>$token,"userId"=>auth()->user()->id],200);
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
