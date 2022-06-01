<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Gallery;
use App\Models\Backend\Items;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;
use Image;
use File;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {  
         $items=Items::all();
         return view('backend.pages.items.manageitems', compact('items'));
    //return view('backend.pages.product.productmanage', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $subcat=Subcategory::all();
        return view('backend.pages.items.additems', compact("subcat"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->image){
            $image=$request->file('image');
            $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/items/'.$imgCustomName);
            image::make($image)->save($location);
            $item=new Items();
            $item->item_code= $request->item_code;
            $item->name= $request->name;
            $item->description= $request->description;
            $item->pic= $imgCustomName;
            $item->save();
             //dd($item);

        }

        if($request->gallery){
            $galleryimages=$request->file('gallery');
            foreach($galleryimages as $image1){
                
                $galleryimgCustomName=rand().'.'.$image1->getClientOriginalExtension();
                $location1=public_path('backend/items/gallery/'.$galleryimgCustomName);
                image::make($image1)->save($location1);
               $gallery= new Gallery();
               $gallery->item_code= $request->item_code;
               $gallery->galery_pic= $galleryimgCustomName;
               
                 $gallery->save();
             //dd($gallery);
            }
        }
       return redirect()->route('items.manage');
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
        $items=Items::find($id);
        $galleries=Gallery::where('item_code',$items->item_code)->get();
         return view('backend.pages.items.edititems',compact("items","galleries"));
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
        $item=Items::find($id);
        $item->name= $request->name;
        $item->description= $request->description;
        if(!empty($request->image)){

          if(File::exists('backend/items/'. $item->pic)){
          File::delete('backend/items/'. $item->pic);
           }
           $image=$request->file('image');
           $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
           $location1=public_path('backend/items/'.$imgCustomName);
           image::make($image)->save($location1);
           $item->pic=$imgCustomName;    
       
        }
        $item->update();
         if(!empty($request->gallery))
         {
            foreach($galleryimages as $image1){
                $galleryimgCustomName=rand().'.'.$image1->getClientOriginalExtension();
                $location1=public_path('backend/items/gallery/'.$galleryimgCustomName);
                image::make($image1)->save($location1);
               $gallery= new Gallery();
               $gallery->item_code= $request->item_code;
               $gallery->galery_pic= $galleryimgCustomName;
               
                 $gallery->save();
            }
         }
         return redirect()->route('items.manage');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item=Items::find($id);
        if(File::exists('backend/items/'.$item->pic)){
            File::delete('backend/items/'.$item->pic);
        }

        $gallerypics=Gallery::where('item_code',$item->item_code)->get();
         
        foreach($gallerypics as $gallerypic){

            if(File::exists('backend/items/gallery/'.$gallerypic->galery_pic)){
                File::delete('backend/items/gallery/'.$gallerypic->galery_pic);
            }
            $datadelete=Gallery::find($gallerypic->id);
            $datadelete->delete();
        }

        $item->delete();
        return redirect()->route('items.manage');
    }
    public function gallerydelete($id)
    {
        $gallery=Gallery::find($id);
        if(File::exists('backend/items/gallery/'.$gallery->galery_pic)){
            File::delete('backend/items/gallery/'.$gallery->galery_pic);
        }
        $gallery->delete();
        return redirect()->route('items.manage');
      
    }
}
