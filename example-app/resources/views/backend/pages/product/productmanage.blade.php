 @extends('backend.mastertemplate.template')

@section('content')



<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h>products</h4>
          <p class="mg-b-0">Manage products</p>
</div> 

      <div class="br-pagebody">
       <div class="row row-sm ">
         <div class="col-sm-12">
            <div class="card p-3 shadow-base  ">
               <table class="table">
                 <thead>
                   <tr>
                     <th> Sl</th>
                     <th>product name</th>
                     <th>Description</th>
                     <th>Category</th>
                     <th>Size</th>
                     <th>Cost Price</th>
                     <th>Sale Price</th>
                     <th>Quantity</th>
                     <th>Status</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                  @php $Sl=1; @endphp
                   @foreach ($product as $product)
                   
                    <tr>
                      <td>{{ $Sl}}</td>
                      <td>{{ $product->name}}</td>
                      <td>{{ $product->description}}</td>
                      <td>{{ $product->category}}</td>
                      <td>{{ $product->size}}</td>
                      <td>{{ $product->costprice}}</td>
                      <td>{{ $product->saleprice}}</td>
                      <td>{{ $product->quantity}}</td>
                      <td>
                        @if($product->status==1)
                        <span class="badge badge-info">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ Route('edit',$product->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{ $product->id }}" ></i></button>
                      </td>
                    </tr>

<!-- Modal -->
<div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a href="{{ Route('delete',$product->id) }}"  class="btn btn-danger">Delete</a>
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
 