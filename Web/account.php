<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <br>
            <div class="card">
                <div class="card-header">Account</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="register-email">Email address</label>
                            <input type="email" class="form-control" id="register-rmail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="register-username">Username</label>
                            <input type="text" class="form-control" id="register-username" placeholder="Username">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="register-firstname">Firstname</label>
                                <input type="text" class="form-control" id="register-firstname" placeholder="Firstname">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="register-infix">Infix</label>
                                <input type="text" class="form-control" id="register-infix" placeholder="Infix">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="register-surname">Surname</label>
                                <input type="text" class="form-control" id="register-surname" placeholder="Surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register-password">Password</label>
                            <input type="password" class="form-control" id="register-password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="register-password-repeat">Password again</label>
                            <input type="password" class="form-control" id="register-password-repeat"
                                   placeholder="Password">
                        </div>
                        <button id="register-cancel" type="button" class="btn">cancel</button>
                        <button id="register-submit" type="button" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="../Assets/js/Account.js"></script>
</body>
</html>