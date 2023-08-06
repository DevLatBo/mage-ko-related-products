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
            products: ko.observableArray(['product1', 'product2', 'product3']),
        },
        initialize() {
            this._super();
            console.log("sku: " + this.sku);
        },
        getListOfProducts() {
            return this.products;
        }
    })

})
