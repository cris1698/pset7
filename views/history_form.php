<body style="background-color:#BCE8F9">
<table class="table table-striped">

    <thead>
        <tr>
            <th style ="color: blue;">Type</th>
            <th style ="color: blue;">Date and Time</th>
            <th style ="color: blue;">Symbol</th>
            <th style ="color: blue;">Shares</th>
            <th style ="color: blue;">Price</th>
        </tr> 
    </thead>


    <tbody>
    <?php
	    foreach ($table as $row)	
        {   
            echo("<tr>");
            echo("<td>" . $row["transaction"] . "</td>");
            echo("<td>" . date('d/m/y, g:i A',strtotime($row["datetime"])) . "</td>");
            echo("<td>" . $row["symbol"] . "</td>");
            echo("<td>" . $row["shares"] . "</td>");
            echo("<td>$" . number_format($row["price"], 2) . "</td>");
            echo("</tr>");
        }
    ?>
    </tbody>
</table>