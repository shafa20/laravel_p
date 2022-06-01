<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class MyApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return $product;
        
    }
    
    public function add(Request $res){
           $token=$res->token;
           if($token=="12345"){
           $productData=new Product();
           $productData->name = $res->name;
           $productData->description = $res->description;
           $productData->category= $res->category;
           $productData->size = $res->size;
           $productData->costprice = $res->costprice;
           $productData->saleprice = $res->saleprice;
           $productData->quantity = $res->quantity;
           $productData->status = $res->status;
           $productData->save();
           if($productData){

            return[
                'status'=>'200',
                'success'=>'data successfully saved'
            ];
           }
           else{
            return[
                'status'=>'400',
                'success'=>'failed'
            ];
           }
           }
           else{
            return[
                'status'=>'500'
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
