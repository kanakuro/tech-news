// require("./bootstrap");

$(function () {
    $(".favorite").click(function () {
        // 表示
        var fav_id = $(this).attr("id").slice(9, 10);
        $("#favorite_" + fav_id).hide();
        $("#favorite_after_" + fav_id).show();
        fav_url = $("#card_title_" + fav_id)
            .find("a")
            .attr("href");
        console.log(fav_url);
        // お気に入り登録
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "/favorite",
            type: "GET",
            data: {
                //サーバーに送信するデータ
                id: fav_id,
                url: fav_url,
            },
            success: function (data) {},
            error: function (err) {},
        });
    });

    $(".favorite_after").click(function () {
        // 表示
        var fav_id = $(this).attr("id").slice(15, 16);
        $("#favorite_" + fav_id).show();
        $("#favorite_after_" + fav_id).hide();
    });
});
