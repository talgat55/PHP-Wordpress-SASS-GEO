// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";

    //
    //  navigation dropdown
    //
    jQuery('#menu-main .menu-item-has-children > a').click(function(e) {
        e.preventDefault();
        var $this = jQuery(this);
        $this.parent().toggleClass('active');

        $this.next().stop().slideToggle();

    }).next().stop().hide();

    //
    // Add arrow down for li have sub menu
    //
    jQuery('#menu-main .menu-item-has-children ').append('<i class="fa  fa-angle-down title-icon"></i>');

    //
    //  Mobile toggle
    //
    var mobileSelector = jQuery('#mobile-toggle');
    var headerSelector = jQuery('header');

    mobileSelector.click(function(e) {
        e.preventDefault();

        mobileSelector.toggleClass('is-active');
        headerSelector.toggleClass('is-active');

    });

    //
    //  Modal toggle
    //
    var modalClickSelector = jQuery('.link.link-call, .overlay-layer , .custom-modal i');
    var modalSelector = jQuery('.custom-modal, .overlay-layer');

    modalClickSelector.click(function(e) {
        e.preventDefault();

        modalSelector.toggleClass('is-active');

    });




// end redy function
});


