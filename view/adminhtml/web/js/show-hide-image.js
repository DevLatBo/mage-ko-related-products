define(['jquery'], function($) {
    'use strict';

    return function (elementId, message) {
        $('#'+elementId).click(function(e) {
           console.log("this is an example");
           e.preventDefault();
        });
    }
});
