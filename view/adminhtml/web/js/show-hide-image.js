define(
    [
        'jquery',
        'mage/storage',
        'mage/url',
    ], function(
        $,
        storage,
        urlBuilder,
) {
    'use strict';

    return function (elementId) {
        $('#'+elementId).click(function(e) {
            console.log("this is working");
            const params = {
                'form_key': window.FORM_KEY,
            };
            var url = gpImageTagSaveUrl + '?isAjax=true';
            //var url = urlBuilder.build('placeholder/catalog/productimage') + '?isAjax=true';
            console.log(url);
            console.log(params);
            $.ajax({
                url: url,
                data: params,
                dataType: 'json',
                type: 'POST',
                success: function (response) {
                    console.log("it is working!");
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.log("error!!");
                    console.log(xhr.responseText);
                }
            });
            e.preventDefault();
        });
    }
});
