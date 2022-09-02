<?php
$json = file_get_contents('posts.json');
$posts = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a class="button is-primary" href="/new.php">New Post</a>
            <ul>
                <?php foreach($posts as $post): ?>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                            <?=$post['title']?>
                    </p>
                        <button class="card-header-icon" aria-label="more options">
                            <span class="icon">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                </header >
            <div class="card-content">
            <?=$post['body']?>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                  <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
            <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
            </div>
            </div>
  <footer class="card-footer">
    <a href="#" class="card-footer-item">Save</a>
    <a href="#" class="card-footer-item">Edit</a>
    <a href="#" class="card-footer-item">Delete</a>
  </footer>
</div>
        <?php endforeach; ?>
    </ul>    
    </div>
</body>
</html>