

$(function () {
    $(".send-mail").on("click", function () {
        //var Mail = CKEDITOR.instances.editor.getData();
        var Mail = $("[name=Mail]").val();
        var To = $("[name=To]").val();
        var Subject = $("[name=Subject]").val();
        var From = $("[name=From]").val();

        $.ajax({
            type: "POST",
            url: "/admin/mail",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            data:{
                Mail:Mail,
                To:To,
                Subject:Subject,
                From:From
            },
            success: function (response) {
               // window.location.href = response.redirect = "/admin/mail";
                console.log(response);
            },
            error: function (xhr, textStatus, exceptionThrown) {
                alert(xhr.responseText);
            }
        });
    });
});