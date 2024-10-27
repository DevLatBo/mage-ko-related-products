define(
    [
        'jquery',
    ], function(
        $,
) {
    'use strict';

    //return function (elementId, req) {
    return function (config, element) {
        $("#"+element.id).click(function(e) {
            const params = {
                'form_key': window.FORM_KEY,
            };
            const url = config.url + "?isAjax=true";

            $.ajax({
                url: url,
                data: params,
                dataType: 'json',
                type: 'POST',
                success: function (response) {
                    $("#placeholder_alert").text(response.message);
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
            e.preventDefault();
        });
    }
});
