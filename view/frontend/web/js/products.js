define([
    'uiComponent',
    'mage/storage',
    'mage/url',
    'jquery',
    'mage/translate',
    'Devlat_RelatedProducts/js/model/list'
], function (
    Component,
    storage,
    urlBuilder,
    $,
    $t,
    listModel
) {
    'use strict';

    return Component.extend({
        defaults: {
            title: $t('Related Products'),
            products: listModel.products,
            actions: listModel.links,
            hasRP: listModel.hasRelatedProducts,
            error: listModel.errorMessage,
            hasError: listModel.hasError,
        },
        initialize() {
            this._super();
            this.requestRelateds();
        },
        getTitle() {
            return this.title;
        },
        requestRelateds() {
            storage.get(`rest/V1/products/getRelated/${this.productId}`)
                .done((response) => {
                    if(response.length) {
                        this.products(response);
                        this.hasRP(true);
                    }
                })
                .fail((response) => {
                    var errorResponse = JSON.parse(response.responseText);
                    var message = "Related Products - ";
                    if (errorResponse && errorResponse.message) {
                        message += errorResponse.message;
                    } else {
                        message += 'Error in request!';
                    }
                    this.error($t(message));
                    this.hasError(true)
                    this.hasRP(false);
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
