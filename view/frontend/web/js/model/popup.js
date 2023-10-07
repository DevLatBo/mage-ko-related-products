define([
    'ko',
    'mage/translate'
], function(
    ko,
    $t
){
    return {
        message: ko.observable(""),
        configurations: ko.observable({
            type: 'popup',
            modalClass: 'rp-alert',
            responsive: true,
            innerScroll: true,
            buttons: [{
                text: $t('Close'),
                class: 'action close',
                click: function () {
                    this.closeModal();
                }
            }]
        }),
    }
})
