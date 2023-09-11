define([
    'ko',
    'mage/translate',
], function(
    ko,
    $t
) {
    return {
        mainTitle: $t('Related Products'),
        products: ko.observableArray([]),
        hasRelatedProducts: ko.observable(false),
        links: {
            wishlist: {
                title: $t('Add to Wish List'),
            },
            compare: {
                title: $t('Add to Compare'),
            }
        },
        hasError: ko.observable(false),
        errorMessage: ko.observable(''),
    }
});
