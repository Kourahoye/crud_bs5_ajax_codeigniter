<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST ZONE</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actions
          </a>
          <ul class="dropdown-menu">
            <li><a
                class="dropdown-item"
                data-bs-toggle="modal"
                href="#addpostmodal"
                role="button"
                >Add Post</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search" id="form" novalidate>
      <div class="form-group d-flex align-items-center flex-row-reverse">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" required>
        <div class="invalid-feedback">Ce champ est obligatoire</div>
      </div>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>
<!--Add post Modal -->
<div class="modal fade" id="addpostmodal" tabindex="-1" aria-labelledby="addpostmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 uppercase" id="exampleModalLabel">Add Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addPost"  class="m-0 p-0" method="post" enctype="multipart/form-data" novalidate>
          <div class="modal-body">
          <div class="form-group">
            <label for="title" class="form-label">Post title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            <div class="invalid-feedback">
            Please choose a title.
            </div>
          </div>
          <div class="form-group">
            <label for="category" class="form-label">Post Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
            <div class="invalid-feedback">
            Please choose a category.
            </div>
          </div>
          <div class="form-group">
            <label for="body" class="form-label">Post description</label>
            <div class="input-group">
              <textarea class="form-control" id="body" placeholder="Description" name="body" required></textarea>
              <div class="invalid-feedback">
                Please provide a decription.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="file" required>
            <div class="invalid-feedback">
              Please provide a image.
            </div>
          </div>
        </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="addPost_btn" type="submit" class="btn btn-primary">Add post</button>
        </div>
        </form>
    </div>
  </div>
</div>

<!--Update post Modal -->
<div class="modal fade" id="addpostmodal" tabindex="-1" aria-labelledby="updatepostmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 uppercase" id="exampleModalLabel">Add Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addPost"  class="m-0 p-0" method="post" enctype="multipart/form-data" novalidate>
          <div class="modal-body">
          <div class="form-group">
            <label for="title" class="form-label">Post title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            <div class="invalid-feedback">
            Please choose a title.
            </div>
          </div>
          <div class="form-group">
            <label for="category" class="form-label">Post Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
            <div class="invalid-feedback">
            Please choose a category.
            </div>
          </div>
          <div class="form-group">
            <label for="body" class="form-label">Post description</label>
            <div class="input-group">
              <textarea class="form-control" id="body" placeholder="Description" name="body" required></textarea>
              <div class="invalid-feedback">
                Please provide a decription.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="file" required>
            <div class="invalid-feedback">
              Please provide a image.
            </div>
          </div>
        </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="addPost_btn" type="submit" class="btn btn-primary">Add post</button>
        </div>
        </form>
    </div>
  </div>
</div>



<div class="container my-4">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="text-secondary fw-bold fs-3">All Posts</div>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addpostmodal">Add New Post</button>
                </div>
                <div class="card-body">
                    <div class="row" id="posts">
                        <!-- Posts will be loaded here via AJAX -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <script src="<?= base_url("assets/js/bootstrap.bundle.js") ?>"></script>
    <script src="<?= base_url("assets/js/jquery.js") ?>"></script>
    <script>
     $('#form').submit(function (e) { 
      e.preventDefault();
      const form = new FormData()
      if(!this.checkValidity()){
        e.preventDefault();
        $(this).addClass('was-validated')
      }else{
        console.log('fcghjbkl')
      }
     });
     
    $(document).ready(function() 
{    // Function to load posts via AJAX
    function loadPosts() {
        $.ajax({
            url: '<?= base_url('posts/ajax') ?>',
            method: 'GET',
            contentType:false,
            caches:false,
            processData:false,
            dataType:'json',
            success: function(response) {
                if (response.html) {
                    $('#posts').html(response.html);
                } else {
                    $('#posts').html('<p>No posts found</p>');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching posts:', error);
            }
        });
    }
    // Load posts when the page is ready
    function fetchPost(){
      $.ajax({
        method: "get",
        url: "<?= base_url('post/fetch') ?>",
        dataType: "json",
        success: function (response) {
          console.log(response)
        }
      });
    }
    loadPosts();
    $('#addPost').submit(function (e) { 
      e.preventDefault();
      const formpostdata = new FormData(this)
      if(!this.checkValidity()){
        e.preventDefault();
        $(this).addClass('was-validated')
      }else{
        $('#addPost_btn').text('Saving...');
        $.ajax({
          method: "post",
          url: "<?= base_url('/post/add') ?>",
          data: formpostdata,
          contentType:false,
          caches:false,
          processData:false,
          dataType:'json',
          success: function (response) {
              if (response.error){
              $('#image').addClass('is-invalid');
              $('#image').next().text(response.message.image);
              }else{
                $('#addpostmodal').modal('hide');
                $('#addPost')[0].reset();
                $('#image').removeClass('is-invalid');
                $('#image').next().text('');
                $('#addPost_btn').text('Save');
              }
              loadPosts()
            },
        }
        );
      }
     });

  });
</script>
</body>
</html>