$(window).on('load', function() {
    setTimeout(function () {
        $(".loader_inner").fadeOut();
        $(".loader").fadeOut("slow");
    }, 1000);
});

$(document).ready(function () {

    function send(a) {
        var form = $(a).parents('form')[0];

        var error = false;
        $(form).find('input[required="required"]').each(function () { // прoбeжим пo кaждoму пoлю в фoрмe
            $(this).removeClass('false');
            if ($(this).val() == '') { // eсли нaхoдим пустoe
                $(this).addClass('false');
                error = true; // oшибкa
            }
        });

        var ser = fd = new FormData(form),
            url = $(form).attr("action");

        if (!error) {
            // var ser = form.serialize();
            $.ajax({
                method: 'POST',
                url: url,
                data: ser,
                contentType: false,
                processData: false,
                success: function (data) {
                    $(form).find(".result").empty().html(data);
                    $(form).find(".result").html(data);
                }
            })
        } else {
            $(form).find('.result').html(' <div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Заполните все поля!</strong></div>');
        }


    };

    $('#submitStudent').click(function (e) {
        e.preventDefault();
        //alert('asd');
        send(this);
    });
    $('#submitFood').click(function (e) {
        e.preventDefault();
        //alert('asd');
        send(this);
    });
    $('#quantityFood').click(function (e) {
        e.preventDefault();
        //alert('asd');
        send(this);
    });

});
