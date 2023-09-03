define([
    'uiComponent',
    'mage/storage',
    'mage/url',
    'jquery',
    'Devlat_RelatedProducts/js/model/list'
], function (
    Component,
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
            const params = {
                'product': productRelatedId,
                'form_key': $.cookie('form_key'),
            };
            var url = urlBuilder.build('wishlist/index/add');
            $.ajax({
                url: url,
                data: params,
                type: "POST",
                success : function (response) {
                    var redirectUrl = urlBuilder.build('customer/account/login');
                    if(response.hasOwnProperty('backUrl')) {
                        redirectUrl = response.backUrl;
                    }
                    window.location.href = redirectUrl;
                }
            });
        },
        addToCompare(productRelatedId) {
            const params = {
                'product' : productRelatedId,
            };
            const urlRequest = urlBuilder.build('related/product/addtocompare');
            $.ajax({
                url: urlRequest,
                data: params,
                type: 'POST',
                success: function (response) {
                    console.log(response);
                    window.scrollTo(0, 0);
                }
            });
        }
    });
});
