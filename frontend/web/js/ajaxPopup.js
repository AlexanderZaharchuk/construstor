(function(){
    $('a[data-target="#myModal"]').on('click', function() {
        var id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: "/index.php?r=content/ajax/get-player-data",
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
    $('#w2').submit(function(e) {
        var user_name = $("input[name='UserRegForm[user_name]'").val();console.log(user_name);
        $.ajax({
            type: "POST",
            url: "/index.php?r=content/ajax/get-username",
            data: {
                user_name : user_name
            },
            success: function(res){
                if (res == true) {
                    alert('Пользователь с данным логином уже существует. Попробуйте другой логин.');
                }
            }
        });
    });
}());
