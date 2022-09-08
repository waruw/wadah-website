<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post News Wadah</title>

    <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Wadah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Post News</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
        <form method="POST" action="{{route('adminnews.post')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" placeholder="Title" id="title">
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">TitleId</label>
              <input type="text" name="title_id" class="form-control" placeholder="Title" id="title">
            </div>

            <div class="mb-3">
              <label for="created_at" class="form-label">Created at</label>
              <input type="date" name="created_at" class="form-control" placeholder="Created_at" id="created_at">
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">Category</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
              <option selected>Select the category</option>
              <option value="1">Education</option>
              <option value="2">Health</option>
              <option value="3">Economic Development</option>
              <option value="4">Miscellaneous</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
              </div>

              <div class="mb-3">
                <label for="floatingTextarea2">Article</label>
                <textarea class="form-control" name="article" placeholder="Article" id="article"></textarea>
              </div>

              <div class="mb-3">
                <label for="floatingTextarea2">ArticleId</label>
                <textarea class="form-control" name="article_id" placeholder="Article" id="article_id"></textarea>
              </div>

              <div class="mb-3">
                <label for="photos">Photos</label>
                <textarea class="form-control" name="photos" placeholder="" id="photos"></textarea>
              </div>
              
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

   <!-- CK EDITOR -->
   <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>    

  <script>
    ClassicEditor
    .create( document.querySelector( '#article' ), {
      alignment: {
            options: [ 'left', 'right', 'center', 'justify' ]
        },
        
    })
    .catch( error => {
    console.error( error );
    } );
    </script>

<script>
  ClassicEditor
  .create( document.querySelector( '#article_id' ), {
    alignment: {
          options: [ 'left', 'right', 'center', 'justify' ]
      },
      
  })
  .catch( error => {
  console.error( error );
  } );
  </script>

    

    
</body>
</html>