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
          <form action="{{ Route('subcategory.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="catId">Select Category</label>
                 <select name="catId" id="catId" class="form-control">
                   <option value="">---select category--</option>
                   @foreach($category as $cat)
                   <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                   @endforeach
                 </select>
                 <span class="text-danger">
                  @error('catId')
                    {{$message}}
                  @enderror
                </span>
              </div>
              <div class="form-group">
                <label for="subCatName">Sub-Category name</label>
                <input class="form-control" type="text" placeholder="enter sub-category name" name="subCatName" id="subCatName" value="{{ old('subCatName') }}">
                <span class="text-danger">
                  @error('subCatName')
                    {{$message}}
                  @enderror
                </span>

              </div>

              <div class="form-group">
                <label for="description"> description</label>
                <textarea placeholder="sub-category description  " class="form-control" name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
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
                <label for="status">status</label>
               <select class="form-control" name="status" id="status">
               <option value="">----select status---</option>
                <option value="1">active</option>
                <option value="2">inactive</option>    
                  </select>
             </div>
              <div class="form-group"> 
                <button type="submit" class=" form-control btn btn-info">Add Sub-Category</button>
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
 