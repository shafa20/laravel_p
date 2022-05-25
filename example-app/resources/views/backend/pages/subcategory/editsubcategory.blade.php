 @extends('backend.mastertemplate.template')

@section('content')



<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div> 

      <div class="br-pagebody">
     <div class="row row-sm ">
      <div class="col-sm-12">
        <div class="card p-3 shadow-base  ">
          <form action="{{ Route('update',$product->id) }}" method="post">
            @csrf
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">product name</label>
                <input class="form-control" type="text" placeholder="enter product name" name="name" id="name" value="{{ $product->name }}">
               

              </div>

              <div class="form-group">
                <label for="description "> description</label>
                <textarea placeholder="product description  " class="form-control" name="description" id="description" cols="30" rows="10">{{ $product->description }} </textarea>
               
              </div>

              <div class="form-group">
                <label for="category"> category</label>
     <select class="form-control" name="category" id="  category">
               <option value="">----select---</option>
    <option value="man" @if ($product->category =='man') selected @endif>man</option>
    <option value="woman" @if ($product->category =='woman') selected @endif>woman</option>
     <option value="children" @if ($product->category =='children') selected @endif>children</option>
    
    
  </select>
                
              </div>
 <div class="form-group">
                <label for="size">size</label>
     <select class="form-control" name="size" id="size">
               <option value="">----select size---</option>
    <option value="sm"  @if ($product->size =='sm') selected @endif>sm</option>
    <option value="md" @if ($product->size =='md') selected @endif>md</option>
     <option value="L" @if ($product->size =='L') selected @endif>L</option>
     <option value="xl" @if ($product->size =='xl') selected @endif>xL</option>
    
    
  </select>
             
              </div>
 
            </div>
            <div class="col-md-6"> 
              <div class="form-group">
                <label for="costprice">costprice</label>
                <input class="form-control" type="text" placeholder="enter costprice" name="costprice" id="costprice" value="{{ $product->costprice }}">
               
              </div>

               <div class="form-group">
                <label for="saleprice">saleprice</label>
                <input class="form-control" type="text" placeholder="enter saleprice" name="saleprice" id="saleprice" value="{{ $product->saleprice }}">
              
              </div>

              <div class="form-group">
                <label for="quantity">quantity</label>
                <input class="form-control" type="text" placeholder="enter quantity" name="quantity" id="quantity" value="{{ $product->quantity }}">
                 
              </div>


              <div class="form-group">
                <label for="status">status</label>
     <select class="form-control" name="status" id="status">
               <option value="">----select status---</option>
    <option value="1" @if ($product->status=='1') selected @endif>active</option>
    <option value="2" @if ($product->status =='2') selected @endif>inactive</option>
      
    
  </select>

              </div>

              <div class="form-group"> 
                <button class=" form-control btn btn-info">Update</button>
              </div>

            </div>
          </div>
          </form>
       </div>
     </div>
 </div>
</div>
</div><!-- col-8 -->
         

   
@endsection
 