@extends('adminlte::page')

@section('title', 'Images')

@section('content_header')
    <h1>Magazines</h1>
    <div class=" m-2">
                 
                <button type="button" class="btn btn-primary" id="new">
                  + Nouveau    
               </button>
               <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#imgmodal">
                  Images    
                </button>
    </div>
@stop

@section('content')
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Un titre,un url, doivent être renseignés et un pdf selectionné !
                    </div>
                @endif
              <form action="{{route('magazine.store')}}" method="post" enctype="multipart/form-data" id="form" class="mb-5">
                @csrf
                
                  <div class="mt-3">
                   
                    <input class="form-control mb-1" type="text" id="title" name="title" placeholder="Le titre de votre magazine">
                    <input class="form-control mb-1" type="text" id="image" name="image" placeholder="L'url d'une image de fond">
                    <div class="input-group mb-3">
                        <input class="form-control" type="file" id="formFile" name="magazine">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ajouter</button>
                    </div>
                  </div>
                  
                
              </form>
            </div>
            <hr class="m-2">
           <div class="row">
                  @foreach($magazines as $mgz)
                  
                    <div class="col-md-3">
                    <a href="{{route('magazine.adminshow',$mgz->id)}}">
                        <img src="{{$mgz->image}}"  class="img-thumbnail" width="200px" height="250px" /> 
                        
                        <h6>{{$mgz->title}}</h6>
                        </a>
                    </div>
                    
                  @endforeach
            </div>
            
            
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade " id="imgmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl modal-fullscreen-sm-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image à insérer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <div class="row">
                  @if($images->count()==0)
                    <span class="alert alert-info">Aucune image ! Ajoutez des images dans la section image pour les retrouver ici.</span>
                  @else
                    @foreach($images as $img)
                      <div class="col-md-3" id="{{ 'img'.$img->id }}" >
                          
                          <img src="{{asset('images/'.$img->path_name)}}" class="img-thumbnail" alt="...">
                          <span class="" id="{{ 'text'.$img->id }}">http://localhost:8000/images/{{$img->path_name}}</span>
                          <i class="fa-solid fa-copy" id="{{ 'btn'.$img->id }}" data-target="{{ '#text'.$img->id }}" onclick ="copy('btn{{ $img->id }}');"></i>
                      </div>
                    @endforeach
                  @endif
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>

 <script>
     var show = false;
     $("#form").hide();

     $("#new").on("click",()=>{
        if(show){
            $("form").hide();
            $("#new").html("+ Nouveau");
            show = false;
        }else{
         $("form").show();
         $("#new").html("Annuler");
         show =true;
        }
     })


  function copy(id) {
    // Cible de l'élément qui doit être copié
    let elem = document.getElementById(id);
    //alert(elem.value);
    var target = elem.dataset.target;
    var fromElement = document.querySelector(target);
    if(!fromElement) return;

    // Sélection des caractères concernés
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Exécution de la commande de copie
        var result = document.execCommand('copy');
        if (result) {
            // La copie a réussi
            alert('Copié');
        }
    }
    catch(err) {
        // Une erreur est surevnue lors de la tentative de copie
        alert(err);
    }

    // Fin de l'opération
    selection = window.getSelection();
    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
  }
     

 </script>
@stop

