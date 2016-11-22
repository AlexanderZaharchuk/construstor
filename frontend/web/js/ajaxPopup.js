(function(){
    $('a[data-target="#myModal"]').on('click', function() {
        var id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: "/content/ajax/get-player-data",
            data: {
                id : id
            },
            success: function(res){
                $('div[data-text="content"]').empty().append("<p>" + res.capture + "</p>");
                $('div[data-photo="content"]').empty();
                res.photo.forEach(function(item, i, arr) {
                    $('div[data-photo="content"]').append("<div class=\"col-lg-3\"> <img src=\"" + res.domain + item + "\" alt=\"partner\"> </div>");
                });
            }
        });
    });
}());
