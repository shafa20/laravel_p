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
          <form action="{{ Route('store') }}" method="post">
            @csrf
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">product name</label>
                <input class="form-control" type="text" placeholder="enter product name" name="name" id="name">
                <span class="text-danger">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>

              </div>

              <div class="form-group">
                <label for="description "> description</label>
                <textarea placeholder="product description  " class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                <span class="text-danger">
                  @error('description')
                    {{$message}}
                  @enderror
                </span>
              </div>

              <div class="form-group">
                <label for="category"> category</label>
     <select class="form-control" name="category" id="  category">
               <option value="">----select---</option>
    <option value="man">man</option>
    <option value="woman">woman</option>
     <option value="children">children</option>
    
    
  </select>
                 <span class="text-danger">
                  @error('category')
                    {{$message}}
                  @enderror
                </span>
              </div>
 <div class="form-group">
                <label for="size">size</label>
     <select class="form-control" name="size" id="size">
               <option value="">----select size---</option>
    <option value="sm">sm</option>
    <option value="md">md</option>
     <option value="L">L</option>
     <option value="xl">xL</option>
    
    
  </select>
              <span class="text-danger">
                  @error('size')
                    {{$message}}
                  @enderror
                </span>
              </div>
 
            </div>
            <div class="col-md-6"> 
              <div class="form-group">
                <label for="costprice">costprice</label>
                <input class="form-control" type="text" placeholder="enter costprice" name="costprice" id="costprice">
                <span class="text-danger">
                  @error('costprice')
                    {{$message}}
                  @enderror
                </span>
              </div>

               <div class="form-group">
                <label for="saleprice">saleprice</label>
                <input class="form-control" type="text" placeholder="enter saleprice" name="saleprice" id="saleprice">
                <span class="text-danger">
                  @error('saleprice')
                    {{$message}}
                  @enderror
                </span>
              </div>

              <div class="form-group">
                <label for="quantity">quantity</label>
                <input class="form-control" type="text" placeholder="enter quantity" name="quantity" id="quantity">
                 <span class="text-danger">
                  @error('quantity')
                    {{$message}}
                  @enderror
                </span>
              </div>

              <div class="form-group">
                <label for="status">status</label>
     <select class="form-control" name="status" id="status">
               <option value="">----select status---</option>
                <option value="1">active</option>
    <option value="2">inactive</option>    
  </select>
<span class="text-danger">
                  @error('status')
                    {{$message}}
                  @enderror
                </span>

              </div>

              <div class="form-group"> 
                <button class=" form-control btn btn-info">Add product</button>
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
 