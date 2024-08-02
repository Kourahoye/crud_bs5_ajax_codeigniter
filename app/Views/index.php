<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST ZONE</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert2.min.css')?>">
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
            <li><a href="" class="fa fa-refresh dropdown-item" id="refresh">Refresh</a></li>
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
<div class="modal fade" id="updatepostmodal" tabindex="-1" aria-labelledby="updatepostmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 uppercase" id="exampleModalLabel">Edit Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editpost"  class="m-0 p-0" method="post" enctype="multipart/form-data" novalidate>
          <div class="modal-body">
            <input  type="hidden" id="pid" name="id" >
            <input  type="hidden" id="old_image" name="old_image">
          <div class="form-group">
            <label for="edittitle" class="form-label">Post title</label>
            <input type="text" class="form-control" id="edittitle" name="title" placeholder="Title" required>
            <div class="invalid-feedback">
            Please choose a title.
            </div>
          </div>
          <div class="form-group">
            <label for="editcategory" class="form-label">Post Category</label>
            <input type="text" class="form-control" id="editcategory" name="category" placeholder="Category" required>
            <div class="invalid-feedback">
            Please choose a category.
            </div>
          </div>
          <div class="form-group">
            <label for="editbody" class="form-label">Post description</label>
            <div class="input-group">
              <textarea class="form-control" id="editbody" placeholder="Description" name="body" required></textarea>
              <div class="invalid-feedback">
                Please provide a decription.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="editimage" class="form-label">Image</label>
            <input type="file" class="form-control" id="editimage" name="file">
            <div class="invalid-feedback">
              Please provide a image.
            </div>
          </div>
          <div id="post_img"></div>
        </div>
          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="updatePost_btn" type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
  </div>
</div>


<!--list of posts -->
<div class="container-fuild m-5">
    <div class="mb-4">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="text-secondary fw-bold fs-3">All Posts</div>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addpostmodal">Add New Post</button>
                </div>
                <div class="card-body row" id="posts">

                </div>
            </div>
    </div>
</div>

<!-- show post -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Post details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="showpost">
        
      </div>
    </div>
  </div>
</div>

    <script src="<?= base_url("assets/js/sweetalert2.all.min.js") ?>"></script>
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
            cache: false,
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
    loadPosts();
    // add post
    $('#addPost').submit(function (e)
    {
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
          cache:false,
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
                Swal.fire({
                        title: "Sucess!",
                        text: response.message,
                        icon: "success"
                      })
              }
              loadPosts()
            },
        }
        );
      }
    });
   //refresh
   $(document).delegate('#refresh','click',function(e){
    e.preventDefault()
    loadPosts()
   })

    //delete post
    $(document).delegate('.post_delete_btn','click',function (e){
        e.preventDefault();
        const id = $(this).attr('id');
        Swal.fire({
          title:'Delete this post?',
          text : 'This is not reversible',
          icon: 'warning',
          showCancelButton:true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText:'Yes'
        }).then((result) => {
          if(result.isConfirmed){
              $.ajax({
                url: "<?= base_url('post/delete') ?>/" + id,
                method: "get",
                success: function (response) {
                  Swal.fire(
                    'Deleted!',
                    response.message,
                    'success'
                  )
                  loadPosts();
                }
              });
          }
        });

    })
    // get post upadate
    $(document).delegate('.post_update_btn','click',function(e){
      e.preventDefault();
      const id = $(this).attr('id');
      $.ajax({
        method: "get",
        url: "<?= base_url('post/fetch')?>/" + id,
        dataType: "json",
        success: function (response) {
          $('#pid').val(response.message.id);
          $('#old_image').val(response.message.image);
          $('#edittitle').val(response.message.title);
          $('#editbody').val(response.message.body);
          $('#editcategory').val(response.message.category);
          $('#post_img').html('<img src="<?= base_url('uploads/avatar/')?>' + response.message.image + '" class="image-fluid img-thumbnail" width="150">');
        }
      });
    })
    //show post
    $(document).delegate('.showpost','click',function(e){
      e.preventDefault()
      const id = $(this).data('id')
      console.log(id)
      $.ajax({
        url: "<?= base_url('post/show/') ?>" + id,
        method: "get",
        contentType: false,
        cache:false,
        dataType: "json",
        success: function (response) {
          $('#showpost').html(response.html)
        }
      });
    })
    // update post
    $('#editpost').submit(function (e)
    {
      e.preventDefault();
      const formpostdata = new FormData(this)
      if(!this.checkValidity()){
        e.preventDefault();
        $(this).addClass('was-validated')
      }else{
        $('#updatePost_btn').text('Updating...');
        $.ajax({
          method: "post",
          url: "<?= base_url('post/update') ?>",
          data: formpostdata,
          contentType:false,
          cache:false,
          processData:false,
          dataType:'json',
          success: function (response) {
            // console.log(response)
            if(!response.error){
              //1722552428_cda15590955243329ed9
              //$('#editPost')[0].reset();
              $('#updatepostmodal').modal('hide');
              $('#updatePost_btn').text('Save');
              Swal.fire({
                title: "Sucess!",
                text: response.message,
                icon: "success"
              })
              loadPosts()
            }else{
              console.log(response)
              Swal.fire({
                title: "Error!",
                text: response.message,
                icon: "error"
              })
            }
            },
        }
        );
      }
    });

  });
</script>
</body>
</html>