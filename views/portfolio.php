<body style="background-color:#BCE8F9">
    <h1><?php
    $name= CS50::query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
    $name= $name[0]["name"];
    print("Hi, ". ($name));
    ?></h1> 
<h1>You have: </h1> 
<h1 style="color:#3385ff;"><u>$<?= number_format($cash,2) ?></u></h1>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        <?php
	        foreach ($positions as $position)
            {   
                echo("<tr>");
                echo("<td>" . $position["symbol"] . "</td>");
                echo("<td>" . $position["name"] . "</td>");
                echo("<td>" . $position["shares"] . "</td>");
                echo("<td>$" . number_format($position["price"],2) . "</td>");
                echo("<td>$" . number_format($position["total"],2) . "</td>");
                echo("</tr>");
            }
        ?>
    </tbody>
</table>