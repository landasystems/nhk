jQuery(function(b){b(document).ready(function(){b(function(){var h=b("#ib-main-wrapper"),n=!1,f=-1,c=!1,g=h.find("div.ib-main > a"),k=g.not(".ib-content"),p=k.length,l=function(){var a=b("#ib-top").outerHeight(!0)+b("#header").outerHeight(!0)+parseFloat(g.css("margin-top"));h.css("height",b(window).height()-a)},r=function(a,e){b("<img/>").load(function(){e&&e.call()}).attr("src",a)},t=function(a){if(c)return!1;c=!0;var e=b("#ib-img-preview"),i=e.find("div.ib-loading-large");i.show();"next"===a?f=== p-1?f=0:++f:"prev"===a&&(0===f?f=p-1:--f);var d=k.eq(f),j=d.children("img").data("largesrc"),g=d.children("span").text();r(j,function(){i.hide();var b=q(j);e.children("img.ib-preview-img").attr("src",j).css({width:b.width,height:b.height,left:b.left,top:b.top}).end().find("span.ib-preview-descr").text(g);h.scrollTop(d.offset().top).scrollLeft(d.offset().left);c=!1})},q=function(a){var e=new Image;e.src=a;var a=b(window).width(),c=b(window).height(),d=e.height/e.width;c/a>d?(e=c,d=c/d):(e=a*d,d=a); return{width:d,height:e,left:(a-d)/2,top:(c-e)/2}};k.addClass("ib-image");l();h.kinetic({moved:function(){n=!0},stopped:function(){n=!1}});g.bind("click.ibTemplate",function(){if(!n){var a=b(this);if(!c)if(a.hasClass("ib-content")){c=!0;f=a.index(".ib-content");var e=function(){c=!1},i=0<b("#ib-content-preview").length,d=a.children("div.ib-teaser").html(),j=a.children("div.ib-content-full").html(),l={teaser:d,content:j};i||b("#contentTmpl").tmpl(l).insertAfter(h);b("#ib-content-preview").css({width:a.width(), height:a.height(),left:a.offset().left,top:a.offset().top}).show().animate({width:b(window).width(),left:0},500,"easeOutExpo",function(){b(this).animate({height:b(window).height(),top:0},400,function(){var a=b(this),c=a.find("div.ib-teaser"),f=a.find("div.ib-content-full"),a=a.find("span.ib-close");i&&(c.html(d),f.html(j));c.show();f.show();a.show();e&&e.call()})});i||b("#ib-content-preview").find("span.ib-close").bind("click.ibTemplate",function(){if(!c){c=!0;var a=g.not(".ib-image").eq(f);b("#ib-content-preview").find("div.ib-teaser, div.ib-content-full, span.ib-close").hide().end().animate({height:a.height(), top:a.offset().top},500,"easeOutExpo",function(){b(this).animate({width:a.width(),left:a.offset().left},400,function(){b(this).fadeOut(function(){c=!1})})})}})}else{c=!0;f=a.index(".ib-image");var s=function(){c=!1},m=a.children("img").data("largesrc"),u=a.children("span").text(),v={src:m,description:u};a.addClass("ib-loading");r(m,function(){a.removeClass("ib-loading");var e=0<b("#ib-img-preview").length;e?b("#ib-img-preview").children("img.ib-preview-img").attr("src",m).end().find("span.ib-preview-descr").text(u): b("#previewTmpl").tmpl(v).insertAfter(h);var d=q(m);a.removeClass("ib-img-loading");b("#ib-img-preview").css({width:a.width(),height:a.height(),left:a.offset().left,top:a.offset().top}).children("img.ib-preview-img").hide().css({width:d.width,height:d.height,left:d.left,top:d.top}).fadeIn(400).end().show().animate({width:b(window).width(),left:0},500,"easeOutExpo",function(){b(this).animate({height:b(window).height(),top:0},400,function(){var a=b(this);a.find("span.ib-preview-descr, span.ib-close").show(); 1<p&&a.find("div.ib-nav").show();s&&s.call()})});if(!e){var g=b("#ib-img-preview");g.find("span.ib-nav-prev").bind("click.ibTemplate",function(){t("prev")}).end().find("span.ib-nav-next").bind("click.ibTemplate",function(){t("next")}).end().find("span.ib-close").bind("click.ibTemplate",function(){if(!c){c=!0;var a=k.eq(f);b("#ib-img-preview").find("span.ib-preview-descr, div.ib-nav, span.ib-close").hide().end().animate({height:a.height(),top:a.offset().top},500,"easeOutExpo",function(){b(this).animate({width:a.width(), left:a.offset().left},400,function(){b(this).fadeOut(function(){c=!1})})})}});b(window).bind("resize.ibTemplate",function(){var a=g.children("img.ib-preview-img"),b=q(a.attr("src"));a.css({width:b.width,height:b.height,left:b.left,top:b.top})})}})}}return!1});b(window).bind("resize.ibTemplate",function(){l();b("#ib-img-preview, #ib-content-preview").css({width:b(window).width(),height:b(window).height()})})})})});