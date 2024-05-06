"use strict";$(function(){barba.init({transitions:[{name:"opacity-transition",leave:function(n){return gsap.to(n.current.container,{opacity:0})},enter:function(n){return gsap.from(n.next.container,{opacity:0})}}]})});
//# sourceMappingURL=barba.js.map
