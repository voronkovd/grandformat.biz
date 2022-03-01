$(document).ready(function () {
    //$('.scroll-send-section').on('click', function (e) {
    //    e.preventDefault();
    //    var ua = window.navigator.userAgent;
    //    var msie = ua.indexOf("MSIE ");
    //    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){
    //        location.href='#send-section';
    //    }else {
    //        var destination = $('#send-section').offset().top;
    //        $('body').animate({scrollTop: destination - 100}, 1100);
    //    }
    //    return false;
    //});

    //Цели для Яндекс.Метрики и Google Analytics
    $(".count_element").on("click", (function () {
        ga("send", "event", "goal", "goal");
        yaCounterXXXXXXXX.reachGoal("goal");
        return true;
    }));

    //SVG Fallback
    if (!Modernizr.svg) {
        $("img[src*='svg']").attr("src", function () {
            return $(this).attr("src").replace(".svg", ".png");
        });
    }
    ;

    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $("#form").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function () {
            alert("Спасибо за заявку!");
            setTimeout(function () {

                $("#form").trigger("reset");
            }, 1000);
        });
        return false;
    });

    try {
        $.browserSelector();
        if ($("html").hasClass("chrome")) {
            $.smoothScroll();
        }
    } catch (err) {

    };

    $("img, a").on("dragstart", function (event) {
        event.preventDefault();
    });





    $('#select_type').on('change', function () {
        var type_id = $(this).val();
        var select_id = $('#select_source');
        if (type_id) {
            $.ajax({
                url: '/site/lists?id=' + type_id,
                complete: function (data) {
                    select_id.html(data.responseText);
                }
            });
        } else {
            select_id.html('');
        }
    });

    if (window.location.hash) {
        destination = $('#send-section').offset().top;
        $('body').animate({scrollTop: destination - 100}, 1100);
    }

    $('body').on('change', '#type_print', function () {
        var type_id = $(this).val();
        var select_id = $('#source_print');
        if (type_id) {
            $.ajax({
                url: '/site/lists?id=' + type_id,
                complete: function (data) {
                    select_id.html(data.responseText);
                }
            });
        } else {
            select_id.html('');
        }
        $('#all-summ').html('0.00');
        $('#all-summ-nds').html('0.00');
    });

    $('body').on('change', '.calc_vars', function () {

        if ($('#checkbox7').is(':checked')) {
            var price = $('#source_print').find('option:selected').attr('data-price-two');
        }else{
            var price = $('#source_print').find('option:selected').attr('data-price');
        }
        
        if ($('#checkbox6').is(':checked')) {
            var luv = $('#checkbox6').attr('data-price');
        }else{
            var luv = 0;
          }
        var w = $('#w-id');
        var h = $('#h-id');

        var default_var = 1;
        var count = $('#count-id');
        var post_print = $(".checkbox:checked").attr('data-price');
        if (!w.val()) {
            w.val(default_var.toFixed(1));
        }
        if (!h.val()) {
            h.val(default_var.toFixed(1));
        }
        if (!count.val()) {
            count.val(1.00);
        }
        console.log(price);
        if (price == undefined) {
            price = 0;
        }
        var post_sum = (parseFloat(w.val()) + parseFloat(h.val())) * 2 * count.val() * parseFloat(post_print);
        var post_luv = (parseFloat(w.val()) + parseFloat(h.val())) * 2 * count.val() * parseFloat(luv);
        var result = (w.val() * h.val() * count.val() * price) + post_sum + post_luv;
        $('#all-summ').html(result.toFixed(2));
    });
});
