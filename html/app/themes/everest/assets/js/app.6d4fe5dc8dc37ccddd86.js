!function(e){function t(t){for(var r,i,c=t[0],s=t[1],l=t[2],d=0,m=[];d<c.length;d++)i=c[d],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&m.push(o[i][0]),o[i]=0;for(r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r]);for(u&&u(t);m.length;)m.shift()();return a.push.apply(a,l||[]),n()}function n(){for(var e,t=0;t<a.length;t++){for(var n=a[t],r=!0,c=1;c<n.length;c++){var s=n[c];0!==o[s]&&(r=!1)}r&&(a.splice(t--,1),e=i(i.s=n[0]))}return e}var r={},o={0:0},a=[];function i(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=e,i.c=r,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)i.d(n,r,function(t){return e[t]}.bind(null,r));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="/app/themes/everest/assets/";var c=window.webpackJsonp=window.webpackJsonp||[],s=c.push.bind(c);c.push=t,c=c.slice();for(var l=0;l<c.length;l++)t(c[l]);var u=s;a.push([22,1]),n()}({22:function(e,t,n){e.exports=n(52)},23:function(e,t,n){var r,o;function a(){return(a=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e}).apply(this,arguments)}function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(a,c){"object"===i(t)&&void 0!==e?e.exports=c():void 0===(o="function"==typeof(r=c)?r.call(t,n,t,e):r)||(e.exports=o)}(0,(function(){"use strict";var e="undefined"!=typeof window,t=e&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),n=e&&"IntersectionObserver"in window,r=e&&"classList"in document.createElement("p"),o={elements_selector:"img",container:t||e?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",class_loading:"loading",class_loaded:"loaded",class_error:"error",load_delay:0,auto_unobserve:!0,callback_enter:null,callback_exit:null,callback_reveal:null,callback_loaded:null,callback_error:null,callback_finish:null,use_native:!1},i=function(e,t){var n,r=new e(t);try{n=new CustomEvent("LazyLoad::Initialized",{detail:{instance:r}})}catch(e){(n=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:r})}window.dispatchEvent(n)},c=function(e,t){return e.getAttribute("data-"+t)},s=function(e,t,n){var r="data-"+t;null!==n?e.setAttribute(r,n):e.removeAttribute(r)},l=function(e){return"true"===c(e,"was-processed")},u=function(e,t){return s(e,"ll-timeout",t)},d=function(e){return c(e,"ll-timeout")},m=function(e,t){e&&e(t)},f=function(e,t){e._loadingCount+=t,0===e._elements.length&&0===e._loadingCount&&m(e._settings.callback_finish)},p=function(e){for(var t,n=[],r=0;t=e.children[r];r+=1)"SOURCE"===t.tagName&&n.push(t);return n},h=function(e,t,n){n&&e.setAttribute(t,n)},y=function(e,t){h(e,"sizes",c(e,t.data_sizes)),h(e,"srcset",c(e,t.data_srcset)),h(e,"src",c(e,t.data_src))},v={IMG:function(e,t){var n=e.parentNode;n&&"PICTURE"===n.tagName&&p(n).forEach((function(e){y(e,t)})),y(e,t)},IFRAME:function(e,t){h(e,"src",c(e,t.data_src))},VIDEO:function(e,t){p(e).forEach((function(e){h(e,"src",c(e,t.data_src))})),h(e,"src",c(e,t.data_src)),e.load()}},b=function(e,t){r?e.classList.add(t):e.className+=(e.className?" ":"")+t},_=function(e,t,n){e.addEventListener(t,n)},g=function(e,t,n){e.removeEventListener(t,n)},S=function(e,t,n){g(e,"load",t),g(e,"loadeddata",t),g(e,"error",n)},E=function(e,t,n){var o=n._settings,a=t?o.class_loaded:o.class_error,i=t?o.callback_loaded:o.callback_error,c=e.target;!function(e,t){r?e.classList.remove(t):e.className=e.className.replace(new RegExp("(^|\\s+)"+t+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")}(c,o.class_loading),b(c,a),m(i,c),f(n,-1)},w=["IMG","IFRAME","VIDEO"],L=function(e,t){var n=t._observer;k(e,t),n&&t._settings.auto_unobserve&&n.unobserve(e)},q=function(e){var t=d(e);t&&(clearTimeout(t),u(e,null))},k=function(e,t,n){var r=t._settings;!n&&l(e)||(w.indexOf(e.tagName)>-1&&(function(e,t){var n=function n(o){E(o,!0,t),S(e,n,r)},r=function r(o){E(o,!1,t),S(e,n,r)};!function(e,t,n){_(e,"load",t),_(e,"loadeddata",t),_(e,"error",n)}(e,n,r)}(e,t),b(e,r.class_loading)),function(e,t){var n,r,o=t._settings,a=e.tagName,i=v[a];if(i)return i(e,o),f(t,1),void(t._elements=(n=t._elements,r=e,n.filter((function(e){return e!==r}))));!function(e,t){var n=c(e,t.data_src),r=c(e,t.data_bg);n&&(e.style.backgroundImage='url("'.concat(n,'")')),r&&(e.style.backgroundImage=r)}(e,o)}(e,t),function(e){s(e,"was-processed","true")}(e),m(r.callback_reveal,e),m(r.callback_set,e))},x=function(e){return!!n&&(e._observer=new IntersectionObserver((function(t){t.forEach((function(t){return function(e){return e.isIntersecting||e.intersectionRatio>0}(t)?function(e,t){var n=t._settings;m(n.callback_enter,e),n.load_delay?function(e,t){var n=t._settings.load_delay,r=d(e);r||(r=setTimeout((function(){L(e,t),q(e)}),n),u(e,r))}(e,t):L(e,t)}(t.target,e):function(e,t){var n=t._settings;m(n.callback_exit,e),n.load_delay&&q(e)}(t.target,e)}))}),{root:(t=e._settings).container===document?null:t.container,rootMargin:t.thresholds||t.threshold+"px"}),!0);var t},M=["IMG","IFRAME"],A=function(e,t){return function(e){return e.filter((function(e){return!l(e)}))}((n=e||function(e){return e.container.querySelectorAll(e.elements_selector)}(t),Array.prototype.slice.call(n)));var n},I=function(e,t){this._settings=function(e){return a({},o,e)}(e),this._loadingCount=0,x(this),this.update(t)};return I.prototype={update:function(e){var n,r=this,o=this._settings;this._elements=A(e,o),!t&&this._observer?(function(e){return e.use_native&&"loading"in HTMLImageElement.prototype}(o)&&((n=this)._elements.forEach((function(e){-1!==M.indexOf(e.tagName)&&(e.setAttribute("loading","lazy"),k(e,n))})),this._elements=A(e,o)),this._elements.forEach((function(e){r._observer.observe(e)}))):this.loadAll()},destroy:function(){var e=this;this._observer&&(this._elements.forEach((function(t){e._observer.unobserve(t)})),this._observer=null),this._elements=null,this._settings=null},load:function(e,t){k(e,this,t)},loadAll:function(){var e=this;this._elements.forEach((function(t){L(t,e)}))}},e&&function(e,t){if(t)if(t.length)for(var n,r=0;n=t[r];r+=1)i(e,n);else i(e,t)}(I,window.lazyLoadOptions),I}))},24:function(e,t){let n=document.querySelector(".mobile-menu-icon"),r=(document.querySelector(".header-menu-mobile"),document.querySelector(".mobile-close")),o=document.querySelector(".mobail-menu");n.addEventListener("click",(function(){o.classList.add("index6"),o.classList.add("header-menu-mobile--active")})),r.addEventListener("click",(function(){o.classList.remove("header-menu-mobile--active"),o.classList.remove("index6")}))},26:function(e,t){let n=document.querySelectorAll('.header .menu__item a[href*="#"]');for(let e of n)e.addEventListener("click",(function(t){t.preventDefault();const n=e.getAttribute("href");document.querySelector(""+n).scrollIntoView({behavior:"smooth",block:"start"})}))},50:function(e,t){const n=document.querySelector(".badbrowser");if(n){"Internet Explorer"==function(){const e=navigator.userAgent;return e.search(/YaBrowser/)>0?"Яндекс Браузер":e.search(/rv:11.0/)>0||e.search(/rv:11.0.20/)>0||e.search(/MSIE/)>0?"Internet Explorer":e.search(/Edge/)>0?"Edge":e.search(/Chrome/)>0?"Google Chrome":e.search(/Firefox/)>0?"Firefox":e.search(/Opera/)>0?"Opera":e.search(/Safari/)>0&&"Safari"}()?n.classList.remove("hidden"):n&&(document.cookie="badbrowser_modal=true; path=/");document.querySelector(".close-modal").addEventListener("click",(function(e){e.preventDefault(),n.classList.add("hidden"),document.cookie="badbrowser_modal=true; path=/"}))}},51:function(e,t,n){},52:function(e,t,n){"use strict";n.r(t);n(23);var r=n(16),o=n.n(r),a=n(17),i=n(18),c=n.n(i),s=n(4),l=n.n(s);window.addEventListener("load",(function(){new o.a;a.a.init();new c.a("a[data-scroll]",{speed:200});if(document.querySelector(".phone-mask")){document.querySelectorAll(".phone-mask").forEach(e=>{new l.a({mask:"+7 (999) 999-99-99",showMaskOnHover:!1}).mask(e)})}}));n(24);var u=n(2);u.c.use([u.a,u.b]);let d=document.querySelector("body");document.addEventListener("DOMContentLoaded",()=>{if(document.querySelector(".about_us__slider")){document.querySelectorAll(".about_us__slider").forEach(e=>{new u.c(e.querySelector(".swiper-container"),{navigation:{nextEl:document.querySelector(".swiper-button__next"),prevEl:document.querySelector(".swiper-button__prev"),disabledClass:"swiper-button-disabled"},slidesPerView:"auto",spaceBetween:20,centeredSlides:!0,initialSlide:3,loop:!1,autoplay:{reverseDirection:!0}})})}if(document.querySelector(".sales__slider-container")){document.querySelectorAll(".sales__slider-container").forEach(e=>{const t=new u.c(e.querySelector(".swiper-container"),{slidesPerView:"auto",centeredSlides:!0,initialSlide:1,loop:!1,pagination:{el:".swiper-pagination",clickable:!0},breakpoints:{1440:{slidesPerView:3,slidesPerGroup:1,spaceBetween:20}}});d.clientWidth<1025&&t.destroy()})}});var m=n(19),f=(n(25),document.getElementById("slider-round"));let p=document.getElementById("tab-hair-blonde");m.create(f,{start:30,connect:!0,tooltips:!0,step:1,range:{min:1,max:100}});let h=document.querySelector(".noUi-tooltip").innerHTML;h=Math.round(Number(h)),document.addEventListener("DOMContentLoaded",(function(){f.noUiSlider.on("update",(function(e,t){let n=document.querySelector(".noUi-tooltip").innerHTML;n=Math.round(Number(n)),p.value=n}))}));var y=n(20);window.onload=function(){function e(e,t,n,r){y.a.load("https://api-maps.yandex.ru/2.1/?lang=ru_RU").then(e=>{const o=new e.Map(r,{center:[t,n],zoom:12,controls:[]},{yandexMapDisablePoiInteractivity:!0},{searchControlProvider:"yandex#search"}),a=new e.Placemark(o.getCenter(),{iconLayout:"default#image",iconImageHref:"/wp-content/themes/valkyria/assets/ico/location.svg",iconImageSize:[50,50],iconImageOffset:[-8,-72]});o.behaviors.disable("scrollZoom"),o.geoObjects.add(a)})}let t=document.querySelectorAll(".contact .contact__map");setTimeout(()=>{t.forEach(t=>{let n=t.id,r=t.dataset.mapCoordinatWeight,o=t.dataset.mapCoordinatLongitude;t.dataset.address;e(0,r,o,n)}),e(0,55.813754,37.785,"map")},1e3)};n(26);var v=n(21),b=n.n(v);window.addEventListener("load",(function(){const e=document.querySelector("#modalForm");var t,n;console.log(e),e&&(n=1,(t=e).addEventListener("submit",e=>{e.preventDefault();const r=t.closest(".form-wrapper"),o=document.querySelectorAll('input[form="'.concat(t.id,'"],textarea[form="').concat(t.id,'"]'));r.classList.add("sending"),o.forEach(e=>{e.closest(".input-root").classList.remove("input-field_error"),e.closest(".input-root").querySelector(".error-message").innerText=""});const a=e.target,i=new FormData(a);b()({method:"post",url:"/wp-json/gf/v2/forms/".concat(n,"/submissions"),data:i}).then(e=>{console.log(e)}).catch(e=>{for(let t in e.response.data.validation_messages){let n=document.querySelector('input[data-input-id="'.concat(t,'"]'));n||(n=document.querySelector('textarea[data-input-id="'.concat(t,'"]')));let r=n.parentElement;const o=r.querySelector(".error-message");r.classList.add("input-field_error"),o.innerText=e.response.data.validation_messages[t]}}).finally(()=>{r.classList.remove("sending"),yaCounter56629294.reachGoal("form_"+n)})}))}));n(50);var _=class{constructor(e){this._form=e,this._data=this.serializeFormData(e),this._originData=new FormData(e)}serializeFormData(e){const t=new FormData(e),n={};return t.forEach((e,t)=>{if(n[t]){let r=n[t];Array.isArray(n[t])||(n[t]=[],n[t].push(r)),n[t].push(e)}else n[t]=e}),n}get data(){return this._originData}get serializeData(){return this._data}get form(){return this._form}getData(){return this._originData}getSerializeData(){return this._data}};!function(e){if(document.querySelector(e)){const a=document.querySelector(e),i=document.querySelector("#chMasStartBtn"),c=document.querySelector("#chMasPrevBtn"),s=document.querySelector("#chMasNextBtn"),u=document.querySelector(".form-navigate"),d=document.querySelector(".form-steps"),m=document.querySelectorAll(".form-tab-count"),f=document.querySelector(".form-tabs"),p=document.querySelectorAll(".form-tab"),h=document.querySelector(".form-errors");let y=new l.a({mask:"+7 (999) 999 9999",showMaskOnHover:!1});f.addEventListener("click",e=>{f.childNodes.forEach(t=>{if(t.classList&&t.classList.contains("active-tab")){let n=t.querySelectorAll(".form-tab__input");n&&n.forEach(t=>{e.target==t&&t.childNodes.forEach(e=>{"INPUT"===e.nodeName&&"checkbox"===e.type&&(e.checked=!0)})})}})}),c.addEventListener("click",()=>{n(-1)}),s.addEventListener("click",()=>{n(1)}),i.addEventListener("click",()=>{n(1)}),function(e){e.addEventListener("submit",t=>{t.preventDefault(),function(e){e.querySelector('input[type="text"]')&&e.querySelectorAll('input[type="text"]').forEach(e=>{e.value=e.value.trim()})}(e);let r=new _(e);const a=new URLSearchParams(r.serializeData);a.set("action",e.dataset.action),a.set("site",e.dataset.url),o()&&(fetch(a.get("action"),{method:"POST",body:a}).then(e=>{e.text()}).then(t=>{e.reset()}),n(1))})}(a);let v=0;function t(e){if(p[e].classList.add("active-tab"),h.remove(),u.remove(),0==e){c.style.display="none",s.style.display="none",i.style.display="flex",d.style.display="block",p[e].querySelector(".form-tab__content").append(u)}else{if(p[e].querySelector(".form-tab__content-top")){let t=p[e].querySelector(".form-tab__content");p[e].querySelector(".form-tab__content-top").append(h),t.append(u)}c.style.display="flex",s.style.display="flex",i.style.display="none",d.style.display="block"}var t;p[e].querySelector('input[type="tel"]')&&y.mask(p[e].querySelector('input[type="tel"]')),0!=(t=e)&&t!=p.length-1&&(d.textContent="Вопрос ".concat(v,"/").concat(m.length))}function n(e){if(1==e&&!o())return!1;p[v].classList.remove("active-tab"),v+=e,t(v),window.matchMedia("(max-width: 575px)").matches&&(1==e&&1==v?(p[v].querySelector(".form-tab__content").classList.add("show-cont-anim"),p[v].parentElement.classList.add("tab-max-height"),setTimeout(()=>{p.forEach(e=>{e.querySelector(".form-tab__content")&&e.querySelector(".form-tab__content").classList.remove("show-cont-anim"),e.parentElement.classList.remove("tab-max-height")})},200)):(p[v].querySelector(".form-tab__content").classList.remove("show-cont-anim"),p[v].parentElement.classList.remove("tab-max-height")))}function r(e){e.classList.remove("invalid"),setTimeout(()=>{e.classList.add("invalid")},5)}function o(){let e,t,n=!0;if(t=p[v].querySelectorAll("input[type='checkbox']"),e=p[v].querySelectorAll("input:not([type='checkbox'])"),t.length){let e=!0;t.forEach(t=>{"INPUT"===t.tagName&&t.checked&&(e=!0)}),n=e,n?p[v].classList.remove("invalid"):r(p[v])}if(e.length){let t=!0,o=!0,a=!0,i=!0;e.forEach(e=>{let n="text"===e.getAttribute("type"),a="tel"===e.getAttribute("type"),c=e.value;n||a?n&&(""==c||c.length<2||c.length>40||c.replace(/[A-Za-zА-Яа-я\s]/g,"").trim().length)?(r(e.parentElement),t=!1):a&&(""==c||c.replace(/\D/g,"").length<11)?(r(e.parentElement),o=!1):(e.parentElement.classList.remove("invalid"),n&&(t=!0),a&&(o=!0)):"checkbox"===e.getAttribute("type")&&(e.checked?(e.parentElement.classList.remove("invalid"),i=!0):(r(e.parentElement),i=!0))}),a=!(!t||!o),n=!(!a||!i)}return n}t(v)}}("#form-choise-masters");let g=document.querySelector(".form-tab_after-submit");document.querySelector(".tab-after-submit__close").addEventListener("click",(function(){g.style.display="none"}));let S=document.getElementById("chMasStartBtn"),E=document.getElementById("chMasNextBtn"),w=document.getElementById("chMasPrevBtn"),L=document.querySelector(".form-sale span"),q=L.innerHTML.split(""),k=document.querySelector(".form-steps"),x=k.innerHTML.split("");S.addEventListener("click",(function(){q[0]="500",L.innerHTML=q.join(""),x[7]=Number(x[7])+1,k.innerHTML=x.join("")})),E.addEventListener("click",(function(){let e=Number(q[0]);e+=500,q[0]=e,L.innerHTML=q.join(""),x[7]=Number(x[7])+1,k.innerHTML=x.join("")})),w.addEventListener("click",(function(){let e=Number(q[0]);e-=500,q[0]=e,L.innerHTML=q.join(""),x[7]=Number(x[7])-1,k.innerHTML=x.join("")}));n(51)}});