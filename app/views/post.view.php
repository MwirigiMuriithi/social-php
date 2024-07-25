<div class="row post border p-1">
    <div class="col-3 border  text-center">
        <img class="profile-image rounded-circle m-1" src="<?= get_image($post->username) ?>" alt="" style="width: 80px; height: 80px; object-fit: cover;">
        <h4><?= esc($row->username) ?></h4>
    </div>
    <div class="col-9 border text-start">
        <div class="muted"><?= get_date(esc($row->username)) ?></div>
        <?php if (!empty($post->image)) : ?>
            <img class="profile-image rounded-circle my-2" src="<?= get_image($post->username) ?>" alt="" style="width: 80px; height: 80px; object-fit: cover;">
        <?php endif; ?>
        <p><?= esc($post->date) ?></p>
    </div>
</div>
<hr>