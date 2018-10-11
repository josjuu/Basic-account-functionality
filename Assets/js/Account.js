var request;

$("#form").submit(function (event) {
    event.preventDefault();
    if (request) {
        request.abort();
    }

    var $form = $(this);
    var $inputs = $form.find("input, button");
    var serializedData = $form.serialize();
    $inputs.prop("disabled", true);

    request = $.ajax({
        url: "../Api/Users/index.php",
        type: "post",
        data: serializedData
    }).done(function (response) {
        if (response) {
            $("#alert").empty();
            response = $.parseJSON(response);
            var type = response["status"] === "FAILED" ? "Warning" : "Danger";

            $("#alert").append("<div class=\"alert alert-" + type + "\"><b>" + type + ":</b> " + response["message"] + "</div>")
        } else {
            window.location.replace("index.php");
            //TODO: Redirect
        }
    }).always(function () {
        $inputs.prop("disabled", false);
    });

});

$("#account-change-password").change(function () {
    if ($("#account-change-password").is(":checked")) {
        $("#password").show();
    } else {
        $("#password").hide();
    }
});