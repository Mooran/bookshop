<!DOCTYPE html>
<html>
    <head>
        <title>Your shopping cart</title>
        <?php require ("../App/Views/common-static-sources.php") ?>
    </head>
    <body>

<?php require ("../App/Views/navigation.php") ?>
    <div class="container">
        <h2>我的购物车</h2>
        <table class="table" >
            <thead>
                <tr>
                   <th>书名</th>
                   <th>单价</th>
                   <th>数量</th>
                   <th>合计</th>
                </tr>
            </thead>
            <tbody>
<?php foreach($CartDetails as $item){?>
                <tr>
                    <td>
                        <a href="/category/details?isbn=<?= $item['isbn']?>"><?= $item['title']?></a>by zjy
                    </td>
                    <td>$<?= $item['price']?></td>
                    <td>
                        <input type="text" name="1" value="<?= $item['quantity']?>" size="3">
                    </td>
                    <td>$<?= $item['total'] ?></td>
                </tr>
<?php } ?>
                <tr>
                    <th colspan="2"></td>
                    <th><?= $_SESSION['items']?></th>
                    <th>$<?= $_SESSION['total_price']?></th>
                </tr>
            </tbody>
        </table>
    <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn btn-block btn-lg btn-success" >前往支付</a>
        </div>
    </div>
<?php require ("../App/Views/footer.php") ?>
    </div>
    </body>
</html>
