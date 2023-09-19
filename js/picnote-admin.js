(function( $ ) {
    'use strict';

	 $(function() {
        console.log('>>> DOM is ready....')
        const $btn = $("#add-image-btn");
        $btn.on('click', event => {
            event.preventDefault();
            console.log('>>> click button....')
        })
	 });

    })( jQuery );