define([
    'uiComponent',
    'mage/translate'
], function (Component, $t) {
   'use strict';

   return Component.extend({
       defaults: {
           title: $t('Related Products'),
       },

       initialize() {
           this._super();
       },

       getTitle() {
           return this.title;
       }
   });
});
