<?php include_once '../Assets/layouts/header.html' ?>
    <div class="row ">
        <div class="col-md-5 mx-auto">
            <br>
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form id="form">
                        <div class="form-group">
                            <label for="login-email">Email address</label>
                            <input type="email" class="form-control" name="login-email" placeholder="Enter email"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="login-password">Password</label>
                            <input type="password" class="form-control" name="login-password" placeholder="Password"
                                   required>
                        </div>
                        <div id="alert"></div>
                        <input type="hidden" name="login-submit" value="1">
                        <button id="login-submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once '../Assets/layouts/footer.html' ?>