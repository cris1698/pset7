<body style="background-color:#BCE8F9">
<form action="sell.php" method="post">
    <fieldset>
        <div class="form group">
            <select class ="form-control" name="symbol">
                <option value="Symbols">Symbol </option>
                <?php
                foreach ($symbols as $symbol)
                {
                    echo '<option value="'.$symbol["symbol"].'">'.$symbol["symbol"].'</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="shares" placeholder="shares" type="text"/>
        </div>
        <div class="form-group">
            <button " class="btn btn_default" type= "submit" "> Sell </button>
        </div>
    </fieldset>
</form>>