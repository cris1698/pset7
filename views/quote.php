<body style="background-color:#BCE8F9">
<h1><?= $stock["name"] ?></h1>
<p style ="color: #CE9B11"> Price:$ <?= $stock["price"]?></p>
<div>
<?php $stock = lookup($_POST["symbol"]); ?>
<a class="btn btn-default" href="buy.php?symbol=<?= $stock["symbol"] ?>" role="button" style ="color: #2BCB8B">
    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Buy</a>
</div>
