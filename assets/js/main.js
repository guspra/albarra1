var Site = {

	init: function(){
		$('html').removeClass('no-js');

		if($('#zoom').length)	
			Site.zoom();

		if($('#map').length)
		Site.mapContact();
	},

	mapContact:function(){
		var mapss = new GMaps({
		  div: '#map',
		  lat: -8.629283,
		  lng: 115.207958,
		});

		mapss.addMarker({
		  lat: -8.629283,
		  lng: 115.207958,
		  title: 'Rumah Guspra',
		  click: function(e) {
		    alert('You clicked in this marker');
		  }
		});
	},

	zoom: function(){
		$('#zoom').elevateZoom({
			zoomWindowWidth:300,
			zoomWindowHeight: 300,
			easing:true
		});
	}

};

$(function (){
	Site.init();
});