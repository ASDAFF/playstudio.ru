/* Получение фото из Инстаграм */

(function ($) {
	$.fn.instagramGet = function (options) {

		// По умолчанию
		var defaults = {
			"user_id": null,
			"access_token": null,
			"count": 10
		};

		var o = $.extend(defaults, options);

		return this.each(function () {

			// Переменные
			var elem = $(this),
				url = "https://api.instagram.com/v1/users/" + o.user_id + "/media/recent?access_token=" + o.access_token + "&count=" + o.count + "&callback=?";
				//url = "https://api.instagram.com/v1/tags/Vlcenter?access_token=" + o.access_token + "&count=" + o.count + "&callback=?";
			
			// Получение изображений
			$.getJSON(url, function(data){
				$.each(data.data, function (i, val) {
					
					console.log(val);
					
					var li = $("<li/>").appendTo(elem),
						a = $("<a/>", {/*"href": val.link,*/ "href": val.images.standard_resolution.url, "data-video": (!!val.videos?val.videos.low_bandwidth.url:''), "data-link":val.link,"style": "background: url("+val.images.standard_resolution.url+") center center no-repeat;","target": "_blank"}).appendTo(li).addClass('fancybox').attr('rel','gallery1');//,
						//img = $("<img/>", {"src": val.images.low_resolution.url}).appendTo(a);

					if (val.caption){
						a.attr("title", val.caption.text);
					}
				});
			});

			if(o.user_id == null || o.access_token == null){
				elem.append("<li>Мы забыли идентификатор и токен пользователя Инстаграм.</li>");
			}

		});
	};
})(jQuery);
