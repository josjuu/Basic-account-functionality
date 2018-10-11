<?php
include_once '../Assets/layouts/header.html';
$response = file_get_contents('http://' . $_SERVER['HTTP_HOST'] . '/Basic-account-functionality/api/Accounts/' . $_GET["id"]);
$response = json_decode($response, true);

if ($response["status"] != "OK") {
    //TODO: Improve
    die("User not found");
}

$user = $response["record"];
?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <br>
            <div class="card">
                <div class="card-header">Account</div>
                <div class="card-body">
                    <form id="form">
                        <div class="form-group">
                            <label for="account-email">Email address</label>
                            <input type="email" class="form-control" name="account-email" placeholder="Enter email"
                                   value="<?= $user["Email"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="account-username">Username</label>
                            <input type="text" class="form-control" name="account-username" placeholder="Username"
                                   value="<?= $user["Username"] ?>" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="account-firstname">Firstname</label>
                                <input type="text" class="form-control" name="account-firstname"
                                       placeholder="Firstname" value="<?= $user["Firstname"] ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="account-infix">Infix</label>
                                <input type="text" class="form-control" name="account-infix" placeholder="Infix"
                                       value="<?= $user["Infix"] ?>">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="account-surname">Surname</label>
                                <input type="text" class="form-control" name="account-surname" placeholder="Surname"
                                       value="<?= $user["Surname"] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="account-change-password">
                                Do you want to change the password?
                            </label>
                            <input type="checkbox" id="account-change-password" name="account-change-password"
                                   placeholder="Checkbox">
                        </div>
                        <div id="password" style="display: none;">
                            <div class="form-group">
                                <label for="account-password">Password</label>
                                <input type="password" class="form-control" name="account-password"
                                       placeholder="Password" value="********">
                            </div>
                            <div class="form-group">
                                <label for="account-password-repeat">Password again</label>
                                <input type="password" class="form-control" name="account-password-repeat"
                                       placeholder="Password" value="********">
                            </div>
                        </div>
                        <div id="alert"></div>
                        <input type="hidden" name="account-id" value="<?= $user["Id"] ?>">
                        <input type="hidden" name="account-submit" value="1">
                        <button id="register-cancel" type="button" class="btn">cancel</button>
                        <button id="register-submit" type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include_once '../Assets/layouts/footer.html' ?>