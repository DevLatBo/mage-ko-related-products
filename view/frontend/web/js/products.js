define([
    'uiComponent',
    'mage/storage',
    'mage/url',
    'jquery',
    'mage/translate',
    'Magento_Ui/js/modal/modal',
    'Devlat_RelatedProducts/js/model/related',
    'Devlat_RelatedProducts/js/model/popup',
], function (
    Component,
    storage,
    urlBuilder,
    $,
    $t,
    modal,
    relatedModel,
    popupModel
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
            popupConfig: popupModel.configurations,
            popupMessage: popupModel.message,
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
            var self = this;
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
                    self.popupConfig({
                        ...self.popupConfig(),
                        title: "<strong>" + $t('Add Wishlist Error') + "</strong>",
                    });
                    var errorMessage = $t(jqXHR.status + " - " + jqXHR.statusText);
                    self.popupMessage(errorMessage);
                    var popup = modal(self.popupConfig(), '#modal-alert');
                    $('#modal-alert').modal('openModal');
                }
            });
        },
        addToCompare(productRelatedId) {
            const params = {
                'product' : productRelatedId,
            };
            const urlRequest = urlBuilder.build('related/product/addtocompare');
            var self = this;
            $.ajax({
                url: urlRequest,
                data: params,
                type: 'POST',
                success: function (response) {
                    window.scrollTo(0, 0);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    self.popupConfig({
                        ...self.popupConfig(),
                        title: "<strong>" + $t('Add to Compare Error') + "</strong>",
                    });
                    var errorMessage = $t(jqXHR.status + " - " + jqXHR.statusText);
                    self.popupMessage(errorMessage);
                    var popup = modal(self.popupConfig(), '#modal-alert');
                    $('#modal-alert').modal('openModal');
                }
            });
        },
    });
});
