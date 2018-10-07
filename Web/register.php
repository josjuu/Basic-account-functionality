<?php include_once '../Assets/layouts/header.php' ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <br>
            <div class="card">
                <div class="card-header">Register</div>
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
                        <button id="register-submit" type="button" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once '../Assets/layouts/header.php' ?>