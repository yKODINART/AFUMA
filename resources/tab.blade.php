<div class="modal fade" id="infoblog{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Détails</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
                  <div class="avatar-group mt-2">
                     
                      <img style="width:500px; height:200px;object-fit:cover;" src="{{asset($blog->image)}}" alt="user6">
                     
                  </div>
                  <h3 class="modal-title w-100 font-weight-bold text-center">{{ $blog->titre }} </h3>
                           <p style="text-align: center">{{ $blog->sous_titre }} </p> 

                            <p> Date :  {{ $blog->date }} </p> 
                 
                            <p> {{ $blog->description }} </p> 
          
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary" data-bs-dismiss="modal"> FERMER <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
      
      </div>
    </div>
  </div>

  <div class="modal fade" id="editblog{{$blog->id}}" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Editer le Blog</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/admin/blogs/edit/{{$blog->id}}" method="post">
            @csrf
            <div class="modal-body mx-3">

                <div class="md-form mb-2">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="form34">Image</label>
                    <input type="file" name="image" value="{{$blog->image}}" id="form34" class="form-control validate" accept="image/*" multiple>    
                </div>
                
                <div class="md-form mb-2">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="form34">Description</label>
                    <input type="text" name="description" value="{{$blog->description}}" id="form34" class="form-control validate">    
                </div>

                <div class="md-form mb-2">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form34">Date</label>
                  <input type="date" name="date" value="{{$blog->date}}" id="form34" class="form-control validate">    
              </div>

              <div class="md-form mb-2">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form34">Titre</label>
                  <input type="text" name="titre" value="{{$blog->titre}}" id="form34" class="form-control validate">    
              </div>

              <div class="md-form mb-2">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <label data-error="wrong" data-success="right" for="form34">Sous_Titre</label>
                  <input type="text" name="sous_titre" value="{{$blog->sous_titre}}" id="form34" class="form-control validate">    
              </div>
            </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-secondary"> MODIFIER <i class="fas fa-paper-plane-o ml-1"></i></button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> ANNULER <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteblog{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
                <p> Confirmer la suppression du blog {{$blog->titre}} ?</p>
          
            <div class="modal-footer d-flex justify-content-center">
                <a href="/admin/blogs/delete/{{$blog->id}}"><button class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> NON <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
      
      </div>
    </div>
  </div>





  @foreach ($blogs as $blog)
  <tr>
      <td class="align-middle  text-sm">
          <span class="text-xs font-weight-bold">{{$blog->date}}  </span>
      </td>
      <td>
          <div class="avatar-group mt-2">
              <a href="javascript:;" class="avatar avatar-xs" data-bs-toggle="tooltip" data-bs-placement="bottom">
                <img src="{{asset($blog->image)}}" alt="user6">
              </a>
          </div>
      </td>
      <td class="align-middle  text-sm">
          <span class="text-xs font-weight-bold">{{$blog->titre}}  </span>
      </td>
      <td class="align-middle  text-sm">
          <span class="text-xs font-weight-bold">{{$blog->sous_titre}}  </span>
      </td>
    <td>
        <a href="javascript:;">
          <i class="fas fa-info text-primary text-sm" data-bs-toggle="modal" data-bs-target="#infoblog{{$blog->id}}" data-bs-placement="top" title="Info blog"></i>
        </a> &nbsp;
        <a href="javascript:;">
          <i class="fas fa-user-edit  text-sm" data-bs-toggle="modal" data-bs-target="#editblog{{$blog->id}}" data-bs-placement="top" title="Edit blog" style="color: blue;"></i>
        </a> &nbsp;
        <a href="javascript:;">
          <i class="fas fa-trash  text-sm" data-bs-toggle="modal" data-bs-target="#deleteblog{{$blog->id}}"  data-bs-placement="top" title="Delete blog" style="color: red;"></i>
        </a>
    </td>
  </tr>


@endforeach





<form action="/admin/blogs/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-body mx-3">

        <div class="md-form mb-2">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form34">Image</label>
            <input type="file" name="image" id="form34" class="form-control validate" accept="image/*" multiple required>
            <p style="color: red;"> images autorisés: jpeg, png, jpg etc....</p>    
        </div>
        
        <div class="md-form mb-2">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form34">Description</label>
            <textarea type="text" name="description" id="form34" class="form-control validate">    
        </div>

        <div class="md-form mb-2">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form34">Date</label>
            <input type="date" name="date" id="form34" class="form-control validate">    
        </div>

        <div class="md-form mb-2">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form34">Titre</label>
            <input type="text" name="titre" id="form34" class="form-control validate">    
        </div>

        <div class="md-form mb-2">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form34">Sous-Titre</label>
            <input type="text" name="sous_titre" id="form34" class="form-control validate">    
        </div>
        
     </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-secondary"> AJOUTER </button>
            <button type="button" data-bs-dismiss="modal" class="btn btn-primary"> ANNULER </button>
        </div>
</form>