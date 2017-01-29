$("document").ready(function() {
    $( "input[name='selection[]']" ).on( "click", function() {
        $('div.alert').empty();
        var id = $(this).val();
        var checked = $(this).is(":checked") ? 1 : 0;
        $.ajax({
            method:"post",
            url: '/backend/web/index.php?r=auth/ajax/checked-status',
            dataType: 'json',
            data: {
                record: {
                    id: id,
                    checked: checked
                }
            },
            success: function (data) {console.log(checked);
                if (checked == true) {
                    $('div.alert')
                        .removeAttr('class')
                        .addClass("alert alert-success")
                        .append("Пользователь <strong>" + data + "</strong> разблокирован!");
                } else {
                    $('div.alert')
                        .removeAttr('class')
                        .addClass("alert alert-danger")
                        .append("Пользователь <strong>" + data + "</strong> заблокирован!");
                }
            }
        });
    });
});
