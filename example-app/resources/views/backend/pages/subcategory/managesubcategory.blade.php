 @extends('backend.mastertemplate.template')

@section('content')



<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h>Sub Category</h4>
          <p class="mg-b-0">Manage Subcategory</p>
</div> 

      <div class="br-pagebody">
       <div class="row row-sm ">
         <div class="col-sm-12">
            <div class="card p-3 shadow-base  ">
               <table class="table">
                 <thead>
                   <tr>
                     <th> Sl</th>
                     <th>Category Id</th>
                     <th>Sub Category Name</th>
                     <th>Description</th>
                     <th>Image</th>
                     <th>Status</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                  @php $Sl=1; @endphp
                   @foreach ($subcat as $data)
                   
                    <tr>
                      <td>{{ $Sl}}</td>
                      <td>{{ $data->category->name}}</td>
                      <td>{{ $data->subCatName}}</td>
                      <td>{{ $data->description}}</td>
                      <td><img height="80" src="{{ asset('backend/subcategoryimages/'.$data->image)}}" alt=""></td>
                      <td>{{ $data->status}}</td>
                      <td>
                        @if($data->status==1)
                        <span class="badge badge-info">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ Route('subcategory.edit',$data->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{ $data->id }}" ></i></button>
                      </td>
                    </tr>

<!-- Modal -->
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to Delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="{{ Route('subcategory.delete',$data->id) }}"  class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
                    @php $Sl++; @endphp
                  @endforeach
                 </tbody>

               </table>
           </div>
        </div>
       </div>
     </div>
</div><!-- col-8 -->
         

   
@endsection
 