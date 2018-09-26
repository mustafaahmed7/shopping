//Product Update Image Remove
$(function () {
    $(".remove-image").on("click", function () {
        var id = $(this).data("id");
        var item = $(this);
        $.ajax({
            type: "GET",
            url: "/admin/product/update/image/" + id,
            success: function () {
                console.log("Image Removed");
                item.parent().remove();
            }
        });
    });
});