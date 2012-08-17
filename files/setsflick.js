(function($) {	
	$.fn.setsFlick = function(options) {
		var defaults = {
			apiKey:'2050e78fc761eb0cebad18dd25fedcfd',
			userId:'65659906@N00',
			thumbSize:'s'
			},
		settings = $.extend({},defaults,options);
	
		this.each(function(){
			var $this=$(this);
			loading = $('<span class = "loading">Loading...</span>')
			$this.append(loading);
			var $error = $("<span class = 'error'></span>")
			if(settings.thumbSize!='s'&&settings.thumbSize!='q') {
				$error.html( 'Error:Incorrect thumb size' )
				$this.append($error);
				return false
			}
			var request = $.getJSON("http://www.flickr.com/services/rest/?method=flickr.photosets.getList&api_key="+settings.apiKey+"&user_id="+settings.userId+"&format=json&jsoncallback=?", function (data) {
    			var list = $("<ul style='display:none' class = 'sets nolist "+settings.thumbSize+"'></ul>");
    			$.each(data.photosets.photoset, function (i, set) {
        			var li = $("<li/>")
        			var img = $('<img class = "thumb " src = "'+'http://farm'+set.farm+'.staticflickr.com/'+set.server+'/'+set.primary+'_'+set.secret+'_'+settings.thumbSize+'.jpg'+'" /></span>')
        			var title = $("<span/>").attr('class', 'info')
        				.append('<span>'+set.title._content+'</span>')
        				.append(" <span class = 'total'>(" + set.photos + ")</span>")
 					var link = $("<a/>").attr("title", set.description._content)
            			.attr("href", "http://www.flickr.com/photos/sigmundfridge/sets/" + set.id)
            			.append(img).append(title);   
       	 			li = li.append(link);
        			$(list).append(li);
   				});
    			$this.append(list)
    			$(window).bind('load',(function(){
    								$(list).fadeIn('slow')
    								loading.fadeOut('fast');
    								}
    								));
 			});
   			request.fail(function(jqXHR, textStatus) {
 				$error.html( 'Request failed: ' + textStatus)
				$this.append($error);
				return false
			});
		});
	return this;
	}
})(jQuery);
