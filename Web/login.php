<?php include_once '../Assets/layouts/header.php'?>
    <div class="row ">
        <div class="col-md-5 mx-auto">
            <br>
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="login-email">Email address</label>
                            <input type="email" class="form-control" id="login-email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="login-password">Password</label>
                            <input type="password" class="form-control" id="login-password" placeholder="Password">
                        </div>
                        <button id="login-submit" type="button" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once '../Assets/layouts/footer.php'?>