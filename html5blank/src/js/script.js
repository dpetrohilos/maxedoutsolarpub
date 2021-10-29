var lightbox = GLightbox();
            lightbox.on('open', (target) => {
                console.log('lightbox opened');
            });
            var lightboxDescription = GLightbox({
                selector: '.glightbox2'
            });
            var lightboxVideo = GLightbox({
                selector: '.glightbox3'
            });
            lightboxVideo.on('slide_changed', ({ prev, current }) => {
                console.log('Prev slide', prev);
                console.log('Current slide', current);

                const { slideIndex, slideNode, slideConfig, player } = current;

                if (player) {
                    if (!player.ready) {
                        // If player is not ready
                        player.on('ready', (event) => {
                            // Do something when video is ready
                        });
                    }

                    player.on('play', (event) => {
                        console.log('Started play');
                    });

                    player.on('volumechange', (event) => {
                        console.log('Volume change');
                    });

                    player.on('ended', (event) => {
                        console.log('Video ended');
                    });
                }
            });

            var lightboxInlineIframe = GLightbox({
                selector: '.glightbox4'
            });


var myElement = document.querySelector("#mainnav");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();
    
    
var options = {
    // vertical offset in px before element is first unpinned
    offset : 0,
    // or you can specify offset individually for up/down scroll
    offset: {
        up: 100,
        down: 50
    },
    // scroll tolerance in px before state changes
    tolerance : 0,
    // or you can specify tolerance individually for up/down scroll
    tolerance : {
        up : 5,
        down : 0
    },
    // css classes to apply
    classes : {
        // when element is initialised
        initial : "headroom",
        // when scrolling up
        pinned : "headroom--pinned",
        // when scrolling down
        unpinned : "headroom--unpinned",
        // when above offset
        top : "headroom--top",
        // when below offset
        notTop : "headroom--not-top",
        // when at bottom of scroll area
        bottom : "headroom--bottom",
        // when not at bottom of scroll area
        notBottom : "headroom--not-bottom",
        // when frozen method has been called
        frozen: "headroom--frozen",
        // multiple classes are also supported with a space-separated list
        pinned: "headroom--pinned foo bar"
    },
    // element to listen to scroll events on, defaults to `window`
    scroller : someElement,
    // callback when pinned, `this` is headroom object
    onPin : function() {},
    // callback when unpinned, `this` is headroom object
    onUnpin : function() {},
    // callback when above offset, `this` is headroom object
    onTop : function() {},
    // callback when below offset, `this` is headroom object
    onNotTop : function() {},
    // callback when at bottom of page, `this` is headroom object
    onBottom : function() {},
    // callback when moving away from bottom of page, `this` is headroom object
    onNotBottom : function() {}
};
// pass options as the second argument to the constructor
// supplied options are merged with defaults
var headroom = new Headroom(element, options);


// pop up 

!function(){"use strict";function n(n){var t=this.constructor;return this.then((function(e){return t.resolve(n()).then((function(){return e}))}),(function(e){return t.resolve(n()).then((function(){return t.reject(e)}))}))}function t(n){return new this((function(t,e){if(!n||void 0===n.length)return e(new TypeError(typeof n+" "+n+" is not iterable(cannot read property Symbol(Symbol.iterator))"));var o=Array.prototype.slice.call(n);if(0===o.length)return t([]);var r=o.length;function i(n,e){if(e&&("object"==typeof e||"function"==typeof e)){var a=e.then;if("function"==typeof a)return void a.call(e,(function(t){i(n,t)}),(function(e){o[n]={status:"rejected",reason:e},0==--r&&t(o)}))}o[n]={status:"fulfilled",value:e},0==--r&&t(o)}for(var a=0;a<o.length;a++)i(a,o[a])}))}var e=setTimeout;function o(n){return Boolean(n&&void 0!==n.length)}function r(){}function i(n){if(!(this instanceof i))throw new TypeError("Promises must be constructed via new");if("function"!=typeof n)throw new TypeError("not a function");this._state=0,this._handled=!1,this._value=void 0,this._deferreds=[],s(n,this)}function a(n,t){for(;3===n._state;)n=n._value;0!==n._state?(n._handled=!0,i._immediateFn((function(){var e=1===n._state?t.onFulfilled:t.onRejected;if(null!==e){var o;try{o=e(n._value)}catch(n){return void c(t.promise,n)}u(t.promise,o)}else(1===n._state?u:c)(t.promise,n._value)}))):n._deferreds.push(t)}function u(n,t){try{if(t===n)throw new TypeError("A promise cannot be resolved with itself.");if(t&&("object"==typeof t||"function"==typeof t)){var e=t.then;if(t instanceof i)return n._state=3,n._value=t,void p(n);if("function"==typeof e)return void s((o=e,r=t,function(){o.apply(r,arguments)}),n)}n._state=1,n._value=t,p(n)}catch(t){c(n,t)}var o,r}function c(n,t){n._state=2,n._value=t,p(n)}function p(n){2===n._state&&0===n._deferreds.length&&i._immediateFn((function(){n._handled||i._unhandledRejectionFn(n._value)}));for(var t=0,e=n._deferreds.length;t<e;t++)a(n,n._deferreds[t]);n._deferreds=null}function f(n,t,e){this.onFulfilled="function"==typeof n?n:null,this.onRejected="function"==typeof t?t:null,this.promise=e}function s(n,t){var e=!1;try{n((function(n){e||(e=!0,u(t,n))}),(function(n){e||(e=!0,c(t,n))}))}catch(n){if(e)return;e=!0,c(t,n)}}i.prototype.catch=function(n){return this.then(null,n)},i.prototype.then=function(n,t){var e=new this.constructor(r);return a(this,new f(n,t,e)),e},i.prototype.finally=n,i.all=function(n){return new i((function(t,e){if(!o(n))return e(new TypeError("Promise.all accepts an array"));var r=Array.prototype.slice.call(n);if(0===r.length)return t([]);var i=r.length;function a(n,o){try{if(o&&("object"==typeof o||"function"==typeof o)){var u=o.then;if("function"==typeof u)return void u.call(o,(function(t){a(n,t)}),e)}r[n]=o,0==--i&&t(r)}catch(n){e(n)}}for(var u=0;u<r.length;u++)a(u,r[u])}))},i.allSettled=t,i.resolve=function(n){return n&&"object"==typeof n&&n.constructor===i?n:new i((function(t){t(n)}))},i.reject=function(n){return new i((function(t,e){e(n)}))},i.race=function(n){return new i((function(t,e){if(!o(n))return e(new TypeError("Promise.race accepts an array"));for(var r=0,a=n.length;r<a;r++)i.resolve(n[r]).then(t,e)}))},i._immediateFn="function"==typeof setImmediate&&function(n){setImmediate(n)}||function(n){e(n,0)},i._unhandledRejectionFn=function(n){"undefined"!=typeof console&&console&&console.warn("Possible Unhandled Promise Rejection:",n)};var l=function(){if("undefined"!=typeof self)return self;if("undefined"!=typeof window)return window;if("undefined"!=typeof global)return global;throw new Error("unable to locate global object")}();function d(){}function m(n){return n()}function h(){return Object.create(null)}function g(n){n.forEach(m)}function v(n){return"function"==typeof n}function b(n,t){return n!=n?t==t:n!==t||n&&"object"==typeof n||"function"==typeof n}function y(n,t,e){n.$$.on_destroy.push(function(n){for(var t=[],e=arguments.length-1;e-- >0;)t[e]=arguments[e+1];if(null==n)return d;var o=n.subscribe.apply(n,t);return o.unsubscribe?function(){return o.unsubscribe()}:o}(t,e))}function w(n,t,e,o){return n[1]&&o?function(n,t){for(var e in t)n[e]=t[e];return n}(e.ctx.slice(),n[1](o(t))):e.ctx}function _(n,t,e,o,r,i,a){var u=function(n,t,e,o){if(n[2]&&o){var r=n[2](o(e));if(void 0===t.dirty)return r;if("object"==typeof r){for(var i=[],a=Math.max(t.dirty.length,r.length),u=0;u<a;u+=1)i[u]=t.dirty[u]|r[u];return i}return t.dirty|r}return t.dirty}(t,o,r,i);if(u){var c=w(t,e,o,a);n.p(c,u)}}function k(n,t){n.appendChild(t)}function x(n,t,e){n.insertBefore(t,e||null)}function P(n){n.parentNode.removeChild(n)}function $(n){return document.createElement(n)}function A(n){return document.createTextNode(n)}function E(){return A(" ")}function j(){return A("")}function C(n,t,e,o){return n.addEventListener(t,e,o),function(){return n.removeEventListener(t,e,o)}}function M(n,t,e){null==e?n.removeAttribute(t):n.getAttribute(t)!==e&&n.setAttribute(t,e)}"function"!=typeof l.Promise?l.Promise=i:l.Promise.prototype.finally?l.Promise.allSettled||(l.Promise.allSettled=t):l.Promise.prototype.finally=n,Array.from||(Array.from=function(){var n;try{n=Symbol.iterator?Symbol.iterator:"Symbol(Symbol.iterator)"}catch(t){n="Symbol(Symbol.iterator)"}var t=Object.prototype.toString,e=function(n){return"function"==typeof n||"[object Function]"===t.call(n)},o=Math.pow(2,53)-1,r=function(n){var t=function(n){var t=Number(n);return isNaN(t)?0:0!==t&&isFinite(t)?(t>0?1:-1)*Math.floor(Math.abs(t)):t}(n);return Math.min(Math.max(t,0),o)},i=function(t,e){var o=t&&e[n]();return function(n){return t?o.next():e[n]}},a=function(n,t,e,o,r,i){for(var a=0;a<e||r;){var u=o(a),c=r?u.value:u;if(r&&u.done)return t;t[a]=i?void 0===n?i(c,a):i.call(n,c,a):c,a+=1}if(r)throw new TypeError("Array.from: provided arrayLike or iterator has length more then 2 ** 52 - 1");return t.length=e,t};return function(t){var o=this,u=Object(t),c=e(u[n]);if(null==t&&!c)throw new TypeError("Array.from requires an array-like object or iterator - not null or undefined");var p,f=arguments.length>1?arguments[1]:void 0;if(void 0!==f){if(!e(f))throw new TypeError("Array.from: when provided, the second argument must be a function");arguments.length>2&&(p=arguments[2])}var s=r(u.length),l=e(o)?Object(new o(s)):new Array(s);return a(p,l,s,i(c,u),c,f)}}()),String.prototype.startsWith||Object.defineProperty(String.prototype,"startsWith",{value:function(n,t){var e=t>0?0|t:0;return this.substring(e,e+n.length)===n}}),"function"!=typeof Object.assign&&Object.defineProperty(Object,"assign",{value:function(n,t){var e=arguments;if(null==n)throw new TypeError("Cannot convert undefined or null to object");for(var o=Object(n),r=1;r<arguments.length;r++){var i=e[r];if(null!=i)for(var a in i)Object.prototype.hasOwnProperty.call(i,a)&&(o[a]=i[a])}return o},writable:!0,configurable:!0}),[].fill||(Array.prototype.fill=function(n){for(var t=Object(this),e=parseInt(t.length,10),o=arguments[1],r=parseInt(o,10)||0,i=r<0?Math.max(e+r,0):Math.min(r,e),a=arguments[2],u=void 0===a?e:parseInt(a)||0,c=u<0?Math.max(e+u,0):Math.min(u,e);i<c;i++)t[i]=n;return t});var T,S=function(n){void 0===n&&(n=null),this.a=n,this.e=this.n=null};function O(n){T=n}function L(n){(function(){if(!T)throw new Error("Function called outside component initialization");return T})().$$.on_mount.push(n)}S.prototype.m=function(n,t,e){void 0===e&&(e=null),this.e||(this.e=$(t.nodeName),this.t=t,this.h(n)),this.i(e)},S.prototype.h=function(n){this.e.innerHTML=n,this.n=Array.from(this.e.childNodes)},S.prototype.i=function(n){for(var t=0;t<this.n.length;t+=1)x(this.t,this.n[t],n)},S.prototype.p=function(n){this.d(),this.h(n),this.i(this.a)},S.prototype.d=function(){this.n.forEach(P)};var N=[],q=[],z=[],I=[],F=Promise.resolve(),R=!1;function H(n){z.push(n)}var X=!1,W=new Set;function Z(){if(!X){X=!0;do{for(var n=0;n<N.length;n+=1){var t=N[n];O(t),U(t.$$)}for(O(null),N.length=0;q.length;)q.pop()();for(var e=0;e<z.length;e+=1){var o=z[e];W.has(o)||(W.add(o),o())}z.length=0}while(N.length);for(;I.length;)I.pop()();R=!1,X=!1,W.clear()}}function U(n){if(null!==n.fragment){n.update(),g(n.before_update);var t=n.dirty;n.dirty=[-1],n.fragment&&n.fragment.p(n.ctx,t),n.after_update.forEach(H)}}var Y,B=new Set;function D(){Y={r:0,c:[],p:Y}}function G(){Y.r||g(Y.c),Y=Y.p}function J(n,t){n&&n.i&&(B.delete(n),n.i(t))}function V(n,t,e,o){if(n&&n.o){if(B.has(n))return;B.add(n),Y.c.push((function(){B.delete(n),o&&(e&&n.d(1),o())})),n.o(t)}}var K="undefined"!=typeof window?window:"undefined"!=typeof globalThis?globalThis:global;function Q(n){n&&n.c()}function nn(n,t,e){var o=n.$$,r=o.fragment,i=o.on_mount,a=o.on_destroy,u=o.after_update;r&&r.m(t,e),H((function(){var t=i.map(m).filter(v);a?a.push.apply(a,t):g(t),n.$$.on_mount=[]})),u.forEach(H)}function tn(n,t){var e=n.$$;null!==e.fragment&&(g(e.on_destroy),e.fragment&&e.fragment.d(t),e.on_destroy=e.fragment=null,e.ctx=[])}function en(n,t){-1===n.$$.dirty[0]&&(N.push(n),R||(R=!0,F.then(Z)),n.$$.dirty.fill(0)),n.$$.dirty[t/31|0]|=1<<t%31}function on(n,t,e,o,r,i,a){void 0===a&&(a=[-1]);var u=T;O(n);var c=t.props||{},p=n.$$={fragment:null,ctx:null,props:i,update:d,not_equal:r,bound:h(),on_mount:[],on_destroy:[],before_update:[],after_update:[],context:new Map(u?u.$$.context:[]),callbacks:h(),dirty:a,skip_bound:!1},f=!1;if(p.ctx=e?e(n,c,(function(t,e){for(var o=[],i=arguments.length-2;i-- >0;)o[i]=arguments[i+2];var a=o.length?o[0]:e;return p.ctx&&r(p.ctx[t],p.ctx[t]=a)&&(!p.skip_bound&&p.bound[t]&&p.bound[t](a),f&&en(n,t)),e})):[],p.update(),f=!0,g(p.before_update),p.fragment=!!o&&o(p.ctx),t.target){if(t.hydrate){var s=function(n){return Array.from(n.childNodes)}(t.target);p.fragment&&p.fragment.l(s),s.forEach(P)}else p.fragment&&p.fragment.c();t.intro&&J(n.$$.fragment),nn(n,t.target,t.anchor),Z()}O(u)}var rn=function(){};function an(n){var t,e,o=n[3].default,r=function(n,t,e,o){if(n){var r=w(n,t,e,o);return n[0](r)}}(o,n,n[2],null);return{c:function(){t=$("div"),r&&r.c()},m:function(o,i){x(o,t,i),r&&r.m(t,null),n[4](t),e=!0},p:function(n,t){var e=t[0];r&&r.p&&4&e&&_(r,o,n,n[2],e,null,null)},i:function(n){e||(J(r,n),e=!0)},o:function(n){V(r,n),e=!1},d:function(e){e&&P(t),r&&r.d(e),n[4](null)}}}function un(n,t,e){var o=t.$$slots;void 0===o&&(o={});var r,i,a,u=t.$$scope,c=t.target;return void 0===c&&(c=document.body),L((function(){if("string"==typeof c){if(null===(r=document.querySelector(c)))return function(){}}else{if(!(c instanceof HTMLElement))throw new TypeError("Unknown target type: "+typeof c+". Allowed types: String (CSS selector), HTMLElement.");r=c}return i=document.createElement("div"),r.appendChild(i),i.appendChild(a),function(){r.removeChild(i)}})),n.$$set=function(n){"target"in n&&e(1,c=n.target),"$$scope"in n&&e(2,u=n.$$scope)},[a,c,u,o,function(n){q[n?"unshift":"push"]((function(){e(0,a=n)}))}]}rn.prototype.$destroy=function(){tn(this,1),this.$destroy=d},rn.prototype.$on=function(n,t){var e=this.$$.callbacks[n]||(this.$$.callbacks[n]=[]);return e.push(t),function(){var n=e.indexOf(t);-1!==n&&e.splice(n,1)}},rn.prototype.$set=function(n){var t;this.$$set&&(t=n,0!==Object.keys(t).length)&&(this.$$.skip_bound=!0,this.$$set(n),this.$$.skip_bound=!1)};var cn=function(n){function t(t){n.call(this),on(this,t,un,an,b,{target:1})}return n&&(t.__proto__=n),t.prototype=Object.create(n&&n.prototype),t.prototype.constructor=t,t}(rn),pn=[];function fn(n,t){var e;void 0===t&&(t=d);var o=[];function r(t){if(b(n,t)&&(n=t,e)){for(var r=!pn.length,i=0;i<o.length;i+=1){var a=o[i];a[1](),pn.push(a,n)}if(r){for(var u=0;u<pn.length;u+=2)pn[u][0](pn[u+1]);pn.length=0}}}return{set:r,update:function(t){r(t(n))},subscribe:function(i,a){void 0===a&&(a=d);var u=[i,a];return o.push(u),1===o.length&&(e=t(r)||d),i(n),function(){var n=o.indexOf(u);-1!==n&&o.splice(n,1),0===o.length&&(e(),e=null)}}}}var sn=/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream,ln=function(n){var t=n.height;void 0===t&&(t=300);var e=n.guidedMode,o=n.border,r=n.borderColor,i=n.isPopup,a=n.requestedHeight;return"\n        width: 100%;\n        box-sizing: border-box;\n        "+(o?"border: 3px solid "+(r||"#eee")+"; border-radius: 4px;":"")+"\n        "+(e?"\n          height: "+(i&&window.innerWidth<600?"95vh":"90vh")+";\n          max-height: "+(a||"900px")+";\n        ":"height: "+t+"px;")},dn=function(n){return n?"":"\n      opacity: 0;\n      z-index: -1;\n      pointer-events: none;\n      position: absolute;\n    "},mn=function(n){n.guidedMode;return"\n        width: 100%;\n        height: 100%;\n        top: 0;\n        left: 0;\n        bottom: 0;\n        right: 0;\n        margin: 0;\n        z-index: 1000000;\n        position: absolute;\n    "},hn=function(n){n.isGuidedMode;var t=n.isTakeover;n.isPopping;return"\n"+(t?"":"[data-paperform-id] {\n  position: relative;\n}")+"\n\na.Paperform__link {\n  display: block;\n  left: 0;\n  bottom: 4px;\n  right: 0;\n  text-decoration: none;\n  font-style: initial;\n  text-align: center;\n  position: absolute;\n  color: rgba(0,0,0,0.3);\n  text-transform: none;\n  padding: 2px;\n  line-height: 17px;\n  font-family: Lato, Verdana;\n  text-decoration: none;\n  font-weight: 400;\n  font-size: 11px;\n  color: #bbb;\n  opacity: .4;\n  transition: color .2s;\n}\n\na.Paperform__link:hover {\n  color: #79a4ca;\n}\n\na.Paperform__link--takeover {\n  background-color: #f8f8f8;\n  text-transform: uppercase;\n  bottom: 0;\n}\n\n.Paperform__popupwrapper {\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n\n  z-index: 9434723232;\n  padding: 0 30px;\n  \n  align-items: center;\n}\n\n.Paperform__spinner--visible {\n  position: relative;\n}\n\n.Paperform__spinner {\n  position: absolute;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  top: 0;\n  z-index: 1;\n}\n\n.Paperform__popupoverlay {\n  background-color: rgba(250,250,250,.6);\n  opacity: 0;\n  transition: opacity .7s;\n  position: fixed;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom:  0;\n  z-index: -1;\n}\n\n.Paperform__popupwrapper--active .Paperform__popupoverlay {\n  opacity: 1;\n}\n\n.Paperform__popupclose {\n  position: fixed;\n  top: 42px;\n  right: 45px;\n  width: 30px;\n  height: 30px;\n  line-height: 30px;\n  text-align: center;\n  font-family: Arial;\n  font-weight: 400;\n  font-size: 30px;\n  color: #333;\n  cursor: pointer;\n  z-index: 10000;\n  opacity: .7;\n  transition: opacity .3s;\n}\n\n.Paperform__popupclose2 {\n  border-bottom: 2px solid #333;\n  -webkit-transform: rotate(-45deg);\n  transform: rotate(-45deg);\n  position: absolute;\n  left: 0;\n  top: 0;\n  width: 100%;\n  margin-top: 13px;\n}\n\n.Paperform__popupclose1 {\n  border-bottom: 2px solid #333;\n  -webkit-transform: rotate(45deg);\n  transform: rotate(45deg);\n  position: absolute;\n  left: 0;\n  top: 0;\n  margin-top: 13px;\n  width: 100%;\n}\n\n.Paperform__popupclose:hover {\n  opacity: 1;\n}\n\n.Paperform__popupcontent {\n  background-color: #FFF;\n  background-size: 100px;\n  margin: 30px auto;\n  width: 100%;\n  max-width: 1024px;\n  box-shadow: 0px 25px 100px -20px rgba(0,0,0,.4);\n  border-radius: 4px;\n  overflow: hidden;\n  -webkit-overflow-scrolling: touch;\n}\n\n.Paperform__popupcontent iframe {\n  opacity: 0;\n  position: relative;\n  z-index: 2;\n  display: block;\n}\n\n@media screen and (max-width: "+(sn?1e4:600)+"px) {\n  .Paperform__popupwrapper {\n    bottom: initial;\n    min-height: 100vh;\n    overflow: initial;\n  }\n\n  .Paperform--locked > *:not(.Paperform__popupwrapperParent) {\n    display: none !important;\n  }\n\n  .Paperform__popupcontent iframe {\n    min-height: 100% !important;\n  }\n\n  .Paperform__popupcontent {\n    margin: 0;\n    box-shadow: none;\n    min-height: 100vh;\n    max-height: 100%;\n    height: 100%;\n  }\n  .Paperform__popupwrapper {\n    padding: 0;\n  }\n  .Paperform__popupclose {\n    right: 15px;\n    top: 15px;\n  }\n}\n\n@media screen and (min-width: "+(sn?1e4:1100)+"px) {\n  .Paperform__popupclose {\n    right: 15px;\n    top: 15px;\n  }\n}\n\n.Paperform__popupwrapper:not(.Paperform__popupwrapper--loaded) iframe {\n  height: 200px;\n}\n\n.Paperform__popupwrapper--loaded .Paperform__popupcontent iframe {\n  opacity: 1;\n}\n\n\n.Paperform--locked {\n  min-height: 100vh;\n  height: initial;\n    "+(sn?"overflow-x: initial;\n    overflow-y: initial;":"")+"\n}\n\n.sk-folding-cube {\n  position: absolute;\n  left: 50%;\n  top: 50%;\n  width: 50px;\n  height: 50px;\n  margin-top: -25px;\n  margin-left: -25px;\n  opacity: 1;\n  transition: all .3s;\n  transform: rotate(45deg);\n}\n\n  .Paperform__popupwrapper--loaded .sk-folding-cube {\n      opacity: 0;\n  }\n\n  .sk-folding-cube .sk-cube {\n    float: left;\n    width: 50%;\n    height: 50%;\n    position: relative;\n    -webkit-transform: scale(1.1);\n        -ms-transform: scale(1.1);\n            transform: scale(1.1); \n  }\n  .sk-folding-cube .sk-cube:before {\n    content: '';\n    position: absolute;\n    top: 0;\n    left: 0;\n    width: 100%;\n    height: 100%;\n    background-color: #f0f2ff;\n    -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;\n            animation: sk-foldCubeAngle 2.4s infinite linear both;\n    -webkit-transform-origin: 100% 100%;\n        -ms-transform-origin: 100% 100%;\n            transform-origin: 100% 100%;\n  }\n  .sk-folding-cube .sk-cube2 {\n    -webkit-transform: scale(1.1) rotateZ(90deg);\n            transform: scale(1.1) rotateZ(90deg);\n  }\n  .sk-folding-cube .sk-cube3 {\n    -webkit-transform: scale(1.1) rotateZ(180deg);\n            transform: scale(1.1) rotateZ(180deg);\n  }\n  .sk-folding-cube .sk-cube4 {\n    -webkit-transform: scale(1.1) rotateZ(270deg);\n            transform: scale(1.1) rotateZ(270deg);\n  }\n  .sk-folding-cube .sk-cube2:before {\n    -webkit-animation-delay: 0.3s;\n            animation-delay: 0.3s;\n  }\n  .sk-folding-cube .sk-cube3:before {\n    -webkit-animation-delay: 0.6s;\n            animation-delay: 0.6s; \n  }\n  .sk-folding-cube .sk-cube4:before {\n    -webkit-animation-delay: 0.9s;\n            animation-delay: 0.9s;\n  }\n  @-webkit-keyframes sk-foldCubeAngle {\n    0%, 10% {\n      -webkit-transform: perspective(140px) rotateX(-180deg);\n              transform: perspective(140px) rotateX(-180deg);\n      opacity: 0; \n    } 25%, 75% {\n      -webkit-transform: perspective(140px) rotateX(0deg);\n              transform: perspective(140px) rotateX(0deg);\n      opacity: 1; \n    } 90%, 100% {\n      -webkit-transform: perspective(140px) rotateY(180deg);\n              transform: perspective(140px) rotateY(180deg);\n      opacity: 0; \n    } \n  }\n\n  @keyframes sk-foldCubeAngle {\n    0%, 10% {\n      -webkit-transform: perspective(140px) rotateX(-180deg);\n              transform: perspective(140px) rotateX(-180deg);\n      opacity: 0; \n    } 25%, 75% {\n      -webkit-transform: perspective(140px) rotateX(0deg);\n              transform: perspective(140px) rotateX(0deg);\n      opacity: 1; \n    } 90%, 100% {\n      -webkit-transform: perspective(140px) rotateY(180deg);\n              transform: perspective(140px) rotateY(180deg);\n      opacity: 0; \n    }\n}\n\n"+(t?"\nbody {\n    margin: 0;\n    padding: 0;\n    height: 100%;\n    overscroll-behavior: contain;\n    "+(sn?"-webkit-transform: translate3d(0,0,0);\n        transform: translate3d(0,0,0);":"")+"\n}\nhtml {\n    height: 100%;\n    overflow-x: initial; \n}\n":"")+"\n.Paperform__popupwrapper--closed {\n    overflow: hidden;\n}\n\n.Paperform__popupwrapper--closed .Paperform__popupcontent {\n    position: absolute;\n}\n\n.Paperform__popupwrapper--active .Paperform__popupcontent {\n    position: static;\n}\n"};!function(){if("function"==typeof window.CustomEvent)return!1;function n(n,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var e=document.createEvent("CustomEvent");return e.initCustomEvent(n,t.bubbles,t.cancelable,t.detail),e}n.prototype=window.Event.prototype,window.CustomEvent=n}();var gn=window.CustomEvent;function vn(n){var t;return{c:function(){(t=$("div")).innerHTML='<div class="sk-cube1 sk-cube"></div> \n    <div class="sk-cube2 sk-cube"></div> \n    <div class="sk-cube4 sk-cube"></div> \n    <div class="sk-cube3 sk-cube"></div>',M(t,"class","sk-folding-cube")},m:function(n,e){x(n,t,e)},p:d,i:d,o:d,d:function(n){n&&P(t)}}}var bn=function(n){function t(t){n.call(this),on(this,t,null,vn,b,{})}return n&&(t.__proto__=n),t.prototype=Object.create(n&&n.prototype),t.prototype.constructor=t,t}(rn);function yn(){}function wn(n){if("function"==typeof n)return n;if(!n)return yn;var t=n.split(".").reduce((function(n,t){return n[t]}),window);return"function"==typeof t?t:yn}"undefined"!=typeof globalThis?globalThis:"undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self&&self;var _n,kn,xn=(function(n,t){
/*! lozad.js - v1.16.0 - 2020-09-06
  * https://github.com/ApoorvSaxena/lozad.js
  * Copyright (c) 2020 Apoorv Saxena; Licensed MIT */
n.exports=function(){var n="undefined"!=typeof document&&document.documentMode,t={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var e=t.querySelector("img"),o=!1;null===e&&(e=document.createElement("img"),o=!0),n&&t.getAttribute("data-iesrc")&&(e.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(e.alt=t.getAttribute("data-alt")),o&&t.append(e)}if("video"===t.nodeName.toLowerCase()&&!t.getAttribute("data-src")&&t.children){for(var r=t.children,i=void 0,a=0;a<=r.length-1;a++)(i=r[a].getAttribute("data-src"))&&(r[a].src=i);t.load()}t.getAttribute("data-poster")&&(t.poster=t.getAttribute("data-poster")),t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&t.setAttribute("srcset",t.getAttribute("data-srcset"));var u=",";if(t.getAttribute("data-background-delimiter")&&(u=t.getAttribute("data-background-delimiter")),t.getAttribute("data-background-image"))t.style.backgroundImage="url('"+t.getAttribute("data-background-image").split(u).join("'),url('")+"')";else if(t.getAttribute("data-background-image-set")){var c=t.getAttribute("data-background-image-set").split(u),p=c[0].substr(0,c[0].indexOf(" "))||c[0];p=-1===p.indexOf("url(")?"url("+p+")":p,1===c.length?t.style.backgroundImage=p:t.setAttribute("style",(t.getAttribute("style")||"")+"background-image: "+p+"; background-image: -webkit-image-set("+c+"); background-image: image-set("+c+")")}t.getAttribute("data-toggle-class")&&t.classList.toggle(t.getAttribute("data-toggle-class"))},loaded:function(){}};function e(n){n.setAttribute("data-loaded",!0)}var o=function(n){return"true"===n.getAttribute("data-loaded")},r=function(n){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:document;return n instanceof Element?[n]:n instanceof NodeList?n:t.querySelectorAll(n)};return function(){var n,i,a=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".lozad",u=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},c=Object.assign({},t,u),p=c.root,f=c.rootMargin,s=c.threshold,l=c.load,d=c.loaded,m=void 0;"undefined"!=typeof window&&window.IntersectionObserver&&(m=new IntersectionObserver((n=l,i=d,function(t,r){t.forEach((function(t){(0<t.intersectionRatio||t.isIntersecting)&&(r.unobserve(t.target),o(t.target)||(n(t.target),e(t.target),i(t.target)))}))}),{root:p,rootMargin:f,threshold:s}));for(var h,g=r(a,p),v=0;v<g.length;v++)(h=g[v]).getAttribute("data-placeholder-background")&&(h.style.background=h.getAttribute("data-placeholder-background"));return{observe:function(){for(var n=r(a,p),t=0;t<n.length;t++)o(n[t])||(m?m.observe(n[t]):(l(n[t]),e(n[t]),d(n[t])))},triggerLoad:function(n){o(n)||(l(n),e(n),d(n))},observer:m}}}()}(kn={path:_n,exports:{},require:function(n,t){return function(){throw new Error("Dynamic requires are not currently supported by @rollup/plugin-commonjs")}(null==t&&kn.path)}},kn.exports),kn.exports),Pn=K.document,$n=K.window;function An(n){var t,e;return t=new bn({}),{c:function(){Q(t.$$.fragment)},m:function(n,o){nn(t,n,o),e=!0},i:function(n){e||(J(t.$$.fragment,n),e=!0)},o:function(n){V(t.$$.fragment,n),e=!1},d:function(n){tn(t,n)}}}function En(n){var t,e;return t=new bn({}),{c:function(){Q(t.$$.fragment)},m:function(n,o){nn(t,n,o),e=!0},i:function(n){e||(J(t.$$.fragment,n),e=!0)},o:function(n){V(t.$$.fragment,n),e=!1},d:function(n){tn(t,n)}}}function jn(n){var t,e;return t=new bn({}),{c:function(){Q(t.$$.fragment)},m:function(n,o){nn(t,n,o),e=!0},i:function(n){e||(J(t.$$.fragment,n),e=!0)},o:function(n){V(t.$$.fragment,n),e=!1},d:function(n){tn(t,n)}}}function Cn(n){var t,e,o,r,i,a,u,c,p,f,s,l,d,m,h,v,b=n[11]&&!n[5]&&jn();return{c:function(){t=$("div"),e=$("div"),o=E(),(r=$("div")).innerHTML='<div class="Paperform__popupclose1"></div> \n\t\t\t\t<div class="Paperform__popupclose2"></div>',i=E(),a=$("div"),u=$("iframe"),s=E(),b&&b.c(),M(e,"class","Paperform__popupoverlay"),M(r,"class","Paperform__popupclose"),M(u,"title",n[9]),M(u,"data-src",c=n[1]&&n[17]),M(u,"frameborder","0"),u.src!==(p=!n[1]&&n[17]||void 0)&&M(u,"src",p),u.allowFullscreen=!0,u.allowPaymentRequest=!0,M(u,"width","100%"),M(u,"allow","geolocation *;camera *;microphone *;"),M(u,"style",f=ln({height:n[4],guidedMode:n[3],isPopup:n[15]})),M(a,"class","Paperform__popupcontent"),M(t,"style",l=dn(n[2])),M(t,"class",d="Paperform__popupwrapper "+(n[5]?"Paperform__popupwrapper--loaded":"")+" "+(n[2]?"Paperform__popupwrapper--active":"Paperform__popupwrapper--closed"))},m:function(c,p){x(c,t,p),k(t,e),k(t,o),k(t,r),k(t,i),k(t,a),k(a,u),n[28](u),k(a,s),b&&b.m(a,null),n[29](t),m=!0,h||(v=[C(r,"click",n[21]),C(u,"load",n[23])],h=!0)},p:function(n,e){(!m||2&e[0]&&c!==(c=n[1]&&n[17]))&&M(u,"data-src",c),(!m||2&e[0]&&u.src!==(p=!n[1]&&n[17]||void 0))&&M(u,"src",p),(!m||24&e[0]&&f!==(f=ln({height:n[4],guidedMode:n[3],isPopup:n[15]})))&&M(u,"style",f),n[11]&&!n[5]?b?32&e[0]&&J(b,1):((b=jn()).c(),J(b,1),b.m(a,null)):b&&(D(),V(b,1,1,(function(){b=null})),G()),(!m||4&e[0]&&l!==(l=dn(n[2])))&&M(t,"style",l),(!m||36&e[0]&&d!==(d="Paperform__popupwrapper "+(n[5]?"Paperform__popupwrapper--loaded":"")+" "+(n[2]?"Paperform__popupwrapper--active":"Paperform__popupwrapper--closed")))&&M(t,"class",d)},i:function(n){m||(J(b),m=!0)},o:function(n){V(b),m=!1},d:function(e){e&&P(t),n[28](null),b&&b.d(),n[29](null),h=!1,g(v)}}}function Mn(n){var t,e,o,r,i,a,u,c,p,f="<style>"+hn(Object.assign({},n[0],{isPopping:n[2],isGuidedMode:n[3]}))+"</style>",s=n[16]&&function(n){var t,e,o,r,i,a,u,c,p,f=n[11]&&!n[5]&&An();return{c:function(){t=$("iframe"),i=E(),f&&f.c(),a=j(),M(t,"title",n[9]),M(t,"frameborder","0"),t.src!==(e=!n[1]&&n[17]||void 0)&&M(t,"src",e),M(t,"data-src",o=n[1]&&n[17]||""),t.allowFullscreen=!0,t.allowPaymentRequest=!0,M(t,"width","100%"),M(t,"allow","geolocation *;camera *;microphone *;"),M(t,"style",r=ln({height:n[4],guidedMode:n[3],border:n[10],borderColor:n[12],requestedHeight:n[13]}))},m:function(e,o){x(e,t,o),n[25](t),x(e,i,o),f&&f.m(e,o),x(e,a,o),u=!0,c||(p=C(t,"load",n[23]),c=!0)},p:function(n,i){(!u||2&i[0]&&t.src!==(e=!n[1]&&n[17]||void 0))&&M(t,"src",e),(!u||2&i[0]&&o!==(o=n[1]&&n[17]||""))&&M(t,"data-src",o),(!u||24&i[0]&&r!==(r=ln({height:n[4],guidedMode:n[3],border:n[10],borderColor:n[12],requestedHeight:n[13]})))&&M(t,"style",r),n[11]&&!n[5]?f?32&i[0]&&J(f,1):((f=An()).c(),J(f,1),f.m(a.parentNode,a)):f&&(D(),V(f,1,1,(function(){f=null})),G())},i:function(n){u||(J(f),u=!0)},o:function(n){V(f),u=!1},d:function(e){e&&P(t),n[25](null),e&&P(i),f&&f.d(e),e&&P(a),c=!1,p()}}}(n),l=n[14]&&function(n){var t,e,o,r,i,a,u,c,p,f=n[11]&&!n[5]&&En();return{c:function(){t=$("iframe"),i=E(),f&&f.c(),a=j(),M(t,"title",n[9]),M(t,"frameborder","0"),t.src!==(e=!n[1]&&n[17]||void 0)&&M(t,"src",e),M(t,"data-src",o=n[1]&&n[17]||""),t.allowFullscreen=!0,t.allowPaymentRequest=!0,M(t,"width","100%"),M(t,"allow","geolocation *;camera *;microphone *;"),M(t,"style",r=mn({height:n[4],guidedMode:n[3],border:n[10]}))},m:function(e,o){x(e,t,o),n[26](t),x(e,i,o),f&&f.m(e,o),x(e,a,o),u=!0,c||(p=C(t,"load",n[23]),c=!0)},p:function(n,i){(!u||2&i[0]&&t.src!==(e=!n[1]&&n[17]||void 0))&&M(t,"src",e),(!u||2&i[0]&&o!==(o=n[1]&&n[17]||""))&&M(t,"data-src",o),(!u||24&i[0]&&r!==(r=mn({height:n[4],guidedMode:n[3],border:n[10]})))&&M(t,"style",r),n[11]&&!n[5]?f?32&i[0]&&J(f,1):((f=En()).c(),J(f,1),f.m(a.parentNode,a)):f&&(D(),V(f,1,1,(function(){f=null})),G())},i:function(n){u||(J(f),u=!0)},o:function(n){V(f),u=!1},d:function(e){e&&P(t),n[26](null),e&&P(i),f&&f.d(e),e&&P(a),c=!1,p()}}}(n),d=n[15]&&function(n){var t,e,o,r;return o=new cn({props:{$$slots:{default:[Cn]},$$scope:{ctx:n}}}),{c:function(){t=$("span"),e=E(),Q(o.$$.fragment)},m:function(i,a){x(i,t,a),n[27](t),x(i,e,a),nn(o,i,a),r=!0},p:function(n,t){var e={};382&t[0]|524288&t[1]&&(e.$$scope={dirty:t,ctx:n}),o.$set(e)},i:function(n){r||(J(o.$$.fragment,n),r=!0)},o:function(n){V(o.$$.fragment,n),r=!1},d:function(r){r&&P(t),n[27](null),r&&P(e),tn(o,r)}}}(n);return{c:function(){e=j(),o=E(),s&&s.c(),r=E(),l&&l.c(),i=E(),d&&d.c(),a=j(),t=new S(e)},m:function(m,h){t.m(f,Pn.head),k(Pn.head,e),x(m,o,h),s&&s.m(m,h),x(m,r,h),l&&l.m(m,h),x(m,i,h),d&&d.m(m,h),x(m,a,h),u=!0,c||(p=[C($n,"scroll",n[24]),C($n,"keydown",n[22])],c=!0)},p:function(n,e){(!u||13&e[0])&&f!==(f="<style>"+hn(Object.assign({},n[0],{isPopping:n[2],isGuidedMode:n[3]}))+"</style>")&&t.p(f),n[16]&&s.p(n,e),n[14]&&l.p(n,e),n[15]&&d.p(n,e)},i:function(n){u||(J(s),J(l),J(d),u=!0)},o:function(n){V(s),V(l),V(d),u=!1},d:function(n){P(e),n&&t.d(),n&&P(o),s&&s.d(n),n&&P(r),l&&l.d(n),n&&P(i),d&&d.d(n),n&&P(a),c=!1,g(p)}}}function Tn(){if(window.paypal||window._setting_up_paypal)return!1;window._setting_up_paypal=!0;var n=document.createElement("script");n.async=!0,n.src="https://www.paypalobjects.com/api/checkout.min.js",n.setAttribute("data-version-4",""),document.body?document.body.appendChild(n):document.addEventListener("DOMContentLoaded",(function(){document.body.appendChild(n)}))}function Sn(n){var t=n.url,e=0!==t.toLowerCase().indexOf("http")?"http://"+t:t;window.top.location.href=e}function On(n,t,e){var o,r,i,a=t.params;void 0===a&&(a={});var u=a.formTitle;void 0===u&&(u="Embedded form");var c=a.id,p=a.lazy,f=a.border,s=a.onSubmit,l=a.takeover,d=a.popup,m=a.onPageChange,h=a.scrollOffset;void 0===h&&(h=0);var g=a.noScroll,v=a.onClose,b=a.showSpinner,w=a.borderColor,_=a.height,k=a.onload,x=a.popupOnLoad;void 0===x&&(x=!1);var P=x,$=!1,A=!1,E=a.isTakeover=l,j=a.isPopup=d&&!E,C=a.isInline=!j&&!E;E&&(p=!1);var M=function(n){var t=n.inherited,e=n.qs,o=n.id,r=n.url,i=n.takeover,a=n.popup,u=n.dev,c=n.shouldInject;return t&&(e=e?location.search+"&"+e:location.search),e&&"?"===e[0]&&(e=e.replace("?","")),e&&(e="&"+e),(r||(u?"http://dev.paperform.co/form/"+o:"https://"+o+".paperform.co"))+("?embed=1&takeover="+(i?1:0)+"&inline="+(i||a?0:1)+"&popup="+(a?1:0)+"&_d="+encodeURIComponent(location.host)+"&_in="+(c?1:0)+e)}(a),T=fn();y(n,T,(function(n){return e(7,r=n)}));var S=fn();y(n,S,(function(n){return e(8,i=n)})),T.subscribe((function(n){return n&&n.parentElement.addEventListener("click",H)})),S.subscribe((function(n){setTimeout((function(){return n&&n.parentElement.parentElement.classList.add("Paperform__popupwrapperParent")}))}));var O=fn();y(n,O,(function(n){return e(6,o=n)}));var L=300,N=!1;function z(n){E||$||e(4,L=n.height)}function I(n,t){var e=new gn(n,Object.assign({},t,{bubbles:!0}));o.dispatchEvent(e)}function F(n){var t=wn(m),e={form_id:c,currentPage:n.currentPage,totalPages:n.totalPages};I("PaperformPageChange",{detail:e}),t(e)}function R(n){var t=n.details||{};t.form_id=c,I("PaperformSubmission",{detail:t}),I("PaperformSubmssion",{detail:t}),d&&sn&&window.scrollTo(0,0),wn(s)(t)}function H(){e(2,P=!0),window.scrollTo(0,0),document.body.scrollTop=0,document.body.className+=" Paperform--locked"}function X(n,t){e(2,P=!1),document.body.className=document.body.className.replace("Paperform--locked",""),v&&v()}function W(n){g||E&&!sn||window.scrollTo(0,function(n,t,e,o){return Math.max(0,n.getBoundingClientRect().top-e+Math.max(0,t)+(o?0:window.pageYOffset))}(o,n.y,h,E))}function Z(n){var t=n.details||{};t.form_id=c,I("PaperformAnalytics",{detail:t})}function U(){e(5,N=!0),wn(k)()}function Y(){e(3,$=!0)}return x&&H(),function(n,t){var e;n.subscribe((function(n){e=n})),window.addEventListener("message",(function(n){e.contentWindow===n.source&&n.isTrusted&&"string"==typeof n.data&&n.data.startsWith("paperform:")&&t(JSON.parse(n.data.replace("paperform:","")))}))}(O,(function(n){var t={paypal:Tn,resize:z,scrollTo:W,link:Sn,pageChange:F,submission:R,analytics:Z,guidedMode:Y};t[n.action]&&t[n.action](n),N||U()})),n.$$set=function(n){"params"in n&&e(0,a=n.params)},n.$$.update=function(){if(1073741890&n.$$.dirty[0]&&o&&p&&!A){e(30,A=!0);try{xn(o).observe()}catch(n){console.log("IntersectionObserver not supported, loading immediately."),e(1,p=!1)}}},[a,p,P,$,L,N,o,r,i,u,f,b,w,_,E,j,C,M,T,S,O,X,function(n){j&&P&&"Escape"===n.key&&X()},U,function(n){o&&$&&function(n,t){void 0===t&&(t={});if(!o||!o.contentWindow)return;o.contentWindow.postMessage("paperform:"+JSON.stringify({action:n,payload:t}),"*")}("parentScroll")},function(n){q[n?"unshift":"push"]((function(){o=n,O.set(o)}))},function(n){q[n?"unshift":"push"]((function(){o=n,O.set(o)}))},function(n){q[n?"unshift":"push"]((function(){r=n,T.set(r)}))},function(n){q[n?"unshift":"push"]((function(){o=n,O.set(o)}))},function(n){q[n?"unshift":"push"]((function(){i=n,S.set(i)}))}]}var Ln=function(n){function t(t){n.call(this),on(this,t,On,Mn,b,{params:0},[-1,-1])}return n&&(t.__proto__=n),t.prototype=Object.create(n&&n.prototype),t.prototype.constructor=t,t}(rn);function Nn(n,t){var e;!function(n){n.innerHTML="",document.body.innerHTML=""}(n),function(){var n=document.querySelector("meta[name=viewport]");if(n)n.setAttribute("content","width=device-width, user-scalable=no");else{var t=document.createElement("meta");t.name="viewport",t.content="width=device-width, user-scalable=no",document.getElementsByTagName("head")[0].appendChild(t)}}(),(e=document.createElement("style")).innerHTML="\n    \n    ",document.body.appendChild(e),document.body.scrollTop=0,setTimeout((function(){return document.body.scrollTop=0}),1e3)}function qn(n){if("string"==typeof n)return n;if("object"!=typeof n)return"";var t=[],e=function(e){var o=n[e];Array.isArray(o)?o.forEach((function(n){t.push(e+"="+encodeURIComponent(n))})):t.push(e+"="+encodeURIComponent(o))};for(var o in n)e(o);return t.join("&")}function zn(){for(var n=0,t=document.querySelectorAll("paperform,[paperform-id],[data-paperform-id]");n<t.length;n+=1){Rn(t[n])}}function In(n,t,e){for(var o in void 0===t&&(t=[]),void 0===e&&(e=""),t){var r=t[o],i=n.getAttribute(r);if(""===i)return 1;if(null!==i)return i}return e}function Fn(n){return{params:{qs:In(n,["prefill","data-prefill"]),url:In(n,["url","data-url"]),lazy:In(n,["lazy","data-lazy"]),border:In(n,["border","data-border"]),id:In(n,["paperform-id","data-paperform-id"]),takeover:In(n,["takeover","data-takeover"]),popup:In(n,["popup-button","data-popup-button"]),onSubmit:In(n,["onsubmit","data-onsubmit"]),onPageChange:In(n,["onpagechange","data-onpagechange"]),inherited:In(n,["prefill-inherit","data-prefill-inherit"]),scrollOffset:In(n,["scroll-offset","data-scroll-offset"]),noScroll:In(n,["no-scroll","data-no-scroll"]),dev:!!In(n,["dev","data-dev"]),showSpinner:In(n,["spinner","data-spinner"]),iframeTitle:In(n,["title","data-title"]),borderColor:In(n,["border-color","data-border-color"]),height:In(n,["height","data-height"]),onload:In(n,["onload","data-onload"])}}}function Rn(n){if(!n._pfd&&(n._pfd=Date.now(),!n.loaded)){var t=Fn(n).params.id;Array.from(n.childNodes).forEach((function(e){"string"==typeof e.tagName&&"iframe"===e.tagName.toLowerCase()&&e.src.includes(t)&&n.removeChild(e)})),n.loaded=1;var e=Fn(n);e.params.takeover&&(Nn(n),document.body.appendChild(n)),new Ln({target:n,props:e})}}zn(),setInterval(zn,50),window.Paperform={popup:function(n,t){void 0===t&&(t={});var e=document.createElement("div");document.body.appendChild(e);var o=!1,r=function(){o||(o=!0,document.body.removeChild(e))},i={params:Object.assign({},t,{popup:1,qs:qn(t.prefill),inherited:t.prefillInherit,takeover:0,showSpinner:1,id:n,popupOnLoad:!0,onClose:r})};new Ln({target:e,props:i}),r()}}}();



