<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Portofolio;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::whereUserId($request->userId)->with('progres')->with('user')->with('portofolio.category_type')->with('portofolio.category_model')->with('portofolio.user')->get();

        //->pluck('portofolio_id');
      //   $portofolio = Portofolio::with("category_type")->with("category_model")->with("progres")->with("user")->whereIn('id',$order)->get();
        $orders->each(function($query) {
           $query->append('progres_akhir');
            $query->portofolio->append('title');
           $query->portofolio->append('category_type_name');
           $query->portofolio->append('category_model_name');
           $query->portofolio->append('author');
         });


         //
         // return $orders;
      //      $query->append('category_type_name');
      //      $query->append('category_model_name');
      //      $query->append('author');
      //      $query->append('progres_akhir');
      // });
      //
        return response()->json(['success'=>true,'data'=>['order'=>$orders],'message'=>'Success','request'=>$request->all()],200);
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
