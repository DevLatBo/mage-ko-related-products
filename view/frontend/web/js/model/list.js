define([
    'ko'
], function(
    ko
) {
    return {
        products: ko.observableArray([]),
        hasRelatedProducts: ko.observable(false),
        links: {
            wishlist: {
                title: 'Add to Wish List',
            },
            compare: {
                title: 'Add to Compare'
            }
        },
        hasError: ko.observable(false),
        errorMessage: ko.observable(''),
    }
});
