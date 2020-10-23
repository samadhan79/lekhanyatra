
jQuery(document).ready(function($){

if (jQuery().quicksand) {

 	// Clone applications to get a second collection
	var $data = $(".portfolio").clone();
	
	//NOTE: Only filter on the main portfolio page, not on the subcategory pages
	$('.filter li').click(function(e) {
		
		$(".filter li").removeClass("active");	
		// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
		var filterClass=$(this).attr('class').split(' ').slice(-1)[0];
		
		if (filterClass == 'all') {
			var $filteredData = $data.find('.item-thumbs');
		} else {
			var $filteredData = $data.find('.item-thumbs[data-type*=' + filterClass + ']');
		}
		$(".portfolio").quicksand($filteredData, {
			duration: 600,
			adjustHeight: 'auto'
		}, function () {
		
			// Portfolio fancybox
		$(".fancybox").fancybox({				
				padding : 0,
				beforeShow: function () {
					/*this.title = $(this.element).attr('title');
					this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';*/
					
					var links = '';
					var site_link = $(this.element).attr('site_link');
					if(site_link)
						links += '<a href=' + $(this.element).attr('site_link') + ' target="_blank"><img src="images/app/lins_icon.png" style="width: 40px; margin-left: 5px;" title="Site link" align="right"/></a>';
					//console.log($(this.element).attr('site_link'));
					var play_store_link = $(this.element).attr('play_store_link');
					if(play_store_link)
						links += '<a href=' + $(this.element).attr('play_store_link') + ' target="_blank"><img src="images/app/play_store.png" style="width: 40px; margin-left: 5px;" title="Play store link" align="right"/></a>';
					
					var app_store_link = $(this.element).attr('app_store_link');
					if(app_store_link)
						links += '<a href=' + $(this.element).attr('app_store_link') + ' target="_blank"><img src="images/app/AppStore_icon.png" style="width: 40px; margin-left: 5px;" title="App store link" align="right"/></a>';
					
					this.title = $(this.element).attr('title');
					this.title = '<h4>' + this.title + '</h4>' + links + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
				},
				helpers : {
					title : { type: 'inside' },
				}
			});


		});	
		$(this).addClass("active"); 			
		return false;
	});
	
}//if quicksand

});