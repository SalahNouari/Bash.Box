jQuery(document).ready(function(e){function n(e){var t=document.createElement("div"),n=new RegExp("(khtml|moz|ms|webkit|)"+e,"i");for(s in t.style)if(s.match(n))return!0;return!1}function r(){window.getComputedStyle||(window.getComputedStyle=function(e,t){return this.el=e,this.getPropertyValue=function(t){var n=/(\-([a-z]){1})/g;return t=="float"&&(t="styleFloat"),n.test(t)&&(t=t.replace(n,function(){return arguments[2].toUpperCase()})),e.currentStyle[t]?e.currentStyle[t]:null},this});var e=window.getComputedStyle(document.body,":after").getPropertyValue("content");if(e)return e.replace(/['"]/g,"")}function a(e){u.push(e);if(!i){var t=document.createElement("script");t.src="https://www.youtube.com/iframe_api";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n),window.onYouTubeIframeAPIReady=function(){o=!0,f()},i=!0;return}o&&f()}function f(){for(var e=0;e<u.length;e++)var t=new YT.Player(u[e],{events:{onReady:l}});u=[]}function l(e){e.target.mute();var t,n;setInterval(function(){t=e.target.getCurrentTime(),n=e.target.getDuration(),t>n-.5&&(e.target.seekTo(0),e.target.playVideo())},200)}function h(e){c||(window.addEventListener?window.addEventListener("message",p,!1):window.attachEvent("onmessage",p,!1),c=!0)}function p(t){if(!t.origin.match(/vimeo\./))return;var n=JSON.parse(t.data);if(n.event=="ready"){var r=e("#"+n.player_id),i=r.attr("src").split("?"),n={method:"setVolume",value:0};r[0].contentWindow.postMessage(n,i)}}function m(){var t=e(window).width();if(v&&d===t)return;v=!0,d=t;var n=r();n=n?n:"desktop",e("[data-bg-type-"+n+"]").each(function(){var t=e(this).attr("data-bg-type-"+n);e(this).find("> .upfront-output-bg-overlay").not(".upfront-output-bg-"+n).each(function(){e(this).is(".upfront-output-bg-video")&&e(this).children().not("script.video-embed-code").remove()});if(t=="image"||t=="featured"){var r=e(this).attr("data-src"),i=e(this).attr("data-src-"+n),s=e(this).attr("data-bg-image-ratio-"+n);i?e(this).attr("data-src",i):e(this).removeAttr("data-src"),s?e(this).attr("data-bg-image-ratio",s):e(this).removeAttr("data-bg-image-ratio").css("background-position","").css("background-size",""),i&&r!=i&&e(this).hasClass("upfront-image-lazy")&&e(this).removeClass("upfront-image-lazy-loaded")}else t=="color"?e(this).css("background-image","none"):(e(this).css("background-image","none"),e(this).find("> .upfront-output-bg-"+n).each(function(){if(e(this).is(".upfront-output-bg-video")&&e(this).children().length==1){var t=e(e(this).children("script.video-embed-code").html()),n=t.attr("id");e(this).append(t);if(e(this).attr("data-bg-video-mute")==1){var r=t.attr("src");r.match(/youtube\.com/i)?a(n):r.match(/vimeo\./i)&&h(n)}}}))})}function y(){b(),e(".upfront-output-region-container").each(function(){var t=e(this).find(".upfront-output-region").filter(".upfront-region-center, .upfront-region-side-left, .upfront-region-side-right"),n=e(this).hasClass("upfront-region-container-full"),r=height=0;t.length>1&&(t.each(function(){var t=parseInt(e(this).css("min-height")),n=e(this).outerHeight();t&&(r=t>r?t:r),height=n>height?n:height}),t.css({minHeight:height,height:"",maxHeight:""}))})}function b(){e(".upfront-output-region-container.upfront-region-container-full").each(function(){var t=e(this).find(".upfront-region-center"),n=e(this).find(".upfront-region-side-top, .upfront-region-side-bottom"),r=e("body").offset(),i=e(window).height()-r.top,s=e(this).find(".upfront-output-bg-overlay");s.length&&s.css("height",i),n.each(function(){i-=e(this).outerHeight()}),t.css({minHeight:i});var o=e(this).attr("data-behavior"),u=parseInt(e(this).attr("data-original-height"));if(o=="keep-ratio"&&u>0){var a=t.find("> .upfront-region-wrapper > .upfront-output-wrapper"),f=t.offset(),l=[],c=[],h=-1,p=0,d=0,v=!1,m=!1,g=!1,y=!1,b=0;a.each(function(){var t=e(this).find("> .upfront-output-module, > .upfront-output-module-group");t.css("margin-top","");var n=e(this).offset(),r=e(this).height();Math.abs(n.left-f.left)<5?(h++,c[h]={wrappers:[],height:r}):r>c[h].height&&(c[h].height=r);var i={$el:e(this),space:0,fill:0,modules:[]};t.each(function(){var t=parseInt(e(this).css("margin-top")),n=e(this).height();i.space+=t,i.fill+=n,i.modules.push({$el:e(this),top:t,height:n})}),c[h].wrappers.push(i)}),e.each(c,function(e,t){p+=t.height}),d=u>p?u-p:0,avail_bottom_space=i-u+d;var w=function(t,n){var r=0,t=typeof t=="number"?t:0,n=typeof n=="number"?n:-1;return e.each(c,function(i,s){if(i<t||n>-1&&i>n)return;var o=0;e.each(s.wrappers,function(e,t){o=t.space>o?t.space:o}),r+=o}),r};e.each(c,function(t,n){var r=0,i=0;t>0&&(r=w(0,t-1)),t<c.length-1&&(i=w(t+1)),e.each(n.wrappers,function(t,n){var s=r+i+d+n.space,o=r+i+avail_bottom_space+n.space;o=o>0?o:0,e.each(n.modules,function(e,t){var n=t.top/s*o;t.$el.css("margin-top",n+"px")})})})}})}function S(){var t=e("body").offset();e("[data-bg-image-ratio]").each(function(){var n=e(this).is(".upfront-output-layout"),r=(e(this).is(".upfront-region-container-bg")||e(this).is(".upfront-output-region"))&&e(this).closest(".upfront-region-container-full").length>0,i=n?e(window).width():e(this).outerWidth(),s=n?e(window).height():r?e(window).height()-t.top:e(this).outerHeight(),o=parseFloat(e(this).attr("data-bg-image-ratio"));Math.round(s/i*100)/100>o?(e(this).data("bg-position-y",0),e(this).data("bg-position-x","50%"),e(this).css({"background-position":"50% 0","background-size":s/o+"px "+s+"px"})):(e(this).data("bg-position-y",Math.round((s-i*o)/2)),e(this).data("bg-position-x","0"),e(this).css({"background-position":"0 "+Math.round((s-i*o)/2)+"px","background-size":i+"px "+i*o+"px"}))}),e("[data-bg-video-ratio]").each(function(){var n=e(this).parent().is(".upfront-output-layout"),r=e(this).parent().is(".upfront-output-region, .upfront-region-container-bg")&&e(this).closest(".upfront-region-container-full").length>0,i=n?e(window).width():e(this).outerWidth(),s=n?e(window).height():r?e(window).height()-t.top:e(this).outerHeight(),o=parseFloat(e(this).attr("data-bg-video-ratio")),u=e(this).attr("data-bg-video-style")||"crop",a=e(this).children("iframe");e(this).css("overflow","hidden"),a.css({position:"absolute"});if(u=="crop")if(Math.round(s/i*100)/100>o){var f=s/o;a.css({width:f,height:s,top:0,left:(i-f)/2})}else{var l=i*o;a.css({width:i,height:l,top:(s-l)/2,left:0})}else if(u=="full")a.css({top:0,left:0,width:i,height:s});else if(u=="inside")if(Math.round(s/i*100)/100<o){var f=s/o;a.css({width:f,height:s,top:0,left:(i-f)/2})}else{var l=i*o;a.css({width:i,height:l,top:(s-l)/2,left:0})}}),e(".upfront-output-object .uf-post .thumbnail").each(function(){var t=e(this).height(),n=e(this).width(),r=e(this).find("img"),i,s;e(this).attr("data-resize")=="1"?(r.css({height:"",width:""}),i=r.height(),s=r.width(),t/n>i/s?r.css({height:"100%",width:"auto",marginLeft:(n-Math.round(t/i*s))/2,marginTop:""}):r.css({height:"auto",width:"100%",marginLeft:"",marginTop:(t-Math.round(n/s*i))/2})):(i=r.height(),t!=i&&r.css("margin-top",(t-i)/2))})}function T(){var t=r(),n=e("body").offset(),i=e(window).scrollTop(),s=e(window).height(),o=i+s;n.top>0&&(i+=n.top,s-=n.top),i=i<n.top?n.top:i,e('.upfront-output-region-container[data-sticky="1"], .upfront-output-region-sub-container[data-sticky="1"]').each(function(){var t=e(this).hasClass("upfront-output-region-sub-container"),r=t&&e(this).nextAll(".upfront-grid-layout").length>0,s=e(this).offset(),o=e(this).data("sticky-top"),u={};typeof o!="number"&&i>s.top?(u.position="fixed",u.top=e("#wpadminbar").css("position")!="fixed"?0:n.top,u.left=0,u.right=0,u.bottom="auto",e(this).addClass("upfront-output-region-container-sticky"),e(this).data("sticky-top",s.top),t?e(this).closest(".upfront-region-container-bg").css(r?"padding-top":"padding-bottom",e(this).height()):e(this).next(".upfront-output-region-container").css("padding-top",e(this).height())):typeof o=="number"&&i<=o&&(u.position="",u.top="",u.left="",u.right="",u.bottom="",e(this).removeClass("upfront-output-region-container-sticky"),e(this).removeData("sticky-top"),t?e(this).closest(".upfront-region-container-bg").css(r?"padding-top":"padding-bottom",""):e(this).next(".upfront-output-region-container").css("padding-top","")),e(this).css(u)}),e('.upfront-output-region-container.upfront-region-container-full, .upfront-output-region-container.upfront-region-container-full .upfront-output-region-sub-container:not(.upfront-output-region-container-sticky), .upfront-output-region.upfront-region-side-fixed[data-restrict-to-container="1"]').each(function(){var t=e(this).is(".upfront-region-side-fixed"),r=e(this).is(".upfront-region-container-full"),u=e(this).is(".upfront-output-region-sub-container"),a=e(this).closest(".upfront-output-region-container"),f=a.outerHeight(),l=a.offset(),c=l.top+f,h=e(this).height(),p=t?parseInt(e(this).attr("data-top")):0,d=t?typeof e(this).attr("data-top")!="undefined":e(this).nextAll(".upfront-grid-layout").length>0,v=t?parseInt(e(this).attr("data-bottom")):0,m=t?typeof e(this).attr("data-bottom")!="undefined":e(this).prevAll(".upfront-grid-layout").length>0,g={};if(r){var y=e(this).find(".upfront-region-container-bg"),b=y.css("background-image")!="none",w=e(this).find(".upfront-output-bg-overlay"),E=w.length>0,S=0,x=0,T=y.css("background-position"),N=parseInt(e(this).find(".upfront-region-center").css("min-height"));if(b){typeof y.data("bg-position-y")=="undefined"&&y.data("bg-position-y",T.match(/\d+(%|px|)$/)[0]),typeof y.data("bg-position-x")=="undefined"&&y.data("bg-position-x",T.match(/^\d+(%|px|)/)[0]),S=y.data("bg-position-y"),x=y.data("bg-position-x");if(typeof S=="string"&&S.match(/%$/)){var C=new Image;C.src=y.css("background-image").replace(/^url\(\s*['"]?\s*/,"").replace(/\s*['"]?\s*\)$/,""),S=parseInt(S)/100*(h-C.height)}else S=parseInt(S)}}if(i>=l.top&&o<=c){if(t||u)g.position="fixed",d?g.top=p+n.top:g.bottom=v;u&&(g.left=0,g.right=0,d?a.find("> .upfront-region-container-bg").css("padding-top",h):a.find("> .upfront-region-container-bg").css("padding-bottom",h)),r&&(b?y.css("background-position",x+" "+(S+i-n.top)+"px"):E&&w.css("top",i-n.top))}else t?(g.position="absolute",d?f>s&&i>=l.top+f-s?g.top=f-s+p:g.top=p:f>s&&o<=l.top+s?g.bottom=f-s+v:g.bottom=v):u?(g.position="relative",d&&(g.top=f-s+p),g.bottom="",g.left="",g.right="",a.find("> .upfront-region-container-bg").css({paddingTop:"",paddingBottom:""})):r&&(b?y.css("background-position",x+" "+(S+(f-s))+"px"):E&&w.css("top",f-s));e(this).css(g)})}function M(){clearTimeout(A),A=setTimeout(function(){var t=e(window).scrollTop(),n=e(window).height(),r=e(window).width();e(".upfront-image-lazy").each(function(){if(e(this).hasClass("upfront-image-lazy-loading"))return;var r=this,i=e(this).offset(),s=e(this).height(),o=e(this).width(),u,a,f;if((O&&i.top+s>=t&&i.top<t+n||!O)&&o>0&&s>0){u=e(this).attr("data-sources"),u?u=JSON.parse(u):a=e(this).attr("data-src");if(typeof u!="undefined"&&u.length||a){if(typeof u!="undefined"&&u.length){for(var l=0;l<u.length;l++)if(u[l][1]<=o||f>=0&&u[f][1]<o&&u[l][1]>o)f=l;if(e(this).data("loaded")==f)return;a=u[f][0],e(this).data("loaded",f)}else if(a&&e(this).hasClass("upfront-image-lazy-loaded"))return;e(this).removeClass("upfront-image-lazy-loaded").addClass("upfront-image-lazy-loading"),e("<img>").attr("src",a).on("load",function(){e(r).hasClass("upfront-image-lazy-bg")?e(r).css("background-image",'url("'+e(this).attr("src")+'")'):e(r).attr("src",e(this).attr("src")),e(r).removeClass("upfront-image-lazy-loading").addClass("upfront-image-lazy-loaded")})}}})},100)}function D(){function r(t){var n=new e.Deferred;return t.$el.removeClass("upfront-image-lazy-loaded").addClass("upfront-image-lazy-loading"),e("<img />").attr("src",t.url).on("load",function(){t.$el.is(".upfront-image-lazy-bg")?t.$el.css("background-image",'url("'+t.url+'")'):t.$el.attr("src",t.url),t.$el.removeClass("upfront-image-lazy-loading").addClass("upfront-image-lazy-loaded"),n.resolve()}).on("error abort",function(){n.reject()}),n.promise()}function i(e,t){n.push({url:e,$el:t})}function s(){var i=new e.Deferred;return e.each(n,function(e,n){t.push(r(n))}),e.when.apply(e,t).always(function(){i.resolve()}),i.promise()}var t=[],n=[];return{add:i,start:s}}function P(e){function t(){e.reverse(),n()}function n(){var t=e.pop();if(!t)return!1;t.start().done(n)}return{start:t}}function H(){var t=1500,n=e(".upfront-image-lazy"),i=new D,s=new D,o=new D,u=e(window).scrollTop(),a=e(window).height(),f=e(window).width(),l=r();l=!l||"none"===l?"desktop":l;if(!n.length)return!1;n.each(function(){var n=e(this),r=n.offset(),f=n.attr("data-sources"),c=n.attr("data-src"),h=n.attr("data-src-"+l),p=n.height(),d=n.width();if(n.is(".upfront-image-lazy-loaded"))return!0;if(!f&&!c&&!h)return!0;if(p<=0&&d<=0)return!0;if(f){var d=n.width(),v=0;f=JSON.parse(f);for(var m=0;m<f.length;m++)if(f[m][1]<=d||v>=0&&f[v][1]<d&&f[m][1]>d)v=m;if(e(this).data("loaded")==v)return!0;c=f[v][0],e(this).data("loaded",v)}else h&&(c=h);r.top+p>=u&&r.top<u+a?i.add(c,n):r.top+p+t>=u&&r.top<u+a+t?s.add(c,n):o.add(c,n)}),e(window).off("scroll",M);var c=(new P([i,s,o])).start()}function j(){var t=r();e("[data-theme-styles]").each(function(){var n=e(this).attr("data-theme-styles"),r=[];n=n.replace('"default":','"defaults":'),n&&(n=JSON.parse(n)),e.each(n,function(e,t){r.push(t)}),e(this).removeClass(r.join(" ")),!t&&n.defaults?e(this).addClass(n.defaults):t&&(n[t]||n.defaults)&&e(this).addClass(n[t]?n[t]:n.defaults)})}function I(){var t=r();if(e("#page").hasClass("upfront-layout-view"))return q();t&&t!=="none"&&t!=="desktop"?e("html").addClass("uf-responsive"):q()}function q(){e("html").removeClass("uf-responsive")}var t=function(e,t,n){var r,i,s,o=null,u=0;n||(n={});var a=function(){u=n.leading===!1?0:(new Date).getTime(),o=null,s=e.apply(r,i),o||(r=i=null)};return function(){var f=(new Date).getTime();u||n.leading!==!1||(u=f);var l=t-(f-u);return r=this,i=arguments,0>=l||l>t?(clearTimeout(o),o=null,u=f,s=e.apply(r,i),o||(r=i=null)):o||n.trailing===!1||(o=setTimeout(a,l)),s}},i=!1,o=!1,u=[],c=!1,d=e(window).width(),v=!1;m();var g=t(m,300);e(window).on("resize",g);var w=t(b,100),E=t(y,100);n("flex")?(e("html").addClass("flexbox-support"),b(),e(window).on("load",b),e(window).on("resize",w)):(y(),e(window).on("load",y),e(window).on("resize",E)),S();var x=t(S,500);e(window).on("resize",x),e(window).on("load",x),T(),e(window).on("load",T);var N=t(T,100);e(window).on("scroll",T),e(window).on("resize",N);var C=e('<div class="upfront-lightbox-bg"></div>'),k=e('<div class="upfront-ui close_lightbox"></div>'),L=e('<div class="upfront-icon upfront-icon-popup-close"></div>');e("[data-group-link]").each(function(){e(this).css({cursor:"pointer"}),e(this).live("click",function(){var t=e(this).data("groupLink"),n=e(this).data("groupTarget");if(t.indexOf("#")>=0){var r=e('.upfront-output-region-container[data-sticky="1"], .upfront-output-region-sub-container[data-sticky="1"]').first(),i=r.height()?r.height():0;e("html,body").animate({scrollTop:e(t).offset().top-i},"slow")}else window.open(t,e(this).data("groupTarget"))})}),e(document).on("click","a",function(t){if(e(t.target).closest("div.redactor_box")>0)return;if(e("div#sidebar-ui").length>0&&e("div#sidebar-ui").css("display")=="block"){if(e(t.target).hasClass("upfront_cta")){t.preventDefault();return}var n=e(t.target).attr("href");if(n&&n.indexOf&&n.indexOf("#ltb-")>-1){t.preventDefault();var r=Upfront.Application.layout.get("regions"),i=n.split("#");region=r?r.get_by_name(i[1]):!1;if(region){_.each(r.models,function(e){e.attributes.sub=="lightbox"&&Upfront.data.region_views[e.cid].hide()});var s=Upfront.data.region_views[region.cid];s.show()}}return}var n=e(this).attr("href");if(!n)return;if(n.indexOf("#")>=0){t.preventDefault();var o=n.split("#");if(o[1].trim()!="")if(o[1].trim().indexOf("ltb-")==0){var u=e("div.upfront-region-"+o[1].trim());C.css("background-color",u.data("overlay")).insertBefore(u);if(u.data("closeicon")=="yes"||u.data("addclosetext")=="yes")u.prepend(k),u.data("addclosetext")=="yes"&&(k.append(e("<h3>"+u.data("closetext")+"</h3>")),u.data("closeicon")=="yes"&&k.children("h3").css("margin-right","40px")),u.data("closeicon")=="yes"&&k.append(L),k.bind("click",function(){a()});u.data("clickout")=="yes"&&C.bind("click",function(){a()}),u.css("width",e("div.upfront-grid-layout").first().width()*u.data("col")/24),u.show().css({"margin-left":-parseInt(u.width()/2),"margin-top":-parseInt(u.height()/2)}),e(document).trigger("upfront-lightbox-open"),t.preventDefault();function a(){k.html("").remove(),C.remove(),u.hide()}}else{var f=e('.upfront-output-region-container[data-sticky="1"], .upfront-output-region-sub-container[data-sticky="1"]').first(),l=f.height()?f.height():0;e("html,body").animate({scrollTop:e(n).offset().top-l},"slow")}}});var A,O=window._upfront_image_lazy_scroll,B=t(M,100);e(window).on("resize",B),O?(e(window).on("scroll",B),M()):e(H),j();var F=t(j,100);e(window).on("resize",F),I();var R=t(I,100);e(window).on("resize",R),e(document).on("upfront-load",function(){Upfront.Events.on("layout:render",q)})});