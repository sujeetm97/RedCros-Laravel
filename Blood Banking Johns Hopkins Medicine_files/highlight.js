(()=>{"use strict";var t={417:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.endpoints=e.i=void 0;const s=i(699),n=i(734),o=i(983),r=i(131),h=i(846),c=i(989),u=i(844),a=i(20),l={o:"https://api.schemaapp.com/markup/markup?url=",h:"https://cdn.schemaapp.com/",u:"https://hunchwww.s3.amazonaws.com/",l:"https://data.schemaapp.com/"};e.endpoints=l;class d{constructor(t){this.v=t,window.location.port?this.p=window.location.origin.replace(":"+window.location.port,"")+window.location.pathname:this.p=window.location.origin+window.location.pathname}createPattern(t){const e=[];for(let i=0;i<t.length;i++){const n=t[i],o=this.g(n,s.O.m+"categorizedBy"),r=this.g(n,s.O.m+"hasMember");e.push({type:o.pop(),P:r})}return e}g(t,e){const i=[];for(const s in this.v[t])if(Object.prototype.hasOwnProperty.call(this.v[t],s)&&s===e)for(const e in this.v[t][s])Object.prototype.hasOwnProperty.call(this.v[t][s],e)&&("uri"===this.v[t][s][e].type||"literal"===this.v[t][s][e].type)&&i.push(this.v[t][s][e].value);return i}T(t){const e=new Map;for(const i in this.v)if(Object.prototype.hasOwnProperty.call(this.v,i)){const s=this.g(i,t);e.set(i,s)}return e}S(t,e){const i=[];for(const n in this.v){if(!Object.prototype.hasOwnProperty.call(this.v,n))continue;if(!Object.prototype.hasOwnProperty.call(this.v[n],s.O._+"type"))continue;let o=!1;for(let e=0;e<this.v[n][s.O._+"type"].length;e++)this.v[n][s.O._+"type"][e].value===t&&(o=!0);o&&(e&&!Object.prototype.hasOwnProperty.call(this.v[n],e)||i.push(n))}return i}static j(){return Object.prototype.hasOwnProperty.call(window,"schema_highlighter")?window.schema_highlighter.key:""}static N(){if(void 0!==window.schema_highlighter){const t=window.schema_highlighter.accountId;if(void 0===t)return null;const e=t.replace("http://schemaapp.com/db/","").split("/");return{M:e[0],R:e.length>1?e[1]:void 0,complete:e.join("/")}}return null}static F(){return void 0!==window.schema_highlighter&&window.schema_highlighter.environment?window.schema_highlighter.environment:null}static A(t="",e=!1,i=!0,s=!0){const n=btoa(window.location.protocol+"//"+window.location.host).replace(/=/g,""),o=""===t?n:n+"/"+btoa(t).replace(/=/g,""),r=e?"draft/":"",h=s?l.h:l.u,c=this.N();let u;const a=this.F();return u=null!==a?a:i?"prod":"test",c&&c.complete?`${h}highlighter/${u}/${null==c?void 0:c.complete}/${r}`+o:`${h}highlighter/${u}/${r}`+o}J(){if(this.accountId)return this.accountId;const t=d.N();if(t)return this.accountId=t,this.accountId;const e=this.S(s.O.m+"Organization").pop();if(null==e)return null;const i=this.g(e,s.O.m+"describedIn").pop(),n=null==i?void 0:i.replace("http://schemaapp.com/db/","").split("/");return n&&i?(this.accountId={M:n[0],R:n.length>1?n[1]:void 0,complete:n.join("/")},this.accountId):null}I(){return this.S(s.O.L+"HighlightTemplate",s.O.L+"pattern")}k(t){const e=this.g(t,s.O.m+"categorizedBy"),i=[];return e.forEach((t=>{i.push(t.split("/").pop())})),i}H(t){const e=this.g(t,s.O.D+"label");return e?e[0]:""}U(t,e,i){const n=this.k(t),o=[];n.forEach((t=>o.push(t.replace(s.O.$,"").replace(s.O.L,""))));let r=o.join("_");if(e&&(r+=e.join("_")),i){let t=new URL(i).pathname.split("/").pop();t&&(t=t.split("#").pop()),r+=t}return this.p+"#"+r}C(t){const e=this.g(t,s.O.L+"pattern");return this.createPattern(e)}B(t){const e=this.g(t,s.O.L+"excludePattern");return this.createPattern(e)}X(t){const e=this.g(t,s.O.L+"generateUrl");return 0===e.length||e[0].includes("true")}G(t,e,i=document,l=!1){const f=[],v=this.g(t,s.O.L+"hasHighlight");for(let t=0;t<v.length;t++){const p=v[t],g=this.v[p];if(void 0===g||void 0===g[s.O._+"type"])continue;switch(g[s.O._+"type"][0].value.replace(s.O.L,"")){case"TagConditional":case"TagXPathDefined":case"TagXPath":f.push(new o.V(p,g,this.J(),d.j(),i,l));break;case"TagLookup":case"TagStoredResource":f.push(new n.K(p,g,this.J(),d.j(),i,this));break;case"TagList":f.push(new r.W(p,g,this.J(),d.j(),e,this));break;case"TagListUnstructured":f.push(new u.q(p,g,this.J(),d.j(),e,this));break;case"TagConditionalDefined":case"TagDefined":f.push(new h.Z(p,g,this.J(),d.j()));break;case"TagYouTube":f.push(new c.Y(p,g,this.J(),d.j(),i,l));break;case"TagLookupLinkedEntity":f.push(new a.tt(p,g,this.J(),d.j(),i,l))}}return f}}e.i=d},369:(t,e)=>{Object.defineProperty(e,"t",{value:!0}),e.et=void 0;e.et=class{constructor(t){this.content=t}}},762:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.it=void 0;const s=i(369),n=i(42);class o extends s.et{st(t){if(Array.isArray(this.content))for(let e=0;e<this.content.length;e++)(0,n.nt)(t,this.content[e]);else(0,n.nt)(t,this.content);return t}}e.it=o},892:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.ot=e.rt=e.ht=e.ct=e.ut=e.lt=e.dt=void 0;const s=i(699);class n extends s.ft{evaluate(t){if(void 0===this.vt)return t;const e=t.indexOf(this.vt);return e>=0?t.slice(0,e):""}getType(){return s.gt.Before}}e.dt=n;class o extends s.ft{evaluate(t){var e;if(void 0===this.vt)return t;const i=t.indexOf(this.vt);return i>=0?t.slice(null!==(e=i+this.vt.length)&&void 0!==e?e:0):""}getType(){return s.gt.After}}e.lt=o;class r extends s.ft{evaluate(t){var e;const i=r.wt.exec(t);if(i){const t=i[0].replace(",","");return null!==(e=Number(t))&&void 0!==e?e:""}return""}getType(){return s.gt.Number}}e.ut=r,r.wt=/(\+|-)*((\d+[.,]\d*)|(\d*[.,]\d+)|\d+)/im;class h extends s.ft{evaluate(t){return t.replace(h.yt,"")}getType(){return s.gt.NonNumber}}e.ct=h,h.yt=/\d+/gm;class c extends s.ft{evaluate(t){return this.vt?t.split(this.vt).join(""):t}getType(){return s.gt.Omit}}e.ht=c,e.rt=function(t){const e=t.split("(");if(1===e.length)throw new RangeError(`Filter ${t} is missing parenthesis, unable to parse`);switch(e[0].toLocaleUpperCase()){case"BEFORE":return new n(t);case"AFTER":return new o(t);case"OMIT":return new c(t);case"NUMBER":return new r(t);case"NONNUMBER":return new h(t)}return null},e.ot=function(t,e){for(let i=0;i<t.length;i++)e=t[i].evaluate(`${e}`);return e}},708:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.bt=e.Ot=void 0;const s=i(892),n=i(699);class o{constructor(t,e,i,o,r=document){if(this.id=t,this.Pt=e,this.name=e[n.O._+"type"][0].value.replace(n.O.L,""),this.Tt=i,this.St=o,void 0!==e[n.O.L+"propertyPath"]){const t=e[n.O.L+"propertyPath"][0].value;this.xt="string"==typeof t?t.split("~"):t}else this.xt=[];if(void 0!==e[n.O.L+"filter"]){let t=e[n.O.L+"filter"][0].value.split('");');this.filters=[];const i=new RegExp('(BEFORE|AFTER|OMIT|NUMBER|NONNUMBER)\\("\\)',"i");for(let e=0;e<t.length;e++){let n=t[e];if(""===n)continue;n=n.endsWith('")')&&!n.match(i)?n:n+='")';const o=(0,s.rt)(n);o&&this.filters.push(o)}}this.context=r}_t(t){let e=t.trim();return 0===e.indexOf("//")?e=e.slice(2):0===e.indexOf("/")?e=e.slice(1):-1===e.indexOf("contains")?e=0===e.indexOf("/")?e.slice(1):e:""===e&&(e="."),e}jt(t){if("text()"!==t){const e=t.trim().split("|"),i=[];for(let t=0;t<e.length;t++)i.push(this._t(e[t]));t=e.length>1?"( "+i.join(" | ")+" )":i[0]}else t=this._t(t);return t}}e.Ot=o;e.bt=class extends o{constructor(t,e,i,s,o=document){super("",e,i,s,o),this.value=void 0!==e[n.O.L+"value"]?e[n.O.L+"value"][0].value:""}Nt(){return this.value}}},846:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.Z=void 0;const s=i(699),n=i(899),o=i(708);class r extends o.Ot{constructor(t,e,i,n){super(t,e,i,n,document),this.value=e[s.O.L+"value"][0].value,this.Mt=Object.prototype.hasOwnProperty.call(e,s.O.L+"xPathTest")?e[s.O.L+"xPathTest"][0].value:void 0}debug(){return""}evaluate(){let t=`${this.value}`,e=!1;return this.Mt&&(t=(0,n.Rt)(this.Mt)?this.value:void 0,e=void 0===t),{result:t,context:void 0,xt:this.xt,Ft:e}}}e.Z=r},20:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.tt=void 0;const s=i(708),n=i(699),o=i(967),r=i(555),h=i(892),c=i(723);class u extends s.Ot{constructor(t,e,i,s,o=document,r=!1){super(t,e,i,s,o),this.At=e[n.O.L+"xPath-input"][0].value,this.target=e[n.O.$+"target"][0].value,this.Jt=r,r&&(this.At=this.jt(this.At))}debug(){return""}evaluate(t){const e=(0,r.It)(this.At,null!=t?t:this.context);if(this.At,this.Jt,this.id,e.result){let t=e.result;this.filters&&(t=(0,h.ot)(this.filters,t));const i=new Headers({"x-hash":(0,c.Et)(t)});return{result:"",promise:(0,o.Lt)(this.target,"oMMptt5Jjk1vJSran1xKB1tPlQUcbAaw6ccCdvoN",this.Tt,{content:`${t}`},i),xt:this.xt,Ft:!1}}return{Ft:!0,xt:this.xt}}Nt(){return""}}e.tt=u},131:function(t,e,i){var s=this&&this.kt||function(t,e,i,s){return new(i||(i=Promise))((function(n,o){function r(t){try{c(s.next(t))}catch(t){o(t)}}function h(t){try{c(s.throw(t))}catch(t){o(t)}}function c(t){var e;t.done?n(t.value):(e=t.value,e instanceof i?e:new i((function(t){t(e)}))).then(r,h)}c((s=s.apply(t,e||[])).next())}))};Object.defineProperty(e,"t",{value:!0}),e.W=void 0;const n=i(699),o=i(983),r=i(948),h=i(42);class c extends o.V{constructor(t,e,i,s,o,r,h=document){var c;super(t,e,i,s,h),this.Ht=null!==(c=this.xt.pop())&&void 0!==c?c:"",this.Dt=!this.Ht.charAt(0).match(/[A-Z]/),this.Dt&&this.xt.push(this.Ht),this.Ut=o,this.$t=e[n.O.L+"hasTemplate"][0].value,this.Ct=[],this.configuration=r,this.Bt=r.G(this.$t,this.Ut,document.body,!0),this.Xt=document.evaluate(this.zt,document,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE),this.Gt()}debug(){return""}evaluate(){const t=[];0===this.Xt.snapshotLength&&(this.Xt=document.evaluate(this.zt,document,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE),this.Gt());for(let e=0;e<this.Ct.length;e++){const i=this.Ct[e].evaluate();"ListItem"===this.Ht&&(0,h.Vt)("position",e,i),t.push(i)}if(this.Dt)for(let e=0;e<this.Xt.snapshotLength;e++){const i=this.Xt.snapshotItem(e);for(let e=0;e<this.Bt.length;e++){const n=this.Bt[e],o=this.Bt[e].evaluate(null!=i?i:document);o.promise&&o.promise.then((t=>s(this,void 0,void 0,(function*(){yield(0,h.Kt)(t,n,i).then((t=>{t.content&&this.Ut.Wt(t.content,t.source)}))})))),o.result&&!o.Ft&&t.push(o.result)}}return{result:t.length>0?t:void 0,xt:this.xt,context:void 0,Ft:t.length<=0||0===this.Xt.snapshotLength}}Gt(){if(!this.Dt)for(let t=0;t<this.Xt.snapshotLength;t++){const e=this.Xt.snapshotItem(t);if(e){const i=this.configuration.U(this.$t,this.xt,this.id)+t;this.Ct.push(new r.qt(this.$t,this.configuration,this.Ut,e,this.Bt,this.Ht,i,!0))}}}}e.W=c},844:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.q=void 0;const s=i(699),n=i(983),o=i(948),r=i(899);class h extends n.V{constructor(t,e,i,n,o,r,h=document){var c;super(t,e,i,n,h),this.Qt=null!==(c=this.xt.pop())&&void 0!==c?c:"",this.$t=e[s.O.L+"hasTemplate"][0].value,this.Zt=r,this.Ut=o,this.Bt=r.G(this.$t,o,document,!0),this.Yt=void 0===this.Pt[s.O.L+"inclusionTest"]?void 0:this.Pt[s.O.L+"inclusionTest"][0].value,this.te=this.Pt[s.O.L+"nodeIterator"][0].value,this.ee=void 0===this.Pt[s.O.L+"tagListEnd"]?void 0:this.Pt[s.O.L+"tagListEnd"][0].value}debug(){return""}evaluate(t){try{const e=document.evaluate(this.zt,null!=t?t:this.context,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE),i=document.evaluate(this.te,null!=t?t:this.context,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE),s=[];let n=null,r=0,h=0;if(0===i.snapshotLength||0===e.snapshotLength)return{result:void 0,Ft:!0,xt:this.xt};this.ee&&(n=document.evaluate(this.ee,null!=t?t:this.context,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE));let c=e.snapshotItem(0);const u=null!==n?n.snapshotItem(0):null,a=this.ie(i,c);let l=a.se;for(h=a.ne;r<e.snapshotLength&&null!=c;){const t=this.Zt.U(this.$t,this.xt)+r,n=new o.qt(this.$t,this.Zt,this.Ut,document,this.Bt,this.Qt,t,!0);l=i.snapshotItem(h);const a=this.oe(l,i,e,u,r,h),d=a.re;if(d.push(c),h=a.he,this.ce(d)||s.push(n.evaluate(d)),r++,r>e.snapshotLength||u===c)break;c=e.snapshotItem(r)}return{result:s.length>0?s:void 0,Ft:0==s.length,xt:this.xt}}catch(t){return{result:"",Ft:!0,xt:this.xt}}}ie(t,e){let i=t.snapshotItem(0),s=0;for(;i.compareDocumentPosition(e)&Node.DOCUMENT_POSITION_FOLLOWING;)s++,i=t.snapshotItem(s);return{se:i,ne:s}}oe(t,e,i,s,n,o){const r=[];for(;(null!=t&&n+1<i.snapshotLength&&t.compareDocumentPosition(i.snapshotItem(n+1))&Node.DOCUMENT_POSITION_FOLLOWING||i.snapshotLength==n+1&&o<e.snapshotLength)&&!(null!==s&&t.compareDocumentPosition(s)&Node.DOCUMENT_POSITION_PRECEDING);)r.push(t),o++,t=e.snapshotItem(o);return{he:o,re:r}}ce(t){if(this.Yt){for(let e=0;e<t.length;e++)if((0,r.Rt)(this.Yt,t[e]))return!1;return!0}return!1}}e.q=h},989:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.Y=void 0;const s=i(983),n=i(899),o=i(555),r=i(967),h=i(417),c=i(892);class u extends s.V{Nt(){var t;return null!==(t=this.value)&&void 0!==t?t:""}evaluate(t){const e=(0,o.It)(this.zt,null!=t?t:this.context);if(void 0!==this.Mt&&!(0,n.Rt)(this.Mt)||void 0===e.result||"string"!=typeof e.result)return{xt:this.xt,Ft:!0};let i=`${e.result}`;if(this.filters&&(i=(0,c.ot)(this.filters,i)),""===i||void 0===i)return{Ft:!0,xt:this.xt};const s=new URL(decodeURIComponent(i)),u=s.origin+s.pathname+s.search;return this.value=u,{result:{"@id":this.value},promise:(0,r.Lt)(h.endpoints.o+encodeURIComponent(u),this.St,this.Tt),xt:this.xt,Ft:!1}}}e.Y=u},734:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.K=void 0;const s=i(699),n=i(967),o=i(899),r=i(708),h=i(555),c=i(723),u=i(892);class a extends r.bt{constructor(t,e,i,n,o=document,r){super(t,e,i,n),this.Zt=r,this.Mt=Object.prototype.hasOwnProperty.call(e,s.O.L+"xPathTest")?e[s.O.L+"xPathTest"][0].value:void 0,this.M=Object.prototype.hasOwnProperty.call(e,s.O.m+"describedIn")?e[s.O.m+"describedIn"][0].value.replace("http://schemaapp.com/db/"):void 0;const h=this.M?this.M:this.Tt.complete,c=btoa(this.value).replace(/=/g,"");this.ue=`https://data.schemaapp.com/${h}/${c}`,void 0!==e[s.O.$+"target"]&&(this.target=e[s.O.$+"target"][0].value)}debug(){return""}evaluate(t){return this.Mt&&!(0,o.Rt)(this.Mt)?{Ft:!0,xt:this.xt}:this.target?(this.ae(),{result:{"@id":this.value},promise:(0,n.Lt)(this.target,this.St,this.Tt),xt:this.xt,Ft:!1}):{result:{"@id":this.value},promise:(0,n.Lt)(this.ue,this.St,this.Tt),xt:this.xt,Ft:!1}}ae(){var t,e,i,n;if(!this.target)return;this.value="";let o="";this.Pt[s.O.L+"xPath-input"]&&(o=null!==(t=(0,h.It)(this.Pt[s.O.L+"xPath-input"][0].value).result)&&void 0!==t?t:"",this.filters&&(o=null!==(e=(0,u.ot)(this.filters,o))&&void 0!==e?e:o),this.Pt[s.O.L+"encodeResult"]&&(this.value=o,o=btoa(o).replace("=",""))),this.target=this.target.replace("baseURL",this.Zt.p),this.target=this.target.replace("xPath-input",o),this.target=this.target.replace("AccountID",null!==(n=null===(i=this.Zt.J())||void 0===i?void 0:i.complete)&&void 0!==n?n:""),this.target=this.target.replace(/{|}/gm,""),this.target=(0,c.le)(this.target)}}e.K=a},983:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.V=void 0;const s=i(699),n=i(555),o=i(899),r=i(708),h=i(892);class c extends r.Ot{constructor(t,e,i,n,o=document,r=!1){if(super(t,e,i,n,o),this.Jt=r,0==Object.prototype.hasOwnProperty.call(e,s.O.L+"xPath"))this.zt="text()",this.de=!1;else{let t=e[s.O.L+"xPath"][0].value;t=t.replace(/^\((.*)\)$/gm,"$1"),this.de=null!==t.match(/\/node\(\)/),this.zt=t.replace(/(\/node\(\))/g,""),this.Jt&&(this.zt=this.jt(this.zt))}Object.hasOwnProperty.call(e,s.O.L+"xPathTest")&&(this.Mt=e[s.O.L+"xPathTest"][0].value)}debug(){return""}evaluate(t){var e;if(this.Mt&&!(0,o.Rt)(this.Mt))return{result:void 0,context:void 0,Ft:!0,xt:this.xt};const i=(0,n.It)(this.zt,null!=t?t:this.context,this.de);let s=i.result;return s=this.filters&&s?(0,h.ot)(this.filters,s):null!==(e=i.result)&&void 0!==e?e:"",{result:s,context:i.context,Ft:null===i.result||""===i.result,xt:this.xt}}}e.V=c},115:function(t,e,i){var s=this&&this.kt||function(t,e,i,s){return new(i||(i=Promise))((function(n,o){function r(t){try{c(s.next(t))}catch(t){o(t)}}function h(t){try{c(s.throw(t))}catch(t){o(t)}}function c(t){var e;t.done?n(t.value):(e=t.value,e instanceof i?e:new i((function(t){t(e)}))).then(r,h)}c((s=s.apply(t,e||[])).next())}))};Object.defineProperty(e,"t",{value:!0}),e.fe=void 0;const n=i(417),o=i(967),r=i(699),h=i(899),c=i(948),u=i(798),a=i(723);class Highlighter{constructor(){this.ve=750,this.pe=6,this.ge=1,this.me=window.location.protocol+"//"+window.location.host,this.we=[location.protocol,"//",location.host,location.pathname].join(""),this.ye=btoa(this.we).replace(/=/g,""),this.be=btoa(this.me).replace(/=/g,""),this.Oe=[],this.Ut=new u.Pe}Te(){const t=n.i.N(),e=n.i.j();void 0!==window.schema_highlighter&&window.schema_highlighter.outputCache&&(window.schema_highlighter.fetchFromHighlightJsCache&&(0,o.Lt)(n.endpoints.l+(null==t?void 0:t.complete)+"/__highlighter_js/"+this.ye,e,t).then((t=>s(this,void 0,void 0,(function*(){var e;const i=yield t.text();""!==i&&(0,a.Se)(i,null!==(e=t.headers.get("x-amz-meta-source"))&&void 0!==e?e:"",!0)})))),(0,o.Lt)(n.endpoints.l+(null==t?void 0:t.complete)+"/"+this.ye,e,t).then((t=>s(this,void 0,void 0,(function*(){var e;const i=yield t.text();""!==i&&(0,a.Se)(i,null!==(e=t.headers.get("x-amz-meta-source"))&&void 0!==e?e:"",!0)}))))),(0,o.Lt)(n.i.A(),e,t).then((t=>s(this,void 0,void 0,(function*(){const e=yield t.text();""!==e&&(this.configuration=new n.i(JSON.parse(e)),this.xe(),this.Oe.length>0&&(this._e(),this.je()))}))))}xe(){this.Ne=this.Me();for(let t=0;t<this.Ne.length;t++)if(this.configuration){const e=new c.qt(this.Ne[t],this.configuration,this.Ut);this.Oe.push(e),e.$t}}applyTemplateBase(t,e=!1,i=!0,r=!0,h){const a=n.i.N(),l=n.i.j(),d={},f={};let v=!1,p=!1;this.Ut=new u.Pe;const g=n.i.A(t,e,i,r);(0,o.Lt)(g,l,a).then((e=>s(this,void 0,void 0,(function*(){if(!e.ok)return Promise.reject(e.statusText);p=!0;const i=yield e.text();if(""!==i){this.configuration=new n.i(JSON.parse(i)),this.Ne=this.Me(),v=this.Ne.length>0,""!==t&&0==this.Ne.length&&void 0!==t&&this.Ne.push(t);for(let t=0;t<this.Ne.length;t++){const e=new c.qt(this.Ne[t],this.configuration,this.Ut);f[e.$t]=e.Re(),this.Oe.push(e),d[this.Ne[t]]=this.configuration.H(this.Ne[t])}this._e(),h({patternsMatched:v,templatesMatched:d,results:this.Ut.Fe(),failedHighlights:f,fetchSuccessful:p})}})))).catch((t=>{h({patternsMatched:v,templatesMatched:d,results:this.Ut.Fe(),failedHighlights:f,fetchSuccessful:p})}))}applyTemplate(t,e=!1,i){this.applyTemplateBase(t,e,!0,!0,i)}_e(){for(let t=0;t<this.Oe.length;t++){const e=this.Oe[t];try{const t=e.evaluate();this.Ut.Ae(e.$t,JSON.stringify(t),"HighlightJS:"+e.$t)}catch(t){}}}je(){const t=this;this.Je=setInterval((()=>{t.ge+=1,t._e(),t.ge%3==0&&(t.ve+=Highlighter.Ie,clearInterval(t.Je),t.je()),t.ge>=t.pe&&(t.Ut.Ee(t.configuration),clearInterval(t.Je)),t.ve}),this.ve)}Me(){var t,e,i;let s;const n=null===(t=this.configuration)||void 0===t?void 0:t.I(),o=[];if(n)for(s=0;s<n.length;s++){const t=null===(e=this.configuration)||void 0===e?void 0:e.C(n[s]);t&&this.Le(t)&&o.push(n[s])}for(s=0;s<o.length;s++){const t=null===(i=this.configuration)||void 0===i?void 0:i.B(o[s]);t&&this.Le(t)&&o.splice(s,1)}return o}Le(t){let e;for(let i=0;i<t.length;i++){const s=t[i];if(s.type===r.ke.PageCollection){if(s.P.includes(this.we))return!0}else if(s.type===r.ke.GlobCollection){for(e=0;e<s.P.length;e++)if((0,h.He)(this.we,s.P[e]))return!0}else for(e=0;e<s.P.length;e++)if((0,h.Rt)(s.P[e]))return!0}return!1}}e.fe=Highlighter,Highlighter.Ie=500,null==window.schema_highlighter_instance&&(window.schema_highlighter_instance=new Highlighter,window.schema_highlighter_instance.Te()),window.addEventListener("message",(function(t){var e;if(t.data.De){if("highlightJsExecute"!==t.data.De.Ue)return;const i=t.data.De.$t,s=t.data.De.$e,n=t.data.De.Ce,o=null!==(e=t.data.De.Be)&&void 0!==e&&e;window.schema_highlighter_instance.applyTemplateBase(i,s,n,o,(t=>{window.postMessage({De:{type:"jsonLdGenerated",result:t}})}))}}))},42:function(t,e,i){var s=this&&this.kt||function(t,e,i,s){return new(i||(i=Promise))((function(n,o){function r(t){try{c(s.next(t))}catch(t){o(t)}}function h(t){try{c(s.throw(t))}catch(t){o(t)}}function c(t){var e;t.done?n(t.value):(e=t.value,e instanceof i?e:new i((function(t){t(e)}))).then(r,h)}c((s=s.apply(t,e||[])).next())}))};Object.defineProperty(e,"t",{value:!0}),e.Kt=e.nt=e.Vt=void 0;const n=i(762),o=i(723),r=i(948);function h(t,e,i){void 0!==t[i]&&t[i].constructor===Array?t[i]=t[i].concat(e):function(t,e,i){i.constructor===Object?t[e]=[i]:null!=t[e]?t[e]=[i,t[e]]:t[e]=i}(t,i,e)}function c(t,e,i,s){const n=t.slice(0,e).join("_");return{"@type":s,"@id":(i=null==i?window.location.origin+window.location.pathname:i)+"_"+n}}function u(t,e,i,s,n){return 0===(null==t?void 0:t.length)?(t.push(c(i,n,s["@id"],e)),t[0]):t[0].constructor===Object&&void 0===t[0]["@type"]?(t[0]["@type"]=e,t[0]):function(t,e,i,s){return function(t,e){let i=t,s=!1;for(let t=0;t<i.length;t++)if(i[t]["@type"]===e){i=i[t],s=!0;break}return s?i:null}(t,e)||(t.push(c(i,s,t["@id"],e)),t[t.length-1])}(t,e,i,n)}function a(t,e,i,s,n){return s===i.length?h(t,n,e):void 0===t[e]?t[e]=[]:t[e].constructor!==Array&&(t[e]=[t[e]]),t[e]}function l(t,e,i){const s=function(t){return t.constructor===Array?t:t.split("~")}(t);let n=i;for(let t=1;t<=s.length;t++){const o=s[t-1];n=t%2==0?u(n,o,s,i,t):a(n,o,s,t,e)}}e.Vt=l,e.nt=function t(e,i){!function(t,e){if(void 0===e.Xe&&(e.Xe=[]),void 0===t.name||void 0===t["@type"])return;const i=t.name instanceof Array?t.name:[t.name],s=t["@type"]instanceof Array?new Set(t["@type"]):new Set([t["@type"]]),n=e.Xe.filter((t=>s.has(t)));e["@type"],i.includes(e.name)&&(n.length>0||s.has(e["@type"]))&&l("sameAs",e.ze,t)}(e,i);for(const s in e){if(!Object.prototype.hasOwnProperty.call(e,s))continue;const n=e[s];if(!("string"==typeof n||n instanceof String))if(Array.isArray(n))for(let e=0;e<n.length;e++)"string"==typeof n[e]||n[e]instanceof String||t(n[e],i);else t(n,i)}},e.Kt=function(t,e,i){var h;return s(this,void 0,void 0,(function*(){let s=yield t.text().catch((t=>{}));if(r.qt.Ge.includes(e.name))return{Ve:new n.it(JSON.parse(null!=s?s:""))};if(""==s)return{};const c=JSON.parse(null!=s?s:"");return c["@type"]&&"VideoMarkupResponse"===c["@type"]?s=c.items[e.Nt()]:""!==e.Nt()?s=(0,o.Ke)(null!=s?s:"",e.Nt()):(s=JSON.parse(JSON.stringify(i)),l(e.xt,c,s)),"string"!=typeof s&&(s=JSON.stringify(s)),{source:null!==(h=t.headers.get("x-amz-meta-source"))&&void 0!==h?h:"",content:s}}))}},967:(t,e)=>{function i(t,e){const i=new URLSearchParams(e);return""!==i.toString()?t+"?"+i:t}function s(t,e,i){const s=new Headers;return e&&s.set("x-account-id",e.complete),s.set("x-api-key",t),s.set("accept","application/json"),i&&i.forEach(((t,e)=>s.set(e,t))),s}Object.defineProperty(e,"t",{value:!0}),e.We=e.Lt=void 0,e.Lt=function(t,e,n,o,r){return fetch(i(t,o),{headers:s(e,n,r),mode:"cors",cache:"no-cache"})},e.We=function(t,e,n,o,r,h){return fetch(i(t,r),{method:"POST",headers:s(e,n,h),body:o,mode:"cors",cache:"no-cache"})}},798:(t,e,i)=>{Object.defineProperty(e,"t",{value:!0}),e.Pe=void 0;const s=i(723),n=i(967);class o{constructor(){this.qe={},this.Qe={}}Ze(t){return void 0!==this.qe[t]}Ye(t,e){if(this.Ze(t)){if(this.Qe[t]!==e){const i=this.qe[t];this.Qe[t]=e,i.innerText=e}}}Wt(t,e="",i=!1){if(""===t)return;const s=JSON.parse(t);(s&&void 0!==s["@id"]||Array.isArray(s)&&void 0!==s[0]["@id"])&&this.Ae(s["@id"],t,e,i)}Ae(t,e,i="",n=!1){this.Ze(t)?this.Ye(t,e):(this.qe[t]=(0,s.Se)(e,i,n),this.Qe[t]=e)}Fe(){return this.Qe}Ee(t){var e,i,s,r;const h=new Set(t.I()),c=[];let u;for(const t in this.Qe)u=JSON.parse(this.Qe[t]),Array.isArray(u)?u.forEach((t=>{c.push(JSON.stringify(t))})):c.push(this.Qe[t]);for(const u in this.qe){if(!h.has(u))continue;const a=JSON.stringify({AccountId:null!==(i=null===(e=t.J())||void 0===e?void 0:e.M)&&void 0!==i?i:"",SubAccount:null!==(r=null===(s=t.J())||void 0===s?void 0:s.R)&&void 0!==r?r:"",Source:"HighlightJS:"+u,Domain:window.location.origin,DateSeen:"2021-09-30",URL:t.p,Json:c.length>1?c:c[0]});try{(0,n.We)(o.endpoint,"BiQcqdttWn7eunp8jvxM5oZl3DIx08J42LtTmaaj",t.J(),a,void 0,new Headers({"content-type":"application/json"}))}catch(t){console.debug(t)}}}}e.Pe=o,o.endpoint="https://api.schemaapp.com/pagecount"},723:(t,e)=>{Object.defineProperty(e,"t",{value:!0}),e.Et=e.Ke=e.le=e.Se=void 0,e.Se=function(t,e,i=!1){var s;const n=document.createElement("script");return n.type="application/ld+json",""!==e&&n.setAttribute("data-source",e),n.innerText=t,(null==window.schema_highlighter||window.schema_highlighter.output||void 0===window.schema_highlighter.output||i)&&(document.head.appendChild(n),performance.mark(null!==(s="[highlightjs]: JSON-LD from "+e)&&void 0!==s?s:" inserted into head element.")),n},e.le=function(t){if(0===t.indexOf("http",1))return t;const e=document.createElement("a");return e.href=t,e.origin+e.pathname},e.Ke=function(t,e){let i=JSON.parse(t);if(i.constructor!==Array&&(i=[i]),!i.some((t=>t["@id"]==e)))for(let t=0;t<i.length;t++)i[t]["@id"]=e;return i.length>1?i:i[0]},e.Et=function(t){var e,i=0;for(e=0;e<t.length;e++)i=(i<<5)-i+t.charCodeAt(e),i|=0;return i}},899:(t,e)=>{Object.defineProperty(e,"t",{value:!0}),e.He=e.Rt=void 0,e.He=function(t,e){const i="{asterisk{asterisk}}";if(null===e.match(/^http/)){t=new URL(t).pathname}e=(e=(e=(e=e.replace(/\./g,"\\.")).replace(/\*\*+/g,i)).replace(/\*/g,"[^/]*")).replace(i,".*");const s=new RegExp("^"+e+"$","i");return null!==t.match(s)},e.Rt=function(t,e=document){const i=document.evaluate(t,e,null,XPathResult.ANY_TYPE);return i.resultType===i.BOOLEAN_TYPE&&i.booleanValue||i.resultType>=4&&i.resultType<=5&&null!==i.iterateNext()}},948:function(t,e,i){var s=this&&this.kt||function(t,e,i,s){return new(i||(i=Promise))((function(n,o){function r(t){try{c(s.next(t))}catch(t){o(t)}}function h(t){try{c(s.throw(t))}catch(t){o(t)}}function c(t){var e;t.done?n(t.value):(e=t.value,e instanceof i?e:new i((function(t){t(e)}))).then(r,h)}c((s=s.apply(t,e||[])).next())}))};Object.defineProperty(e,"t",{value:!0}),e.qt=void 0;const n=i(42);class o{constructor(t,e,i,s=document,n=[],o="",r="",h=!1){this.ti=!0,this.$t=t,this.Bt=n,this.configuration=e,this.ei=""!==r?r:e.U(t);const c=""!==o?o:e.k(t);this.ii=s,this.si=new Set,this.qe=[],this.Jt=h,this.ni=this.oi={"@type":c,"@id":this.ei},this.Jt||(this.ni["@context"]={"@vocab":"http://schema.org/",kg:"http://g.co/kg"},this.configuration.X(this.$t)&&(this.ni.url=window.location.origin+window.location.pathname)),this.ri=JSON.parse(JSON.stringify(this.oi)),n.length>0?this.Bt=n:this.Bt=e.G(t,i,s),this.Ut=i,this.hi={};const u=this.ci(this.Bt);this.ui=u[0],this.ai=u[1],this.li(),this.di(),this.fi={},this.vi=[]}getContext(){return this.ni}pi(t,e){let i=0;const s=e.constructor===Array?e:[e];let o="";for(let e=0;e<s.length;e++){const n=t.evaluate(s[e]);n.promise&&(i=this.gi(t,n.promise)?i+1:i),!n.result&&n.Ft||(o=""===o?n.result:o+n.result,i+=1,this.mi(t,n))}return 0===i?this.fi[t.id]=t:(this.hi[t.id]={result:o,xt:t.xt},delete this.fi[t.id],(0,n.Vt)(t.xt,JSON.parse(JSON.stringify(o)),this.ni)),i>0}evaluate(t){this.di();let e=0,i=this.ui;if(!this.ti){i=[];for(let t in this.fi)i.push(this.fi[t])}if(i.forEach((i=>{const s=this.pi(i,null!=t?t:this.ii);e=s?e:e+1})),!this.ti)for(const t in this.hi){const e=this.hi[t];(0,n.Vt)(e.xt,JSON.parse(JSON.stringify(e.result)),this.ni)}return this.ti=!1,this.wi(),this.ni}Re(){return this.fi}ci(t){const e=[],i=[];return t.forEach((t=>{-1===o.yi.indexOf(t.name)?e.push(t):i.push(t)})),this.ui=e,this.ai=i,[e,i]}li(){this.ai.forEach((t=>{const e=t.evaluate(this.ii);e.promise&&this.gi(t,e.promise,this.oi),e.result&&!e.Ft&&(0,n.Vt)(t.xt,e.result,this.oi)}))}gi(t,e,i=this.ni){const o=t;try{e.then((t=>s(this,void 0,void 0,(function*(){204!==t.status&&(yield(0,n.Kt)(t,o,this.ri).then((t=>{t.content&&this.Ut.Ae(o.Nt(),t.content,t.source),t.Ve&&this.vi.push(t.Ve)})))})))).catch((e=>(this.fi[t.id]=t,!1)))}catch(e){this.fi[t.id]=t}return!0}wi(){for(let t=0;t<this.vi.length;t++)this.vi[t].st(this.ni)}mi(t,e){if(!this.si.has(t.id)&&e.context){this.si.add(t.id);new MutationObserver((()=>{this.fi[t.id]=t})).observe(e.context,o.bi)}}di(){this.ni=JSON.parse(JSON.stringify(this.oi))}}e.qt=o,o.Ge=["TagLookupLinkedEntity"],o.bi={attributes:!1,childList:!0,subtree:!0,characterData:!1},o.yi=["TagDefined","TagStoredResource"]},555:(t,e)=>{Object.defineProperty(e,"t",{value:!0}),e.It=e.Oi=void 0;const i=document.createElement("textarea");function s(t){const e=document.createElement("a");return e.href=t,e.href}function n(t,e="src"){let i="";return t.hasAttribute(e)?(i=t.getAttribute(e),i.startsWith("http")?i:s(i)):t.textContent}function o(t){const e=[];for(let i=0;i<t.children.length;i++){const s=t.children.item(i);s&&(o(s),"script"===s.localName.toLowerCase()&&e.push(s))}for(let i=0;i<e.length;i++)t.removeChild(e[i])}function r(t,e){const r=new Set(["img","video","audio","source","embed","script","link","iframe"]),h=new Set("a"),c=new Set(["meta"]),u=new Set(["src","href"]);switch(t.nodeType){case Node.TEXT_NODE:return t.textContent;case Node.ATTRIBUTE_NODE:return u.has(t.nodeName.toLowerCase())?s(t.nodeValue):t.nodeValue;default:if(r.has(t.nodeName.toLowerCase()))return n(t);if(h.has(t.nodeName.toLowerCase()))return n(t,"href");if(c.has(t.nodeName.toLowerCase()))return t.hasAttribute("content")?t.getAttribute("content"):"";const l=t.cloneNode(!0);return o(l),e?l.innerHTML:(a=l.textContent,i.textContent=a,i.innerHTML)}var a}e.Oi=function(t){return(t=t.trim()).startsWith("//")?t.slice(2):t.startsWith("/")?t.slice(1):""===t?".":t},e.It=function(t,e=document,i=!1){let s,n="";try{const o=document.evaluate(t,e,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE);for(let t=0;t<o.snapshotLength;t++){const e=o.snapshotItem(t);e&&(n+=r(e,i)+"\n",s=e)}o.snapshotLength>1&&(s=o.snapshotItem(0).parentNode)}catch(t){}return n=n.replace(/\n$/,""),{result:n,context:s}}},699:(t,e)=>{var i,s;Object.defineProperty(e,"t",{value:!0}),e.O=e.gt=e.ft=e.ke=void 0,function(t){t.PageCollection="http://schemaapp.com/ontology/highlight#PageCollection",t.GlobCollection="http://schemaapp.com/ontology/highlight#GlobCollection",t.XPathCollection="http://schemaapp.com/ontology/highlight#XPathCollection"}(i||(i={})),e.ke=i,function(t){t[t.Before=0]="Before",t[t.After=1]="After",t[t.Omit=2]="Omit",t[t.Number=3]="Number",t[t.NonNumber=4]="NonNumber"}(s||(s={})),e.gt=s;class n{constructor(t){const e=t.match(n.Pi);e&&(this.vt=e.pop())}Ti(){return this.vt?this.vt:null}}e.ft=n,n.Pi=/"(.*)"/i;e.O={L:"http://schemaapp.com/ontology/highlight#",m:"http://ontologies.semanticarts.com/gist#",$:"http://schema.org/",_:"http://www.w3.org/1999/02/22-rdf-syntax-ns#",D:"http://www.w3.org/2000/01/rdf-schema#",Si:"http://hunchmanifest.com/ontology/Application#"}}},e={};(function i(s){var n=e[s];if(void 0!==n)return n.exports;var o=e[s]={exports:{}};return t[s].call(o.exports,o,o.exports,i),o.exports})(115)})();