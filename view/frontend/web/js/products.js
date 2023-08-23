define([
    'uiComponent',
    'ko',
    'mage/storage',
    'mage/url',
    'jquery',
    'Devlat_RelatedProducts/js/model/list'
], function (
    Component,
    ko,
    storage,
    urlBuilder,
    $,
    listModel
) {
    'use strict';

    return Component.extend({
        defaults: {
            products: listModel.products,
            actions: listModel.links,
        },
        initialize() {
            this._super();
            this.requestRelateds();
        },
        requestRelateds() {
            storage.get(`rest/V1/products/getRelated/${this.productId}`)
                .done(response => {
                    this.products(response);
                });
        },
        addToWishlist(productRelatedId) {
            console.log("product id", productRelatedId);
            console.log(urlBuilder.build('test_route/index/test'));
            var url = urlBuilder.build('test_route/index/test');
            const params = {
                'product': productRelatedId,
                'form_key': this.formKey,
            };
            /*var url = '/test_route/index/test';
            var param = {eventid: attribute1.value};
            $.ajax({ async: false, // required
                showLoader: true,
                url: url,
                data: param,
                type: "POST",
                dataType: 'json',
                success : function (response) {
                    console.log(response);
                }
            });*/
            storage.get('test_route/index/test').done((response) => {
                console.log(response);
            });
        }
    })

})
