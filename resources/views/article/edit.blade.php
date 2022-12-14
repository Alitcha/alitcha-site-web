@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> </h1>
@stop

@section('content')
<div class="container">
        <div class="col-md-10 offset-md-1 ">

            <form method="post" action="{{ route('article.update',$article->id) }}">
                @csrf

                @method('PUT')
                
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                          @if($errors->has("title"))
                          <li>Titre obligatoire</li>
                          @endif
                          @if($errors->has("image"))
                          <li>Image obligatoire</li>
                          @endif
                          @if($errors->has("content"))
                          <li>Corps de l'article obligatiore</li>
                          @endif
                            
                        </ul>
                    </div>
                @endif

                <div class="float-right mb-3">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#imgmodal">
                  Images    
                  </button>

                </div>

                
                <div class="from-group mb-2">
                <input id="title" name="title" class="form-control  @error('title') is-invalid @enderror" placeholder="Titre" type="input" name="content" value="{{ old('title',$article->title) }}" />
                
                </div>

                <div class="from-group mb-2">
                  <textarea name="subtitle" id="subtitle"  class="form-control  @error('subtitle') is-invalid @enderror" placeholder="Sous titre...">{{$article->subtitle}}</textarea>
                 
                </div>

                
                <div class="from-group mb-2">
                <input id="image" name="image" class="form-control  @error('image') is-invalid @enderror" placeholder="L'url de l'image principale (copier/coller)" type="input" name="content" value="{{ old('image',$article->image) }}" />
                  
                </div>

                <div>
                  
                  <select id="categorie" name="categorie" class="form-select mb-2" aria-label="Default select example">
                 
                    @foreach($categories as $cat)
                  
                    @if($cat->id == $article->categorie_id)
                        <option  value="{{$cat->id}}" selected >{{$cat->name}}</option>
                    @else
                      <option  value="{{$cat->id}}">{{$cat->name}}</option>
                    @endif
                    @endforeach
                  </select>
                  
                </div>
                
            
                <div class="from-group mb-2">
                    <textarea id="content" type="hidden" name="content">
                    {!!  $article->content !!}
                    </textarea>
                    <!-- <input id="content" type="hidden" name="content" value="{{ old('content') }}" /> -->
                    
                    <!--<trix-editor input="content" class="trix-content"></trix-editor>-->
                </div>
               <!-- <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary"/>-->
            </form>
        </div>

        <!-- Modal -->
<div class="modal fade " id="imgmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl modal-fullscreen-sm-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image ?? ins??rer</h5>
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
    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
@stop

@section('js')
<script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.tiny.cloud/1/ii55vmuwsr4ox819yjuuyda651l53xnp90lx4dbt3zky9jeu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

function copy(id) {
    // Cible de l'??l??ment qui doit ??tre copi??
    let elem = document.getElementById(id);
    //alert(elem.value);
    var target = elem.dataset.target;
    var fromElement = document.querySelector(target);
    if(!fromElement) return;

    // S??lection des caract??res concern??s
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Ex??cution de la commande de copie
        var result = document.execCommand('copy');
        if (result) {
            // La copie a r??ussi
            alert('Copi??');
        }
    }
    catch(err) {
        // Une erreur est surevnue lors de la tentative de copie
        alert(err);
    }

    // Fin de l'op??ration
    selection = window.getSelection();
    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
  }
  //plugins: 'a11ychecker advcode advlist casechange export formatpainter image editimage  autolink help lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents  tinymcespellchecker',
    tinymce.init({
      selector: '#content',
      plugins: 'advlist image autolink help lists fullscreen media table',
      toolbar: 'undo redo  blocks bold italic forecolor backcolor fontsize  font alignleft  aligncenter alignright alignjustify image fullscreen | help bullist numlist outdent indent | format  casechange checklist code   editimage table formatpainter',
      toolbar_mode: 'floating',
      relative_urls : true,
      document_base_url : location.host,
      /* enable title field in the Image dialog*/
  image_title: true,
  height : screen.height*0.75,
  
  /* enable automatic uploads of images represented by blob or data URIs*/
  //automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  
    });
  </script>
      
    
@stop

