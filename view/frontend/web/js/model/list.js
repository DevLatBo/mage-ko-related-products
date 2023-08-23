define([
    'ko'
], function(
    ko
) {
    return {
        products: ko.observableArray([]),
        links: {
            wishlist: {
                title: 'Add to Wish List',
            },
            compare: {
                title: 'Add to Compare'
            }
        }
    }
});
