( function( api ) {

	// Extends our custom "coffee-station" section.
	api.sectionConstructor['coffee-station'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );