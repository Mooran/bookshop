<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Zhongjianyu BookShop</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-shopping-cart"></i> 购物车 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Total Items : <?= $_SESSION['items']?$_SESSION['items']:0.00 ?></a></li>
            <li><a href="#">Total Price : $<?= $_SESSION['total_price']?$_SESSION['total_price']:0.00 ?></a></li>
            <li><a href="/cart/show" class="text-center">查看购物车</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>