$(function () {
    $('#pdf-submit').click(function () {
        var t = $(this)
                , iElement = t.find('i');
        if (!iElement.hasClass('fa')) {
            iElement.addClass('fa');
        }
        iElement.removeClass('fa-arrow-right').addClass('fa-spinner fa-spin');
        $('.pdf-form-element').prop('disabled', true);
        $('#pdf-downloader').addClass('hidden');
        $('#pdf-loader').removeClass('hidden');
        $.post("example.php", function () {
            alert("success");
        })
            .done(function () {
                alert("second success");
            })
            .fail(function () {
                alert("error");
            })
            .always(function () {
                $('.pdf-form-element').prop('disabled', false);
                $('#pdf-loader').addClass('hidden');
                iElement.removeClass('fa-spinner fa-spin').addClass('fa-arrow-right');
                $('#pdf-downloader').removeClass('hidden');
            });
    });
    $('.button-checkbox').click(function () {
        var t = $(this)
                , iElement = t.find('i')
                , checkboxElement = (t.data('checkbox') ? t.data('checkbox') : false)
                , faChecked = (t.data('fa-checkbox') ? t.data('fa-checkbox') : 'fa-check-circle-o')
                , faUnchecked = (t.data('fa-checkbox') ? t.data('fa-checkbox') : 'fa-circle-o');
        if (!iElement.hasClass('fa')) {
            iElement.addClass('fa');
        }
        if (checkboxElement && $(checkboxElement)[0]) {
            if ($(checkboxElement).is(":checked")) {
                $(checkboxElement).prop('checked', false);
                iElement.removeClass(faChecked).addClass(faUnchecked);
            } else {
                $(checkboxElement).prop('checked', true);
                iElement.removeClass(faUnchecked).addClass(faChecked);
            }
        }
    });
});

