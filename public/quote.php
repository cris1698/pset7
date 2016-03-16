<?php
     // configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "quote"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["symbol"]))
        {
            apologize("proporciona un simbolo");
        }
        
        $stock = lookup($_POST["symbol"]);
        
        if ($stock == 0)
        {
            apologize("the symbol do not exist");
        }
        else
        {
             render("quote.php", ["title" => "quote", "stock" => $stock]);
        }
    }
?>