<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Portofolio::with("category_type")->with("category_model")->with("user");
        if (($request->category == 'model') && ($request->categori_id != null)) {
          $query->where('category_model_id',$request->categori_id);
        }

        if (($request->category == 'type') && ($request->categori_id != null)) {
          $query->where('category_type_id',$request->categori_id);
        }

        $portofolio = $query->paginate(10);
        $portofolio->each(function($query) {
           $query->append('title');
           $query->append('category_type_name');
           $query->append('category_model_name');
           $query->append('author');
           $query->append('price');
      });

        return response()->json(['success'=>true,'data'=>['portofolio'=>$portofolio],'message'=>'Success'],200);
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
