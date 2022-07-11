@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
        <div class="col-md-10 offset-md-1 ">
            <form method="post" action="{{ route('article.store') }}">
                @csrf
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            
                    
                <div class="from-group mb-2">
                <input id="title" name="title" class="form-control  @error('titte') is-invalid @enderror" placeholder="Titre" type="input" name="content" value="{{ old('title') }}" />
                @error('titre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
                
            
                <div class="from-group mb-2">
                    <textarea id="content" type="hidden" name="content">
                    {{ old('content') }}
                    </textarea>
                    <!-- <input id="content" type="hidden" name="content" value="{{ old('content') }}" /> -->
                    @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    <!--<trix-editor input="content" class="trix-content"></trix-editor>-->
                </div>
               <!-- <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary"/>-->
            </form>
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

<script src="https://cdn.tiny.cloud/1/ii55vmuwsr4ox819yjuuyda651l53xnp90lx4dbt3zky9jeu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode advlist casechange export formatpainter image editimage  autolink help lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents  tinymcespellchecker',
      toolbar: 'undo redo  blocks bold italic forecolor backcolor fontsize  font alignleft  aligncenter alignright alignjustify help| bullist numlist outdent indent | format  casechange checklist code  image editimage table formatpainter',
      toolbar_mode: 'floating',
      /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: (cb, value, meta) => {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.addEventListener('change', (e) => {
      const file = e.target.files[0];

      const reader = new FileReader();
      reader.addEventListener('load', () => {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        const id = 'blobid' + (new Date()).getTime();
        const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        const base64 = reader.result.split(',')[1];
        const blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      });
      reader.readAsDataURL(file);
    });

    input.click();
  },
 
    });
  </script>
      
    
@stop

