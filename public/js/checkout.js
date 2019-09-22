$('.time').click(function () {
    $('input[name=personal_training_time_id]').val($(this).next().text());
    $('input[name=time]').val($(this).text());
    if ($(this).hasClass('btn-secondary')) {
        $(this).removeClass('btn-secondary').addClass('btn-primary');
    } else if ($(this).hasClass('btn-primary')) {
        $(this).removeClass('btn-primary').addClass('btn-secondary');
    }
    $('.time').not(this).addClass('btn-secondary').removeClass('btn-primary');
});

$('.category-name').text(function (_, txt) {
    return txt.slice(0, -2);
});

$('input[name=user_id]').val($('#user_id').text());

$('.duration').click(function () {
    $('input[name=duration]').val($(this).text());
    $('input[name=duration_id]').val($(this).next().text());
    $('input[name=price]').val($(this).next().next().text());
});

$("#btnPopup").click(function () {
    var postData = $("#create_form").serialize();
    var submitUrl = $("#create_form").attr("action");
    $.ajax({
        type: "POST",
        url: submitUrl,
        data: postData,
        dataType: 'JSON',
        success: function (x) {
            if (x.code === '00') {
                if (window.vnpay) {
                    vnpay.open({width: 768, height: 600, url: x.data});
                } else {
                    location.href = x.data;
                }
                return false;
            } else {
                alert(x.Message);
            }
        }
    });
    return false;
});

