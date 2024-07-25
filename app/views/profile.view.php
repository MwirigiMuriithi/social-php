<?php $this->view('header') ?>
<div class="p-2 col-md-6 mx-auto border rounded shadow">
    <center>
        <h2>User Profile</h2>
    </center>
    <div class="text-center">
        <span>
            <img class="profile-image rounded-circle m-4" src="<?= get_image($row->image) ?>" alt="" style="width: 200px; height: 200px; object-fit: cover;">
            <label for="fileInput">
                <i class="h1 text-primary bi bi-card-image" style="position:absolute; cursor:pointer;"></i>
            </label>
            <input id="fileInput" onchange="display_image(this.files[0]); change_image(this.files[0])" type="file" class="d-none" name="">
        </span>
        <div class="profile-image-prog progress d-none">
            <div class="progress-bar" style="width: 25%">25%</div>
        </div>
        <h3><?= esc($row->username) ?></h3>
        <script>
            function display_image(file) {
                document.querySelector(".profile-image").src = URL.createObjectURL(file);
            }
        </script>
    </div>
    <div>
        <div class="post-prog progress d-none">
            <div class="progress-bar" style="width: 25%">25%</div>
        </div>
        <form action="" method="post">
            <div class="bg-secondary  p-2">
                <textarea rows="6" class="form-control" name="" id="" placeholder="What's on your mind?"></textarea>
                <button class=" mt-1 btn  btn-warning float-end">Post</button>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
    <div class="my-3">
        <?php if (!empty($posts)) : ?>
            <?php foreach ($posts as $post) : ?>
                <?php $this->view('post', ['post' => $post]) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <script>
    function change_image(file) {
        var obj = {};
        obj.image = file;
        obj.data_type = "profile-image";
        obj.id = "<?=user('id')?>";

        send_data(obj);
    }

    function send_data(obj) {
        var myform = new FormData();

        for (var key in obj) {
            myform.append(key, obj[key]);
        }

        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function(e) {
            if (ajax.readyState === 4) {
                if (ajax.status === 200) {
                    handle_result(ajax.responseText);
                } else {
                    console.error('Error fetching data:', ajax.statusText);
                }
            }
        });

        ajax.open('POST', '<?= ROOT ?>/ajax', true);
        ajax.send(myform);
    }

    function handle_result(result) {
        console.log(result);
        // Process the result as needed
        alert('Data successfully sent!');
    }
</script>

    <?php $this->view('footer') ?>