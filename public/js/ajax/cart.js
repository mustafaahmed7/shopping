//Cart Add
$(function () {
    $(".add-to-cart").on("click", function () {
        var id = $(this).data("id");
        // alert(id);
        $.ajax({
            type: "GET",
            url: "/cart/add/" + id,
            success: function () {
                console.log("cart added");
            }
        });
    });
});

//Car Remove
$(function () {
    $(".remove-cart").on("click", function () {
        var id = $(this).data("id");
        var item = $(this);
        $.ajax({
            type: "GET",
            url: "/cart/remove/" + id,
            success: function () {
                console.log("cart removed");
                item.parent().parent().remove();
            }
        });
    });
});
//Update Cart
$(function () {
    $(".update-cart").on("click", function () {
        var id = $(this).data("id");
        var select = $(this).parent().parent().find('[name=quantity]');
        var quantity = select.val();
        $.ajax({
            type: "GET",
             url:"/cart/update/"+id+"/"+quantity,
            success: function (response) {
                window.location.href = response.redirect = "";
                console.log("cart updated");
            },
            error:function (xhr, textStatus, exceptionThrown) {
                alert(xhr.responseText);
            }

        });
    });
});

$(function () {
    $(".add-to-cart-with-qty").on("click", function () {
        var id = $(this).data("id");
        var quantity = $("[name=quantity]").val();
        $.ajax({
            type: "GET",
             url:"/cart/qty/"+id+"/"+quantity,
            success: function () {
                console.log("cart added");
            }
        });
    });
});


//Check out Button
$(function () {
    $(".check-out-cart").on("click", function () {
        var id = null;
        var FirstName = $("[name=FirstName]").val();
        var LastName = $("[name=LastName]").val();
        var Phone = $("[name=Phone]").val();
        var Adress = $("[name=Adress]").val();
        var Email = $("[name=Email]").val();
        var PostalCode = $("[name=PostalCode]").val();
        var url = "?&FirstName=" + FirstName + "&LastName=" + LastName +
            "&Phone=" + Phone + "&Adress=" + Adress + "&Email=" + Email + "&PostalCode=" + PostalCode;
        $.ajax({
            type: "POST",
            url: "/checkout/CheckoutFinish/" + url,
            success: function (response) {
                window.location.href = response.redirect = "";

            }
        });
    });
});



