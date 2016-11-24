<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .book-item{
            border-bottom: 1px solid #ccc;
            padding:10px 0px;
        } 
    </style>
<?php require ("../App/Views/common-static-sources.php") ?>
</head>
<body>
<?php require ("../App/Views/navigation.php") ?>
    <div class="container">
        <ul>
<?php if (empty($books)){?>
                <p>No books currently available</p>
<?php }else{
        foreach ($books as $item){?>
                <div class="book-item row">
                    <div class="col-sm-1">
                        <img src="/images/book-cover/php-cover.png" class="img-responsive img-thumbnail" alt="">
                    </div>
                    <div class="col-sm-11">
                        <a href="/category/details?isbn=<?=$item['isbn']?>">
                            <?=$item['title']?> by <?=$item['author']?>
                        </a>
                    </div>
                </div>
<?php }}?>
        </ul>
        <?php require ("../App/Views/footer.php") ?>
    </div>
</body>
</html>