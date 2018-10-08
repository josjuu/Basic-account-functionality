var request;

$("#register").submit(function(event){
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
    }).done(function (response){
        console.log(response);
    }).always(function () {
        $inputs.prop("disabled", false);
    });

});
