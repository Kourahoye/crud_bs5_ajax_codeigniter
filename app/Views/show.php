<?php if (!empty($post)): ?>
        
            <div class="card shadow-sm w-100 h-100">
                <img title="Show post" src="<?= base_url('uploads/avatar/' . $post['image']) ?>" class="card-img-top image-fuild cover" alt="<?= esc($post['title']) ?>" >
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title"><?= esc($post['title']) ?></h5>
                        <div class="badge bg-dark rounded-pill"><?= esc($post['category']) ?></div>
                    </div>
                    <p class="card-text mb-4"><?= $post['body']?>
                </p>
                    <div class="mt-auto d-flex flex-column justify-content-between align-items-center card-footer">
                        <small class="text-muted fs-italic">Created: <?= date('d F Y \a\t  H:i a', strtotime($post['created_at'])) ?></small>
                        <small class="text-muted fs-italic">Updated: <?= date('d F Y \a\t  H:i a', strtotime($post['updated_at'])) ?></small>
                        <div>
                            <button id='<?= esc($post['id']) ?>' class="btn btn-success btn-sm post_update_btn" data-bs-toggle="modal" data-bs-target="#updatepostmodal">Edit</button>
                            <button id='<?= esc($post['id']) ?>' class="btn btn-danger btn-sm post_delete_btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        
<?php else:
    print_r($post) ?>
    <p>No posts found</p>
<?php endif; ?>
