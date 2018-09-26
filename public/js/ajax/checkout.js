$(function () {
    $(".confirm-order").on("click", function () {
        var UserId = $("[name=UserId]").val();
        var FirstName = $("[name=FirstName]").val();
        var LastName = $("[name=LastName]").val();
        var Telephone = $("[name=Telephone]").val();
        var Address1 = $("[name=Address1]").val();
        var Address2 = $("[name=Address2]").val();
        var Email = $("[name=Email]").val();
        var Postcode = $("[name=Postcode]").val();
        var Fax = $("[name=Fax]").val();
        var Company = $("[name=Company]").val();
        var City = $("[name=City]").val();
        var Country = $("[name=Country]").val();
        var Region = $("[name=Region]").val();
        var Comments = $("[name=Comments]").val();

        $.ajax({
            type: "POST",
            url: "/cart/checkout",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            data:{

                FirstName:FirstName,
                LastName:LastName,
                Telephone:Telephone,
                Address1:Address1,
                Address2:Address2,
                Email:Email,
                Postcode:Postcode,
                Fax:Fax,
                Company:Company,
                City:City,
                UserId:UserId,
                Comments:Comments,
                Country:Country,
                Region:Region
            },
            success: function (response) {
                window.location.href = response.redirect = "/thank-you";
            },
            error: function (xhr, textStatus, exceptionThrown) {
                alert(xhr.responseText);
            }
        });
    });
});