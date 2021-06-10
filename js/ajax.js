$(document).ready(function () {
    $("#btn").click(
        function () {
            sendAjaxForm('result_form', 'ajax_form', 'post.php');
            return false;
        }
    );
});

function sendAjaxForm(_result_form, ajax_form, url) {
    $.ajax({
        url: url, 
        type: "POST", 
        dataType: "html",
        data: $("#" + ajax_form).serialize(), 
        success: function (response) { 
            result = jQuery.parseJSON(response);
            $('#result_form').html('Ваше Имя: ' + result.name + '<br>Ваша Фамилия: ' + result.surname + '<br>Ваш Email: ' + result.email + '<br>Ваш телефон: ' + result.phone);
            $('#response').html("Ваши данные отправленны");
        }
    });
}