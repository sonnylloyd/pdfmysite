$(function () {
    $('#pdf-submit').click(function (event) {
        event.preventDefault();
        var t = $(this)
                , data = {}
        , iElement = t.find('i');
        if (!iElement.hasClass('fa')) {
            iElement.addClass('fa');
        }
        iElement.removeClass('fa-arrow-right').addClass('fa-spinner fa-spin');
        $('.pdf-form-element').prop('disabled', true);
        $('#pdf-downloader').addClass('hidden');
        $('#pdf-loader').removeClass('hidden');
        data['archive[url]'] = $('#pdf-input').val();
        data['archive[_token]'] = $('#archive__token').val();
        data['archive[archive]'] = $('#archivecheckbox').prop('checked');
        $.post(Routing.generate('pdf_my_site_front_generate'), data)
                .done(function (data) {
                    if ($('#pdf-introduction')[0]) {
                        $('#pdf-introduction').addClass('hidden');
                    }
                    $('#pdf-downloader').html(data);
                })
                .fail(function (data) {
                    //alert("error");
                    $('#pdf-downloader').html(data);
                })
                .always(function () {
                    $('.pdf-form-element').prop('disabled', false);
                    $('#pdf-loader').addClass('hidden');
                    iElement.removeClass('fa-spinner fa-spin').addClass('fa-arrow-right');
                    $('#pdf-downloader').removeClass('hidden');
                });
    });
    $('.button-checkbox').click(function (event) {
        event.preventDefault();
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
    $(document).on('click', '.pdf-dropbox-save', function (event) {
        event.preventDefault();
        var t = $(this);
        var options = {
            files: [
                {'url': t.attr('href'), 'filename': t.data('filename')}
            ],
            success: function () {
                $.notify("Saved To DropBox","succes",{position:"bottom center"});
            },
            error: function (errorMessage) {
                $.notify(errorMessage,"error",{position:"bottom center"});
            }
        };
        console.log(options);
        Dropbox.save(options);
    });
});

