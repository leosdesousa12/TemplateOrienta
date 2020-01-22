"use strict";!function(e){e.module("ui.carousel.config",[]).value("ui.carousel.config",{debug:!0}),e.module("ui.carousel.providers",[]),e.module("ui.carousel.controllers",[]),e.module("ui.carousel.directives",[]),e.module("ui.carousel",["ui.carousel.config","ui.carousel.directives","ui.carousel.controllers","ui.carousel.providers"])}(angular),angular.module("ui.carousel.controllers").controller("CarouselController",["$scope","$element","$timeout","$q","Carousel","$window",function(e,i,t,s,o,n){var r=this;this.$onInit=function(){r.initOptions(),r.initRanges(),r.setProps(),r.setupInfinite()},this.initOptions=function(){r.options=angular.extend({},o.getOptions()),void 0!==r.initialSlide&&(r.options.initialSlide=r.initialSlide),void 0!==r.fade&&(r.options.fade=r.fade),void 0!==r.autoplay&&(r.options.autoplay=r.autoplay),void 0!==r.autoplaySpeed&&(r.options.autoplaySpeed=r.autoplaySpeed),void 0!==r.cssEase&&(r.options.cssEase=r.cssEase),void 0!==r.speed&&(r.options.speed=r.speed),void 0!==r.infinite&&(r.options.infinite=r.infinite),void 0!==r.arrows&&(r.options.arrows=r.arrows),void 0!==r.dots&&(r.options.dots=r.dots),void 0!==r.visiblePrev&&(r.options.visiblePrev=r.visiblePrev),void 0!==r.visibleNext&&(r.options.visibleNext=r.visibleNext),r.options.fade?(r.options.slidesToShow=1,r.options.slidesToScroll=1):(r.show&&(r.options.slidesToShow=r.show),r.scroll&&(r.options.slidesToScroll=r.scroll))},this.initRanges=function(){r.slides||(r.slides=[]),r.isCarouselReady=!1,r.isTrackMoving=!1,r.track=i.find(".track"),r.width=1,r.currentSlide=r.options.initialSlide,r.trackStyle={},r.slideStyle={},r.isVisibleDots=!1,r.isVisiblePrev=r.options.visiblePrev,r.isVisibleNext=r.options.visibleNext,r.isClickablePrev=!1,r.isClickableNext=!1,r.animType=null,r.transformType=null,r.transitionType=null},this.initUI=function(){r.width=i[0].clientWidth,r.initTrack(),t(function(){r.updateItemStyle()},200)},this.updateItemStyle=function(){r.itemWidth=r.width/r.options.slidesToShow,r.slideStyle={width:r.itemWidth+"px"}},this.initTrack=function(){var e=r.width/r.options.slidesToShow,i=e*r.slidesInTrack.length;r.trackStyle.width=i+"px",r.slideHandler(r.currentSlide).finally(function(){r.isCarouselReady=!0,r.options.fade||r.refreshTrackStyle(),r.onInit&&r.onInit()}).catch(function(){})},this.next=function(){if(!r.isClickableNext)return!1;var e=r.getIndexOffset(),i=0===e?r.options.slidesToScroll:e;r.slideHandler(r.currentSlide+i).catch(function(){})},this.prev=function(){if(!r.isClickablePrev)return!1;var e=r.getIndexOffset(),i=0===e?r.options.slidesToScroll:r.options.slidesToShow-e;r.slideHandler(r.currentSlide-i).catch(function(){})},this.getIndexOffset=function(){var e=r.slides.length%r.options.slidesToScroll!==0,i=e?0:(r.slides.length-r.currentSlide)%r.options.slidesToScroll;return i},this.movePage=function(e){var i=r.options.slidesToScroll*e;r.slideHandler(i).catch(function(){})},this.slideHandler=function(e){if(!r.slides)return s.reject("Carousel not fully setup");if(r.isTrackMoving)return s.reject("Track is moving");var i=r.slides.length,o=r.options.slidesToShow;if(o>=i)return r.correctTrack(),s.reject("Length of slides smaller than slides to show");var n=e,l=null;if(l=0>n?i%r.options.slidesToScroll!==0?i-i%r.options.slidesToScroll:i+n:n>=i?i%r.options.slidesToScroll!==0?0:n-i:n,r.onBeforeChange&&r.onBeforeChange({currentSlide:r.currentSlide,target:l}),r.options.fade)return r.currentSlide=l,t(function(){r.autoplayTrack(),r.onAfterChange&&r.onAfterChange({currentSlide:r.currentSlide})},r.options.speed),s.when("Handler fade");var a=r.width/r.options.slidesToShow,c=-1*l*a;return r.options.infinite&&(c=-1*(n+o)*a),r.isTrackMoving=!0,r.moveTrack(c).then(function(){r.isTrackMoving=!1,r.currentSlide=l,r.autoplayTrack(),l!==n&&r.correctTrack(),r.options.infinite||(0===r.currentSlide?(r.isClickablePrev=!1,r.isClickableNext=!0):r.currentSlide===r.slidesInTrack.length-r.options.slidesToShow?(r.isClickableNext=!1,r.isClickablePrev=!0):(r.isClickablePrev=!0,r.isClickableNext=!0)),t(function(){r.onAfterChange&&r.onAfterChange({currentSlide:r.currentSlide})},200)})},this.moveTrack=function(e){var i=s.defer();return r.trackStyle[r.animType]=r.options.vertical===!1?"translate3d("+e+"px, 0px, 0px)":"translate3d(0px, "+e+"px, 0px)",t(function(){i.resolve("Track moved")},r.options.speed),i.promise},this.correctTrack=function(){r.options.infinite&&!function(){var e=0;r.slides.length>r.options.slidesToShow&&(e=-1*(r.currentSlide+r.options.slidesToShow)*r.itemWidth),r.trackStyle[r.transitionType]=r.transformType+" 0ms "+r.options.cssEase,r.isTrackMoving=!0,t(function(){r.trackStyle[r.animType]="translate3d("+e+"px, 0, 0px)",t(function(){r.refreshTrackStyle(),r.isTrackMoving=!1},200)})}()},this.refreshTrackStyle=function(){r.trackStyle[r.transitionType]=r.transformType+" "+r.options.speed+"ms "+r.options.cssEase},this.autoplayTrack=function(){r.options.autoplay&&(r.timeout&&t.cancel(r.timeout),r.timeout=t(function(){r.next(),t.cancel(r.timeout),r.timeout=null},r.options.autoplaySpeed))},this.getSlideStyle=function(e){var i=r.slideStyle;if(r.options.fade){var t=-1*e*r.itemWidth,s={position:"relative",top:"0px",left:t+"px","z-index":e===r.currentSlide?10:9,opacity:e===r.currentSlide?1:0};e>=r.currentSlide-1&&e<=r.currentSlide+1&&(s.transition="opacity 250ms linear"),i=angular.extend(i,s)}return i},this.setupInfinite=function(){var e=r.slides.length,i=r.options.slidesToShow,t=angular.copy(r.slides);if(r.options.infinite&&r.options.fade===!1&&e>i){for(var s=i,o=0;s>o;o++)t.push(angular.copy(r.slides[o]));for(var n=e-1;n>=e-i;n--)t.unshift(angular.copy(r.slides[n]))}r.slidesInTrack=t},this.getDots=function(){if(!r.slides)return[];for(var e=Math.ceil(r.slides.length/r.options.slidesToScroll),i=[],t=0;e>t;t++)i.push(t);return i},this.setProps=function(){var e=document.body.style;void 0!==e.OTransform&&(r.animType="OTransform",r.transformType="-o-transform",r.transitionType="OTransition"),void 0!==e.MozTransform&&(r.animType="MozTransform",r.transformType="-moz-transform",r.transitionType="MozTransition"),void 0!==e.webkitTransform&&(r.animType="webkitTransform",r.transformType="-webkit-transform",r.transitionType="webkitTransition"),void 0!==e.msTransform&&(r.animType="msTransform",r.transformType="-ms-transform",r.transitionType="msTransition"),void 0!==e.transform&&r.animType!==!1&&(r.animType="transform",r.transformType="transform",r.transitionType="transition"),r.transformsEnabled=!0},this.refreshCarousel=function(){r.slides&&r.slides.length&&r.slides.length>r.options.slidesToShow?(r.isVisibleDots=!0,r.isVisiblePrev=!0,r.isVisibleNext=!0,r.isClickablePrev=!0,r.isClickableNext=!0):(r.isVisibleDots=!1,r.isVisiblePrev=r.options.visiblePrev||!1,r.isVisibleNext=r.options.visibleNext||!1,r.isClickablePrev=!1,r.isClickableNext=!1),r.initUI()},e.$watchCollection("ctrl.slides",function(e){e&&(r.currentSlide>e.length-1&&(r.currentSlide=e.length-1),r.setupInfinite(),r.refreshCarousel())}),angular.element(n).on("resize",this.refreshCarousel),e.$on("$destroy",function(){angular.element(n).off("resize")}),1===angular.version.major&&angular.version.minor<5&&this.$onInit()}]),angular.module("ui.carousel.directives").directive("uiCarousel",["$compile","$templateCache","$sce",function(e,i){return{restrict:"AE",bindToController:!0,scope:{name:"=?",slides:"=",show:"=?slidesToShow",scroll:"=?slidesToScroll",classes:"@",fade:"=?",onChange:"=?",disableArrow:"=?",autoplay:"=?",autoplaySpeed:"=?",cssEase:"=?",speed:"=?",infinite:"=?",arrows:"=?",dots:"=?",initialSlide:"=?",visibleNext:"=?",visiblePrev:"=?",onBeforeChange:"&",onAfterChange:"&",onInit:"&"},link:function(t,s){var o=angular.element(i.get("ui-carousel/carousel.template.html")),n={"carousel-item":".carousel-item","carousel-prev":".carousel-prev","carousel-next":".carousel-next"},r=o.clone();angular.forEach(n,function(e,i){var t=s[0].querySelector(i);t&&angular.element(r[0].querySelector(e)).html(t.innerHTML)});var l=e(r)(t);s.addClass("ui-carousel").html("").append(l)},controller:"CarouselController",controllerAs:"ctrl"}}]),angular.module("ui.carousel.providers").provider("Carousel",function(){var e=this;this.options={arrows:!0,autoplay:!1,autoplaySpeed:3e3,cssEase:"ease",dots:!1,easing:"linear",fade:!1,infinite:!0,initialSlide:0,slidesToShow:1,slidesToScroll:1,speed:500,visiblePrev:!1,visibleNext:!1,draggable:!0,lazyLoad:"ondemand",swipe:!0,swipeToSlide:!1,touchMove:!0,vertical:!1,verticalSwiping:!1},this.$get=[function(){return{setOptions:function(i){e.options=angular.extend(e.options,i)},getOptions:function(){return e.options}}}]}),function(e){try{e=angular.module("ui.carousel")}catch(i){e=angular.module("ui.carousel",[])}e.run(["$templateCache",function(e){e.put("ui-carousel/carousel.template.html",'<div class="carousel-wrapper" ng-show="ctrl.isCarouselReady"><div class="track-wrapper"><div class="track" ng-style="ctrl.trackStyle"><div class="slide" ng-repeat="item in ctrl.slidesInTrack track by $index" ng-style="ctrl.getSlideStyle($index)"><div class="carousel-item"></div></div></div></div><div class="carousel-prev" ng-if="!ctrl.disableArrow" ng-show="ctrl.isVisiblePrev &amp;&amp; ctrl.options.arrows" ng-class="{\'carousel-disable\': !ctrl.isClickablePrev}" ng-click="ctrl.prev()"><button class="carousel-btn"><i class="ui-icon-prev"></i></button></div><div class="carousel-next" ng-if="!ctrl.disableArrow" ng-show="ctrl.isVisibleNext &amp;&amp; ctrl.options.arrows" ng-class="{\'carousel-disable\': !ctrl.isClickableNext}" ng-click="ctrl.next()"><button class="carousel-btn"><i class="ui-icon-next"></i></button></div><ul class="carousel-dots" ng-show="ctrl.isVisibleDots &amp;&amp; ctrl.options.dots"><li ng-repeat="dot in ctrl.getDots()" ng-class="{ \'carousel-active\': dot == ctrl.currentSlide/ctrl.options.slidesToScroll }" ng-click="ctrl.movePage(dot)"><button>{{ dot }}</button></li></ul></div>')}])}();