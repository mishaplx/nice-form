$("#upload_form").submit(function (e) {
    e.preventDefault();
    var formData = new FormData($(this)[0]);

    $.ajax({
        type: "POST",
        url: "post.php",
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            alert(data);
        }
    });
    return false;
})

