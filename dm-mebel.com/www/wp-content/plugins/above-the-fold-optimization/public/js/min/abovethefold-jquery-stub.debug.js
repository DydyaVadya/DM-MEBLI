Abtf[0](function(e,t,n,r){if(!e.jQuery){var i=[],o=[],u=!1,c=function(e,t){"ready"===e?o.push(t):i.push(e)},f={ready:c,bind:c};e.$=e.jQuery=function(e){if(e===n||void 0===e)return f;c(e)},e.$.noConflict=e.jQuery.noConflict=function(){u=!0},e.$.isStub=e.jQuery.isStub=!0,r.prototype.watch||r.defineProperty(r.prototype,"watch",{enumerable:!1,configurable:!0,writable:!1,value:function(e,t){var n=this[e],i=n;delete this[e]&&r.defineProperty(this,e,{get:function(){return i},set:function(r){return n=i,i=t.call(this,e,n,r)},enumerable:!0,configurable:!0})}}),r.prototype.unwatch||r.defineProperty(r.prototype,"unwatch",{enumerable:!1,configurable:!0,writable:!1,value:function(e){var t=this[e];delete this[e],this[e]=t}}),e.watch("jQuery",function(t,r,c){if("function"!=typeof c||void 0===c.fn||void 0!==c.isStub)return c;u&&(c.noConflict(),console.info("Abtf.jQuery.noConflict()"));var f=0;return c.each(i,function(e,t){c(t),f++}),c.each(o,function(e,t){c(n).bind("ready",t),f++}),f>0&&console.info("Abtf.jQuery.ready()",f+" callbacks"),e.unwatch("jQuery"),e.jQuery=c,c})}});