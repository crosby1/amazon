jQuery(function($) {
$(document).ready(function(){


// above jquery code here 
var phForms = $('.webform-client-form'),
    phFields = 'input[type=text], input[type=email], textarea';

function lbl2ph(){ // function containing our code
    phForms.find(phFields).each(function(){ // loop through each field in the specified form(s)

    var el = $(this), // field that is next in line
        wrapper = el.parents('.form-item'), // parent .form-item div
        lbl = wrapper.find('label'), // label contained in the wrapper
        lblText = lbl.text(); // the label's text

    // add label text to field's placeholder attribute
    el.attr("placeholder",lblText);

    // hide original label
    lbl.hide();

    });

}

});
});

jQuery(function($){
    if (Modernizr.input.placeholder) { // check for placeholder support
        lbl2ph(); // initiate function
    }
});