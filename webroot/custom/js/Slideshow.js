!function(){function a(b,c,d){function e(g,h){if(!c[g]){if(!b[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);var j=new Error("Cannot find module '"+g+"'");throw j.code="MODULE_NOT_FOUND",j}var k=c[g]={exports:{}};b[g][0].call(k.exports,function(a){return e(b[g][1][a]||a)},k,k.exports,a,b,c,d)}return c[g].exports}for(var f="function"==typeof require&&require,g=0;g<d.length;g++)e(d[g]);return e}return a}()({1:[function(a,b,c){!function(a,b,c){"use strict";function d(a){return b.lowercase(a.nodeName||a[0]&&a[0].nodeName)}function e(a,c,d){f.directive(a,["$parse","$swipe",function(e,f){return function(g,h,i){function j(a){if(!k)return!1;var b=Math.abs(a.y-k.y),d=(a.x-k.x)*c;return l&&b<75&&d>0&&d>30&&b/d<.3}var k,l,m=e(i[a]),n=["touch"];b.isDefined(i.ngSwipeDisableMouse)||n.push("mouse"),f.bind(h,{start:function(a,b){k=a,l=!0},cancel:function(a){l=!1},end:function(a,b){j(a)&&g.$apply(function(){h.triggerHandler(d),m(g,{$event:b})})}},n)}}])}var f=b.module("ngTouch",[]);f.factory("$swipe",[function(){function a(a){var b=a.originalEvent||a,c=b.touches&&b.touches.length?b.touches:[b],d=b.changedTouches&&b.changedTouches[0]||c[0];return{x:d.clientX,y:d.clientY}}function c(a,c){var e=[];return b.forEach(a,function(a){var b=d[a][c];b&&e.push(b)}),e.join(" ")}var d={mouse:{start:"mousedown",move:"mousemove",end:"mouseup"},touch:{start:"touchstart",move:"touchmove",end:"touchend",cancel:"touchcancel"}};return{bind:function(b,d,e){var f,g,h,i,j=!1;e=e||["mouse","touch"],b.on(c(e,"start"),function(b){h=a(b),j=!0,f=0,g=0,i=h,d.start&&d.start(h,b)});var k=c(e,"cancel");k&&b.on(k,function(a){j=!1,d.cancel&&d.cancel(a)}),b.on(c(e,"move"),function(b){if(j&&h){var c=a(b);if(f+=Math.abs(c.x-i.x),g+=Math.abs(c.y-i.y),i=c,!(f<10&&g<10))return g>f?(j=!1,void(d.cancel&&d.cancel(b))):(b.preventDefault(),void(d.move&&d.move(c,b)))}}),b.on(c(e,"end"),function(b){j&&(j=!1,d.end&&d.end(a(b),b))})}}}]),f.config(["$provide",function(a){a.decorator("ngClickDirective",["$delegate",function(a){return a.shift(),a}])}]),f.directive("ngClick",["$parse","$timeout","$rootElement",function(a,c,e){function f(a,b,c,d){return Math.abs(a-c)<o&&Math.abs(b-d)<o}function g(a,b,c){for(var d=0;d<a.length;d+=2)if(f(a[d],a[d+1],b,c))return a.splice(d,d+2),!0;return!1}function h(a){if(!(Date.now()-k>n)){var b=a.touches&&a.touches.length?a.touches:[a],c=b[0].clientX,e=b[0].clientY;c<1&&e<1||m&&m[0]===c&&m[1]===e||(m&&(m=null),"label"===d(a.target)&&(m=[c,e]),g(l,c,e)||(a.stopPropagation(),a.preventDefault(),a.target&&a.target.blur&&a.target.blur()))}}function i(a){var b=a.touches&&a.touches.length?a.touches:[a],d=b[0].clientX,e=b[0].clientY;l.push(d,e),c(function(){for(var a=0;a<l.length;a+=2)if(l[a]==d&&l[a+1]==e)return void l.splice(a,a+2)},n,!1)}function j(a,b){l||(e[0].addEventListener("click",h,!0),e[0].addEventListener("touchstart",i,!0),l=[]),k=Date.now(),g(l,a,b)}var k,l,m,n=2500,o=25,p="ng-click-active";return function(c,d,e){function f(){m=!1,d.removeClass(p)}var g,h,i,k,l=a(e.ngClick),m=!1;d.on("touchstart",function(a){m=!0,g=a.target?a.target:a.srcElement,3==g.nodeType&&(g=g.parentNode),d.addClass(p),h=Date.now();var b=a.originalEvent||a,c=b.touches&&b.touches.length?b.touches:[b],e=c[0];i=e.clientX,k=e.clientY}),d.on("touchcancel",function(a){f()}),d.on("touchend",function(a){var c=Date.now()-h,l=a.originalEvent||a,n=l.changedTouches&&l.changedTouches.length?l.changedTouches:l.touches&&l.touches.length?l.touches:[l],o=n[0],p=o.clientX,q=o.clientY,r=Math.sqrt(Math.pow(p-i,2)+Math.pow(q-k,2));m&&c<750&&r<12&&(j(p,q),g&&g.blur(),b.isDefined(e.disabled)&&!1!==e.disabled||d.triggerHandler("click",[a])),f()}),d.onclick=function(a){},d.on("click",function(a,b){c.$apply(function(){l(c,{$event:b||a})})}),d.on("mousedown",function(a){d.addClass(p)}),d.on("mousemove mouseup",function(a){d.removeClass(p)})}}]),e("ngSwipeLeft",-1,"swipeleft"),e("ngSwipeRight",1,"swiperight")}(window,window.angular)},{}],2:[function(a,b,c){a("./angular-touch"),b.exports="ngTouch"},{"./angular-touch":1}],3:[function(a,b,c){b.exports=["$interpolateProvider","$httpProvider",function(a,b){a.startSymbol("{[").endSymbol("]}"),b.defaults.headers.common["X-Requested-With"]="XMLHttpRequest"}]},{}],4:[function(a,b,c){b.exports=["$timeout",function(a){return{restrict:"E",replace:!0,transclude:!0,template:'<div class="sa-slideshow_slide" ng-transclude></div>',link:function(b){a(function(){b.$emit("smartangels.slideshow.slide_created")},50),b.$on("$destroy",function(){b.$emit("smartangels.slideshow.slide_destroyed")})}}}]},{}],5:[function(a,b,c){b.exports=["Partial",function(a){return{restrict:"E",replace:!0,transclude:!0,templateUrl:a.default("slideshow"),scope:{slides:"=?",trapped:"=?",controls:"@?"},link:function(a,b){function c(){if(!k.hasChildren())return!1;a.width=100/a.perPage,j.css({width:a.width+"%","margin-left":-100*a.position+"%"})}function d(){if(!k.hasChildren())return!1;var b=[],c=k.completePageCount(),d=c-1,e=k.bestPosition();for(d<e&&b.push(e),d;d>=0;d--)b.push(d);a.flees=b.sort(),a.enableControls=b.length>1&&a.perPage<a.childrenCount}function e(){if(!k.hasChildren())return!1;var b=Math.floor(a.position);if(b!==a.position)return a.position=b;var c=k.bestPosition();a.position>c&&(a.position=c)}a.trapped=!0===a.trapped,"bottom"===a.controls?(a.sideControls=!1,a.bottomControls=!0):(a.sideControls=!0,a.bottomControls=!1),a.enableControls=!0,a.position=0,a.childrenCount=0,a.slides=a.slides||{0:1,600:2,900:3};var f=Object.keys(a.slides).sort(function(a,b){return a-b}),g=b[0],h=g.querySelector("[data-smart-slideshow-container]"),i=g.querySelector("[data-smart-slideshow-hider]"),j=angular.element(h),k={closestInferior:function(a,b){for(var c=a.length-1;c>=0;c--)if(!(b<a[c]))return a[c]},hasChildren:function(){return a.childrenCount>0},completePageCount:function(){return Math.floor(a.childrenCount/a.perPage)},bestPosition:function(){return a.childrenCount>=a.perPage?a.childrenCount/a.perPage-1:-1/a.perPage*(a.perPage-a.childrenCount)/2},positionValid:function(a){return a>=0&&a<=k.bestPosition()},isIncrementable:function(){return k.completePageCount()>a.position+1},isSoftIncrementable:function(){return k.softIncrement()>0},softIncrement:function(){var b=k.bestPosition();return b<1&&0===a.position?b:b%a.position},isSoftDecrementable:function(){return k.softDecrement()<a.position},softDecrement:function(){return Math.floor(a.position)}};a.prev=function(){if(a.enableControls)return k.isSoftDecrementable()?a.position=k.softDecrement():0===a.position?a.position=k.bestPosition():a.position--},a.next=function(){if(a.enableControls)return k.isIncrementable()?a.position+=1:k.isSoftIncrementable()?a.position+=k.softIncrement():a.position=0},a.onFleeClick=function(b){k.positionValid(b)&&(a.position=b)};var l=_.debounce(function(){a.$apply(function(){var b=k.closestInferior(f,i.offsetWidth);a.perPage=a.slides[b]})},100);a.$watch(function(){return i.offsetWidth},function(){l()}),l(),a.$on("smartangels.slideshow.slide_created",function(b){b.stopPropagation(),a.childrenCount++}),a.$on("smartangels.slideshow.slide_destroyed",function(b){b.stopPropagation(),a.childrenCount--}),a.$watch("[position, perPage]",c),a.$watch("[position, perPage]",d),a.$watch("[childrenCount, perPage]",e)}}}]},{}],6:[function(a,b,c){!function(b){a("../../Module/Partial"),a("angular-touch"),b.module("smartangels.directive.slideshow",["ngTouch","smartangels.service.partial"]).config(a("../../Config/config")).directive("smartSlideshow",a("./Directive/SmartSlideshow")).directive("smartSlide",a("./Directive/SmartSlide"))}(angular)},{"../../Config/config":3,"../../Module/Partial":7,"./Directive/SmartSlide":4,"./Directive/SmartSlideshow":5,"angular-touch":2}],7:[function(a,b,c){!function(a){a.module("smartangels.service.partial",[]).provider("Partial",function(){var a={globalDashboard:function(a){return Routing.generate("smartangels_global_dashboard_api_partial",{name:a})},default:function(a){return Routing.generate("smartangels_partial_default",{name:a})},userDashboard:function(a){return Routing.generate("smartangels_global_dashboard_api_user_partial",{name:a})}};this.$extend=function(b){for(var c in b)b.hasOwnProperty(c)&&(a.hasOwnProperty(c)&&console.error("Partial helper "+c+" already exists !"),a[c]=b[c])},this.$get=function(){return a}})}(window.angular)},{}]},{},[6]);