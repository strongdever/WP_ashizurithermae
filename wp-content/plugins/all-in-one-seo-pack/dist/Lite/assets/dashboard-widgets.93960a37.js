import{_ as h}from"./js/_plugin-vue_export-helper.b97bdf23.js";import{r as O,o as T,c as j,d as U,f as X,G as rr}from"./js/vue.runtime.esm-bundler.b39e1078.js";import{l as er}from"./js/index.cfe09a50.js";import{l as or}from"./js/index.0eabb636.js";import{e as ur,l as ar}from"./js/links.23796d97.js";import{C as nr}from"./js/SeoSetup.d8a328c2.js";import{C as tr}from"./js/Overview.2607427a.js";import{e as sr}from"./js/elemLoaded.9a6eb745.js";import{m as i,l as ir}from"./js/default-i18n.3881921e.js";import"./js/translations.6e7b2383.js";import"./js/constants.1758f66e.js";import"./js/Caret.164d8058.js";import"./js/isArrayLikeObject.22a096cb.js";import"./js/Rocket.b410855c.js";import"./js/DonutChartWithLegend.75733bae.js";import"./js/AnimatedNumber.b765a5ab.js";import"./js/numbers.c7cb4085.js";const cr={setup(){return{optionsStore:ur()}},components:{CoreSeoSetup:nr}},fr={key:0};function dr(r,e,o,a,u,n){const f=O("core-seo-setup");return a.optionsStore.internalOptions.internal?(T(),j("div",fr,[U(f,{isWpDashboard:!0})])):X("",!0)}const pr=h(cr,[["render",dr]]),lr={components:{CoreOverview:tr}},br={class:"aioseo-app",style:{"background-color":"transparent"}};function xr(r,e,o,a,u,n){const f=O("core-overview");return T(),j("div",br,[U(f,{isWpDashboard:!0})])}const mr=h(lr,[["render",xr]]);var vr=typeof i=="object"&&i&&i.Object===Object&&i,gr=vr,$r=gr,_r=typeof self=="object"&&self&&self.Object===Object&&self,Sr=$r||_r||Function("return this")(),yr=Sr,Rr=yr,Ar=Rr.Symbol,l=Ar;function Cr(r,e){for(var o=-1,a=r==null?0:r.length,u=Array(a);++o<a;)u[o]=e(r[o],o,r);return u}var hr=Cr,Or=Array.isArray,Tr=Or,b=l,L=Object.prototype,jr=L.hasOwnProperty,Ur=L.toString,s=b?b.toStringTag:void 0;function Lr(r){var e=jr.call(r,s),o=r[s];try{r[s]=void 0;var a=!0}catch{}var u=Ur.call(r);return a&&(e?r[s]=o:delete r[s]),u}var Er=Lr,Mr=Object.prototype,Wr=Mr.toString;function kr(r){return Wr.call(r)}var wr=kr,x=l,zr=Er,Nr=wr,Dr="[object Null]",Ir="[object Undefined]",m=x?x.toStringTag:void 0;function Pr(r){return r==null?r===void 0?Ir:Dr:m&&m in Object(r)?zr(r):Nr(r)}var Zr=Pr;function Gr(r){return r!=null&&typeof r=="object"}var Fr=Gr,Hr=Zr,Vr=Fr,Jr="[object Symbol]";function Br(r){return typeof r=="symbol"||Vr(r)&&Hr(r)==Jr}var Yr=Br,v=l,qr=hr,Kr=Tr,Qr=Yr,Xr=1/0,g=v?v.prototype:void 0,$=g?g.toString:void 0;function E(r){if(typeof r=="string")return r;if(Kr(r))return qr(r,E)+"";if(Qr(r))return $?$.call(r):"";var e=r+"";return e=="0"&&1/r==-Xr?"-0":e}var re=E,ee=re;function oe(r){return r==null?"":ee(r)}var c=oe;function ue(r,e,o){var a=-1,u=r.length;e<0&&(e=-e>u?0:u+e),o=o>u?u:o,o<0&&(o+=u),u=e>o?0:o-e>>>0,e>>>=0;for(var n=Array(u);++a<u;)n[a]=r[a+e];return n}var ae=ue,ne=ae;function te(r,e,o){var a=r.length;return o=o===void 0?a:o,!e&&o>=a?r:ne(r,e,o)}var se=te,ie="\\ud800-\\udfff",ce="\\u0300-\\u036f",fe="\\ufe20-\\ufe2f",de="\\u20d0-\\u20ff",pe=ce+fe+de,le="\\ufe0e\\ufe0f",be="\\u200d",xe=RegExp("["+be+ie+pe+le+"]");function me(r){return xe.test(r)}var M=me;function ve(r){return r.split("")}var ge=ve,W="\\ud800-\\udfff",$e="\\u0300-\\u036f",_e="\\ufe20-\\ufe2f",Se="\\u20d0-\\u20ff",ye=$e+_e+Se,Re="\\ufe0e\\ufe0f",Ae="["+W+"]",d="["+ye+"]",p="\\ud83c[\\udffb-\\udfff]",Ce="(?:"+d+"|"+p+")",k="[^"+W+"]",w="(?:\\ud83c[\\udde6-\\uddff]){2}",z="[\\ud800-\\udbff][\\udc00-\\udfff]",he="\\u200d",N=Ce+"?",D="["+Re+"]?",Oe="(?:"+he+"(?:"+[k,w,z].join("|")+")"+D+N+")*",Te=D+N+Oe,je="(?:"+[k+d+"?",d,w,z,Ae].join("|")+")",Ue=RegExp(p+"(?="+p+")|"+je+Te,"g");function Le(r){return r.match(Ue)||[]}var Ee=Le,Me=ge,We=M,ke=Ee;function we(r){return We(r)?ke(r):Me(r)}var ze=we,Ne=se,De=M,Ie=ze,Pe=c;function Ze(r){return function(e){e=Pe(e);var o=De(e)?Ie(e):void 0,a=o?o[0]:e.charAt(0),u=o?Ne(o,1).join(""):e.slice(1);return a[r]()+u}}var Ge=Ze,Fe=Ge,He=Fe("toUpperCase"),Ve=He,Je=c,Be=Ve;function Ye(r){return Be(Je(r).toLowerCase())}var qe=Ye;function Ke(r,e,o,a){var u=-1,n=r==null?0:r.length;for(a&&n&&(o=r[++u]);++u<n;)o=e(o,r[u],u,r);return o}var Qe=Ke;function Xe(r){return function(e){return r==null?void 0:r[e]}}var ro=Xe,eo=ro,oo={À:"A",Á:"A",Â:"A",Ã:"A",Ä:"A",Å:"A",à:"a",á:"a",â:"a",ã:"a",ä:"a",å:"a",Ç:"C",ç:"c",Ð:"D",ð:"d",È:"E",É:"E",Ê:"E",Ë:"E",è:"e",é:"e",ê:"e",ë:"e",Ì:"I",Í:"I",Î:"I",Ï:"I",ì:"i",í:"i",î:"i",ï:"i",Ñ:"N",ñ:"n",Ò:"O",Ó:"O",Ô:"O",Õ:"O",Ö:"O",Ø:"O",ò:"o",ó:"o",ô:"o",õ:"o",ö:"o",ø:"o",Ù:"U",Ú:"U",Û:"U",Ü:"U",ù:"u",ú:"u",û:"u",ü:"u",Ý:"Y",ý:"y",ÿ:"y",Æ:"Ae",æ:"ae",Þ:"Th",þ:"th",ß:"ss",Ā:"A",Ă:"A",Ą:"A",ā:"a",ă:"a",ą:"a",Ć:"C",Ĉ:"C",Ċ:"C",Č:"C",ć:"c",ĉ:"c",ċ:"c",č:"c",Ď:"D",Đ:"D",ď:"d",đ:"d",Ē:"E",Ĕ:"E",Ė:"E",Ę:"E",Ě:"E",ē:"e",ĕ:"e",ė:"e",ę:"e",ě:"e",Ĝ:"G",Ğ:"G",Ġ:"G",Ģ:"G",ĝ:"g",ğ:"g",ġ:"g",ģ:"g",Ĥ:"H",Ħ:"H",ĥ:"h",ħ:"h",Ĩ:"I",Ī:"I",Ĭ:"I",Į:"I",İ:"I",ĩ:"i",ī:"i",ĭ:"i",į:"i",ı:"i",Ĵ:"J",ĵ:"j",Ķ:"K",ķ:"k",ĸ:"k",Ĺ:"L",Ļ:"L",Ľ:"L",Ŀ:"L",Ł:"L",ĺ:"l",ļ:"l",ľ:"l",ŀ:"l",ł:"l",Ń:"N",Ņ:"N",Ň:"N",Ŋ:"N",ń:"n",ņ:"n",ň:"n",ŋ:"n",Ō:"O",Ŏ:"O",Ő:"O",ō:"o",ŏ:"o",ő:"o",Ŕ:"R",Ŗ:"R",Ř:"R",ŕ:"r",ŗ:"r",ř:"r",Ś:"S",Ŝ:"S",Ş:"S",Š:"S",ś:"s",ŝ:"s",ş:"s",š:"s",Ţ:"T",Ť:"T",Ŧ:"T",ţ:"t",ť:"t",ŧ:"t",Ũ:"U",Ū:"U",Ŭ:"U",Ů:"U",Ű:"U",Ų:"U",ũ:"u",ū:"u",ŭ:"u",ů:"u",ű:"u",ų:"u",Ŵ:"W",ŵ:"w",Ŷ:"Y",ŷ:"y",Ÿ:"Y",Ź:"Z",Ż:"Z",Ž:"Z",ź:"z",ż:"z",ž:"z",Ĳ:"IJ",ĳ:"ij",Œ:"Oe",œ:"oe",ŉ:"'n",ſ:"s"},uo=eo(oo),ao=uo,no=ao,to=c,so=/[\xc0-\xd6\xd8-\xf6\xf8-\xff\u0100-\u017f]/g,io="\\u0300-\\u036f",co="\\ufe20-\\ufe2f",fo="\\u20d0-\\u20ff",po=io+co+fo,lo="["+po+"]",bo=RegExp(lo,"g");function xo(r){return r=to(r),r&&r.replace(so,no).replace(bo,"")}var mo=xo,vo=/[^\x00-\x2f\x3a-\x40\x5b-\x60\x7b-\x7f]+/g;function go(r){return r.match(vo)||[]}var $o=go,_o=/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/;function So(r){return _o.test(r)}var yo=So,I="\\ud800-\\udfff",Ro="\\u0300-\\u036f",Ao="\\ufe20-\\ufe2f",Co="\\u20d0-\\u20ff",ho=Ro+Ao+Co,P="\\u2700-\\u27bf",Z="a-z\\xdf-\\xf6\\xf8-\\xff",Oo="\\xac\\xb1\\xd7\\xf7",To="\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf",jo="\\u2000-\\u206f",Uo=" \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000",G="A-Z\\xc0-\\xd6\\xd8-\\xde",Lo="\\ufe0e\\ufe0f",F=Oo+To+jo+Uo,H="['’]",_="["+F+"]",Eo="["+ho+"]",V="\\d+",Mo="["+P+"]",J="["+Z+"]",B="[^"+I+F+V+P+Z+G+"]",Wo="\\ud83c[\\udffb-\\udfff]",ko="(?:"+Eo+"|"+Wo+")",wo="[^"+I+"]",Y="(?:\\ud83c[\\udde6-\\uddff]){2}",q="[\\ud800-\\udbff][\\udc00-\\udfff]",t="["+G+"]",zo="\\u200d",S="(?:"+J+"|"+B+")",No="(?:"+t+"|"+B+")",y="(?:"+H+"(?:d|ll|m|re|s|t|ve))?",R="(?:"+H+"(?:D|LL|M|RE|S|T|VE))?",K=ko+"?",Q="["+Lo+"]?",Do="(?:"+zo+"(?:"+[wo,Y,q].join("|")+")"+Q+K+")*",Io="\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])",Po="\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])",Zo=Q+K+Do,Go="(?:"+[Mo,Y,q].join("|")+")"+Zo,Fo=RegExp([t+"?"+J+"+"+y+"(?="+[_,t,"$"].join("|")+")",No+"+"+R+"(?="+[_,t+S,"$"].join("|")+")",t+"?"+S+"+"+y,t+"+"+R,Po,Io,V,Go].join("|"),"g");function Ho(r){return r.match(Fo)||[]}var Vo=Ho,Jo=$o,Bo=yo,Yo=c,qo=Vo;function Ko(r,e,o){return r=Yo(r),e=o?void 0:e,e===void 0?Bo(r)?qo(r):Jo(r):r.match(e)||[]}var Qo=Ko,Xo=Qe,ru=mo,eu=Qo,ou="['’]",uu=RegExp(ou,"g");function au(r){return function(e){return Xo(eu(ru(e).replace(uu,"")),r,"")}}var nu=au,tu=qe,su=nu,iu=su(function(r,e,o){return e=e.toLowerCase(),r+(o?tu(e):e)}),cu=iu;const A=ir(cu),fu=[{id:"aioseo-seo-setup-app",component:pr},{id:"aioseo-overview-app",component:mr}],C=r=>{let e=rr({...r.component,name:"Standalone/DashboardWidgets"});e=er(e),e=or(e),ar(e),e.mount("#"+r.id)};fu.forEach(r=>{document.getElementById(r.id)?C(r):(sr("#"+r.id,A(r.id)),document.addEventListener("animationstart",function(e){A(r.id)===e.animationName&&C(r)},{passive:!0}))});
