<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <style>
        .book-cover .btn {
            margin-top: 10px;
        }
        .book-details li{
            list-style-type: none;
            margin:12px 0px;
        }
    </style>
<?php require ("../App/Views/common-static-sources.php") ?>
</head>
<body>
<?php require ("../App/Views/navigation.php") ?>
<div class="container">
    <div class="row">
        <div class="col-md-3 book-cover">
            <img src="/images/book-cover/php-cover.png" class="img-responsive img-thumbnail" alt="">
            <a href="/cart/add?isbn=<?=$BookDetails['isbn']?>" class="btn btn-block btn-primary">加入购物车</a>
        </div>
        <div class="col-md-9">
            <ul class="book-details">
                <li><strong>ISBN:</strong><?=$BookDetails['isbn']?></li>
                <li><strong>书名:</strong><?=$BookDetails['title']?></li>
            	<li><strong>作者:</strong><?=$BookDetails['author']?></li>
            	<li><strong>价格:</strong>$<?=number_format($BookDetails['price'], 2)?></li>
            	<li><strong>描述:</strong><?=$BookDetails['description']?></li>
            </ul>
        </div>
    </div>
<?php require ("../App/Views/footer.php") ?>
</div>
</body>
</html>