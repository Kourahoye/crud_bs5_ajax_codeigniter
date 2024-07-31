<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm">
                <img src="<?= base_url('uploads/avatar/' . $post['image']) ?>" class="card-img-top image-fluid" alt="<?= esc($post['title']) ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title"><?= esc($post['title']) ?></h5>
                        <div class="badge bg-dark"><?= esc($post['category']) ?></div>
                    </div>
                    <p class="card-text mb-4"><?= esc($post['body']) ?></p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <small class="text-muted"><?= date('d F Y', strtotime($post['created_at'])) ?></small>
                        <div>
                            <button class="btn btn-success btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No posts found</p>
<?php endif; ?>
