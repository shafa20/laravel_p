 @extends('backend.mastertemplate.template')

@section('content')



<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h>Ctegories</h4>
          <p class="mg-b-0">Manage Categories</p>
</div> 
</div>
<!-- category add Modal -->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
           <label for="name">category name</label>
           <input type="text" class="name form-control" placeholder="enter category name">
           <span class="text-danger nameError"></span>
         </div>
         <div class="form-group">
           <label for="description">Description</label>
          <textarea class="description form-control"  cols="20" rows="5" placeholder="enter description"></textarea>
          <span class="text-danger descriptionError"></span>
        </div>
         <div class="form-group">
           <label for="tag">tag</label>
           <input type="text" class="tag form-control" placeholder="enter tag">
           <span class="text-danger tagError"></span>
          </div>
         <div class="form-group">
           <label for="status">status</label>
           <select class="status form-control">
           <option value="1">---select status--</option>
             <option value="1">Active</option>
             <option value="2">Inactive</option>
           </select>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="addcategory btn btn-primary">Add Category</button>
      </div>
    </div>
  </div>
</div>

<!-- category edit modal -->
<div class="modal fade" id="cateditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modalmsg"></div>
      <div class="form-group">
           <label for="name">category name</label>
           <input type="text" id="name" class="form-control" placeholder="enter category name">
           <span class="text-danger nameError"></span>
         </div>
         <div class="form-group">
           <label for="description">Description</label>
          <textarea id="description" class=" form-control"  cols="20" rows="5" placeholder="enter description"></textarea>
          <span class="text-danger descriptionError"></span>
        </div>
         <div class="form-group">
           <label for="tag">tag</label>
           <input type="text" id="tag" class=" form-control" placeholder="enter tag">
           <span class="text-danger tagError"></span>
          </div>
         <div class="form-group">
           <label for="status">status</label>
           <select id="status" class=" form-control">
           <option value="1" id="statusvalue"></option>
             <option value="1">Active</option>
             <option value="2">Inactive</option>
           </select>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
      <div class="br-pagebody">
        
       <div class="row ">
         <div class="col-sm-12">
            <div class="card p-3 shadow-base  ">
              <div class="row d-flex justify-content-between px-3">
                   <h4>All Category<h4>
                     <button data-toggle="modal" data-target="#addcategory" class="btn btn-sm btn-info "><i class="fa fa-plus">Add Category</i></button>
              </div>
              <div class="msg"></div>
               <table class="table">
                 <thead>
                   <tr>
                     <th> Sl</th>
                     <th>category name</th>
                     <th>Description</th>
                     <th>Tags</th>
            
                     <th>Status</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody class="tbody">
                
                    <!-- <tr>
                      <td>1</td>
                      <td>pant02</td>
                      <td>this for young genaration</td>
                      <td>man,children</td>
                      <td>2</td>
                      
                     
                      <td>
                        <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="" ></i></button>
                      </td>
                    </tr> -->

<!-- Modal -->

                 </tbody>

               </table>
           </div>
        </div>
       </div>
     </div>
</div><!-- col-8 -->
         

   
@endsection
 