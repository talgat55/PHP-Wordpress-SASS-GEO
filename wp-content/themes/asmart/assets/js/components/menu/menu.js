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
// end redy function
});