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
                    console.log(response);

                    //window.location.href = response.redirectUrl;
                }
            });
            //window.location.href = `wishlist/index/add?product=${this.productId}`;
        }
    })

})
