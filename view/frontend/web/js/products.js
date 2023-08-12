define([
    'uiComponent',
    'ko',
    'mage/storage'
], function (
    Component,
    ko,
    storage
) {
    'use strict';

    return Component.extend({
        defaults: {
            products: ko.observableArray([]),
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
        getRelateds() {
            return this.products;
        }
    })

})
