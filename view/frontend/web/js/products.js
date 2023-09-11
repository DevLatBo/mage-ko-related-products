define([
    'uiComponent',
    'mage/storage',
    'mage/url',
    'jquery',
    'mage/translate',
    'Devlat_RelatedProducts/js/model/related'
], function (
    Component,
    storage,
    urlBuilder,
    $,
    $t,
    relatedModel
) {
    'use strict';

    return Component.extend({
        defaults: {
            title: relatedModel.mainTitle,
            products: relatedModel.products,
            actions: relatedModel.links,
            hasRP: relatedModel.hasRelatedProducts,
            error: relatedModel.errorMessage,
            hasError: relatedModel.hasError,
        },
        initialize() {
            this._super();
            this.requestProducts();
        },
        getTitle() {
            return this.title;
        },
        requestProducts() {
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
                success: function (response) {
                    var redirectUrl = urlBuilder.build('customer/account/login');
                    if(response.hasOwnProperty('backUrl')) {
                        redirectUrl = response.backUrl;
                    }
                    window.location.href = redirectUrl;
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.status);
                    console.log(jqXHR.statusText);
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
                    window.scrollTo(0, 0);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.status);
                    console.log(jqXHR.statusText);
                }
            });
        },
    });
});
