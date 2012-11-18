( ( $ ) ->
	verticalResponsiveImages =
		resize: ->
			$( 'img:not(.do-not-resize)' ).css
				'max-height': $( window ).height() * 0.8

	# Bind to document ready
	$ verticalResponsiveImages.resize

	# Fire on window resize
	$( window ).resize( _.debounce verticalResponsiveImages.resize, 200 )

	# Fire on Jetpack infinite scroll
	$( 'body' ).on 'post-load', verticalResponsiveImages.resize
)( jQuery )
