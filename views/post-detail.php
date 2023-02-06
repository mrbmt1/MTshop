<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/post.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/_grid.css" media="all">
    <title>Bài viết</title>
</head>
<body>
  <div class="wrapper">
  <div class="main-content">
            <div class="wrap wrap-bg">
                <div class="section-content row">
                    <div class="col-lg-9 col-md-6 col-12">
                        <div class="content-post">
                            <img src="/uploads/<?= (!$post->avatar) ? 'slider2.jpg' : $post->avatar  ?>" alt="" srcset="">
                            <h2 class="title-header"><?= $post->title; ?></h2>
                            <p class="description"><?=$user->firstname?><?php if($user->role == 1){echo ' (admin)';}else{echo ' (quản trị viên)';}?></p>

                            <div class="content-date">
                                <div class="date">
                                    <?= $post->created_at; ?>
                                </div>
                            </div>

                            <div class="line-post"></div>
                            
                            <p class="post-des"><?= html_entity_decode($post->content); ?></p>

                        </div>

                        <div class="main-post">
                            <h2 class="title-main">
                                Bài viết liên quan
                            </h2>
                            <div class="line-post"></div>
                            <?php foreach ($data as $value) { ?>
                                <a href='/post-detail?id=<?= $value['id'] ?>'>
                                <div class="block-post row">
                                    <div class="post-img col-lg-4 col-12 col-md-6">
                                        <img src="/uploads/<?= (!$value['avatar']) ? 'slider2.jpg' : $value['avatar']  ?>" alt="" srcset="">
                                    </div>
                                    <div class="post-description col-lg-8 col-12 col-md-6">
                                        <p class="description"><?=$value['title']?></p>
                                        <p class="description"><?=$value['firstname']?><?php if($value['role'] == 1){echo ' (admin)';}else{echo ' (quản trị viên)';}?></p>
                                        <div class="line-post"></div>
                                        <div class="date-post"><?=$value['created_at']?></div>
                                    </div>
                                </div>
                                </a>
                            <?php } ?>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="right-section-content">
                            <div class="block-market-product">
                                <div style="display:flex;gap:4px">
                                    <!-- <div class="add-post">
                                        <a href="/">Home</a>
                                    </div> -->
                                    <div class="add-post">
                                        <a href="/post">Trang chủ</a>
                                    </div>
                                </div>
                                <!-- <div class="top-block-product">
                                    <h5>Danh mục tin tức</h5>
                                </div> -->
                                <!-- <div class="content-top-product">
                                    <ul class="list-post">
                                        <li class="list-items-post">
                                            <a href="#" class="items-post">Review</a>
                                        </li>
                                        <li class="list-items-post">
                                            <a href="#" class="items-post">Tin tức bốn phương</a>
                                        </li>
                                        <li class="list-items-post">
                                            <a href="#" class="items-post">Iphone hệ điều hành Android</a>
                                        </li>
                                        <li class="list-items-post">
                                            <a href="#" class="items-post">Android hệ điều hành Window</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                            <div class="block-market-product margin-block">
                                <div class="top-block-product">
                                    <h5>Tin tức nổi bật</h5>
                                </div>
                                <div class="content-top-product">
                                <?php foreach ($dataN as $value) { ?>
                                        <a href='/post-detail?id=<?= $value['id'] ?>'>
                                        <div class="block-content-product">
                                            <div class="img-product">
                                                <img src="/uploads/<?= (!$value['avatar']) ? 'slider2.jpg' : $value['avatar']  ?>" alt="" srcset="">
                                            </div>
                                            <div class="title-product">
                                                <h3><?=$value['title']?> </h3>
                                    
                                                <ul class="list-intro-product">
                                                    <li class="items-intro-product">
                                                        <?=$value['created_at']?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
    
</body>
</html>