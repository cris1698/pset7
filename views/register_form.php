<body style="background-color:#BCE8F9">
<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="name" placeholder="name" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="lastname" placeholder="lastname" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="confirmation" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="register" style ="color: #2BCB8B">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                register 
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">login</a> for an account
</div>
