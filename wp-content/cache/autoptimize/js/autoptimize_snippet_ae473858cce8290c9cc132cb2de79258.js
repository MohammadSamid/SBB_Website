try{!function(f){f.fn.bsf_appear=function(r,e){var h=f.extend({data:void 0,one:!0,accX:0,accY:0},e);return this.each(function(){var l=f(this);if(l.bsf_appeared=!1,r){var b=f(window),a=function(){if(l.is(":visible")){var e=b.scrollLeft(),a=b.scrollTop(),r=l.offset(),f=r.left,p=r.top,s=h.accX,n=h.accY,t=l.height(),c=b.height(),i=l.width(),o=b.width();a<=p+t+n&&p<=a+c+n&&e<=f+i+s&&f<=e+o+s?l.bsf_appeared||l.trigger("bsf_appear",h.data):l.bsf_appeared=!1}else l.bsf_appeared=!1},e=function(){if(l.bsf_appeared=!0,h.one){b.unbind("scroll",a);var e=f.inArray(a,f.fn.bsf_appear.checks);0<=e&&f.fn.bsf_appear.checks.splice(e,1)}r.apply(this,arguments)};h.one?l.one("bsf_appear",h.data,e):l.bind("bsf_appear",h.data,e),b.scroll(a),f.fn.bsf_appear.checks.push(a),a()}else l.trigger("bsf_appear",h.data)})},f.extend(f.fn.bsf_appear,{checks:[],timeout:null,checkAll:function(){var e=f.fn.bsf_appear.checks.length;if(0<e)for(;e--;)f.fn.bsf_appear.checks[e]()},run:function(){f.fn.bsf_appear.timeout&&clearTimeout(f.fn.bsf_appear.timeout),f.fn.bsf_appear.timeout=setTimeout(f.fn.bsf_appear.checkAll,20)}}),f.each(["append","prepend","after","before","attr","removeAttr","addClass","removeClass","toggleClass","remove","css","show","hide"],function(e,a){var r=f.fn[a];r&&(f.fn[a]=function(){var e=r.apply(this,arguments);return f.fn.bsf_appear.run(),e})})}(jQuery);}catch(e){}