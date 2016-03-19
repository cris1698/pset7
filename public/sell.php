<?php
// conf
    require("../includes/config.php"); 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $symbols = CS50::query("SELECT symbol FROM portafolios WHERE user_id = ?", $_SESSION["id"]);
        render("sell_form.php", ["title" => "Sell", "symbols" => $symbols]);
         
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $stock = lookup($_POST["symbol"]);
        $shares = CS50::query("SELECT shares FROM portafolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        $lol = $_POST["shares"];
        
        if ($_POST["symbol"]=='Symbol'|| empty($_POST["shares"]))
        {
            apologize("Please enter the stock symbol or shares.");
        }
        else if ($_POST["shares"] < 0)
        {
            apologize("Enter a positive amount");
        }
        else if ($_POST["shares"] > $shares)
        {
            apologize("Not enough shares to sell");
        }
        
        if ($_POST["shares"] < $shares[0]["shares"])
        {
            CS50::query("UPDATE portafolios SET shares = (shares - ".$lol.") WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $stock["symbol"]);
        }
        else if ($_POST["shares"] == $shares[0]["shares"])
        {
            $rows = CS50::query("DELETE FROM portafolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $stock["symbol"]);
        }
        $value = $stock["price"] * $lol;
        CS50::query("UPDATE users SET cash = (cash + ".$value.") WHERE id = ?", $_SESSION["id"]);
        $type = 'Sell';
        
        CS50::query("INSERT INTO history (user_id, transaction, symbol, shares, price) VALUES (?, ?, ?, ?, ?)", $_SESSION["id"], $type, $_POST["symbol"], $lol, $stock["price"]);
        redirect("/");    
    }    
?>