jQuery(document).ready(function( $ ) {
    // Substring
    $('.card-single-paragraph').text(function(index, currentContent) {
        return currentContent.substr(0,150) + '...';
    });    
});//close all jquery