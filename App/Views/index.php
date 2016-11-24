<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VIEW</title>
<?php require ("../App/Views/common-static-sources.php") ?>
</head>
<body>
 <?php require ("../App/Views/navigation.php") ?>
    <div class="container">
       <ul class="list-group">
<?php if (empty($categories)){?>
            <p>No categories currently available</p>
<?php }else{
    foreach ($categories as $item){?>
            <li class="list-group-item">
                <a  href="/category/show?catid=<?=$item['catid']?>">
                    <?=$item['catname']?>
                </a>
            </li>
<?php } }?>
        </ul>
    </div>
<?php require ("../App/Views/footer.php") ?>
</body>
</html>