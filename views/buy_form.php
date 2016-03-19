<body style="background-color:#BCE8F9">
<form action="buy.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" value="<?= $symbol_name ?>"  name="symbol" placeholder="symbol" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="shares" placeholder="shares" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit"  style ="color: #2BCB8B">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                submit
            </button>
        </div>
    </fieldset>
</form>