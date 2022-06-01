 @extends('backend.mastertemplate.template')

@section('content')



<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Sub Category</h4>
          <p class="mg-b-0"> </p>
        </div> 

      <div class="br-pagebody">
     <div class="row row-sm ">
      <div class="col-sm-12">
        <div class="card p-3 shadow-base  ">
          <form action="{{ Route('items.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-6">
              
              <div class="form-group">
                <label for="item_code">Select Category</label>
                <select name="item_code" id="item_code" class="form-control">
                 @foreach($subcat as $subcats)
                  <option value="{{ $subcats->id }}">{{ $subcats->subCatName }}</option>
                 @endforeach
                 </select>
               {{ csrf_field() }}
                <span class="text-danger">
                  @error('item_code')
                    {{$message}}
                  @enderror
                </span>

              </div>

              <div class="form-group">
                <label for="name">Name </label>
                <input placeholder=" enter items name" class="form-control" name="name" id="name" cols="30" rows="4" value="{{ old('name') }}"/>
                <span class="text-danger">
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
              </div>

              <div class="form-group">
                <label for="description"> Items description</label>
                <textarea placeholder="enter items description  " class="form-control" name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
                <span class="text-danger">
                  @error('description')
                    {{$message}}
                  @enderror
                </span>
              </div>

</div>
         
            <div class="col-md-6"> 
              <div class="form-group">
                <label for="image">Sub-Category Image</label>
                <input class="form-control" type="file" name="image" id="image">
               
              </div>
           
             
              <div class="form-group">
                <label for="gallery">Item Gallery Image</label>
                <input class="form-control" type="file" name="gallery[]" id="gallery" multiple >
                <span class="text-danger">
                  @error('gallery')
                    {{$message}}
                  @enderror
                </span>
               
              </div>

              


              

              <div class="form-group"> 
                <button type="submit" class=" form-control btn btn-info">Add Items</button>
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
 