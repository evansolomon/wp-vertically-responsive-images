( function($) {
	var verticalResponsiveImages = {
		resize: function() {
			$( 'img:not(.do-not-resize)' ).css( {
				// Use 80% of the window height to give it some breathing room
				'max-height': $( window ).height() * 0.8
			} );
		}
	};

	// Resize on document ready
	$( verticalResponsiveImages.resize );

	// Resize on window resize, but only every 200 ms
	$( window ).resize( _.debounce( verticalResponsiveImages.resize, 200 ) );

	// Resize on Jetpack's infinite scroll event
	$( 'body' ).on( 'post-load', verticalResponsiveImages.resize );
}( jQuery ));
