var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

function Write(element) {
	var text = $(element).html();
	var i = 1;

	var toot = setInterval(function() {
		$(element).html(text.substring(0,i));
		//type.play();
		i += 1;
		if (i > text.length) {
			clearInterval(toot);
			$(element).html(text);
			//finish.play();
		}
	}, 100);
}


}
/*
     FILE ARCHIVED ON 15:45:35 Jul 30, 2022 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 23:29:42 Aug 31, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 96.974
  exclusion.robots: 0.09
  exclusion.robots.policy: 0.084
  cdx.remote: 0.064
  esindex: 0.01
  LoadShardBlock: 54.402 (3)
  PetaboxLoader3.datanode: 56.646 (4)
  CDXLines.iter: 14.944 (3)
  load_resource: 61.639
  PetaboxLoader3.resolve: 38.891
*/