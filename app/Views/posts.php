<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex align-items-stretch mh-100">
            <div class="card shadow-sm w-100">
            <a href="" class="showpost" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= esc($post['id']) ?>">
                   <img src="<?= base_url('uploads/avatar/' . $post['image']) ?>" class="card-img-top image-fuild cover" alt="<?= esc($post['title']) ?>" style="height: 200px; object-fit: cover;" >
               </a> 
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title"><?= esc($post['title']) ?></h5>
                        <div class="badge bg-dark rounded-pill"><?= esc($post['category']) ?></div>
                    </div>
                    <p class="card-text mb-4"><?= substr(esc($post['body']),0,50);?>
                    <?php if (strlen(esc($post['body']))> 50){
                        echo('.....');
                    } ?>
                </p>
                    <div class="mt-auto d-flex justify-content-between align-items-center card-footer">
                        <small class="text-muted fs-italic"><?= date('d F Y', strtotime($post['created_at'])) ?></small>
                        <div>
                            <button id='<?= esc($post['id']) ?>' class="btn btn-success btn-sm post_update_btn" data-bs-toggle="modal" data-bs-target="#updatepostmodal">Edit</button>
                            <button id='<?= esc($post['id']) ?>' class="btn btn-danger btn-sm post_delete_btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <h1 class="text-center text-secondary">No posts found</h1>
<?php endif; ?>







