define([
    'uiComponent'
], function (
    Component
) {
    return Component.extend({
       initialize() {
           this._super();
           console.log("related products it is working!");
       }
    });
})
