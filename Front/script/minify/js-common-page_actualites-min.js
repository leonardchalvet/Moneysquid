function headerDesktop_nav(){[].forEach.call(document.querySelectorAll(".common-header_desktop .head ul li"),(function(e){e.addEventListener("mouseenter",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;document.querySelector(".common-header_desktop").classList.add("style-open"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el:not(:nth-child("+e+"))"),(function(e){e.classList.remove("show")})),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.contains("show")||(document.querySelector(".common-header_desktop .container-el").classList.add("show"),document.querySelector(".common-header_desktop").classList.remove("style-white"),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.add("show"))}))})),document.querySelector(".common-header_desktop .container-el").addEventListener("mouseleave",(function(){document.querySelector(".common-header_desktop").classList.remove("style-open"),document.querySelector(".common-header_desktop .container-el").classList.remove("show"),document.querySelector(".common-header_desktop").classList.add("style-white"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el"),(function(e){e.classList.remove("show")}))})),document.querySelector(".common-header_mobile .head .action-menu").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.add("show")})),document.querySelector(".common-header_mobile .container-sidebar .background").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.remove("show")})),[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.addEventListener("click",(function(){[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.classList.remove("style-open")})),this.classList.toggle("style-open")}))}))}function scrollIt(e,t){duration=200;const n=window.pageYOffset,o="now"in window.performance?performance.now():(new Date).getTime(),c=Math.max(document.body.scrollHeight,document.body.offsetHeight,document.documentElement.clientHeight,document.documentElement.scrollHeight,document.documentElement.offsetHeight),l=window.innerHeight||document.documentElement.clientHeight||document.getElementsByTagName("body")[0].clientHeight,r="number"==typeof e?e:e.offsetTop,i=Math.round(c-r<l?c-l:r);if("requestAnimationFrame"in window==!1)return window.scroll(0,i),void(t&&t());function a(){const e="now"in window.performance?performance.now():(new Date).getTime(),c=Math.min(1,(e-o)/duration),l=c;window.scroll(0,Math.ceil(l*(i-n)+n)),window.pageYOffset!==i?requestAnimationFrame(a):t&&t()}a()}function detectIE(){let e=window.navigator.userAgent,t=e.indexOf("MSIE "),n;if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);if(e.indexOf("Trident/")>0){var o=e.indexOf("rv:");return parseInt(e.substring(o+3,e.indexOf(".",o)),10)}return!1}function detectEdge(){let e=window.navigator.userAgent,t=e.indexOf("Edge/");return t>0&&parseInt(e.substring(t+5,e.indexOf(".",t)),10)}function animScroll(){let e=window.innerHeight/1.2;[].forEach.call(document.getElementsByTagName("section"),(function(t){window.pageYOffset>=t.offsetTop-e+e/4&&(t.classList.contains("style-reach")||t.classList.add("style-reach"))})),window.pageYOffset>=document.querySelector("footer").offsetTop-window.innerHeight+82?document.querySelector("#common-btn_top").classList.add("style-white"):document.querySelector("#common-btn_top").classList.remove("style-white")}function common_navCarousel1(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t=(e="."+e.className.split(" ")[0])+" .container-el",n=e+" .container-el .el",o=document.querySelector(t).clientWidth,c=document.querySelector(n+":nth-child(2)").clientWidth,l=getComputedStyle(document.querySelector(n+":nth-child(1)")).marginRight;l=l?parseInt(l):0;let r=0;[].forEach.call(document.querySelectorAll(n),(function(e){r++}));let i=e+" .container-nav .nav";document.querySelector(i+":nth-child(1)").classList.add("style-disable");let a=0,s;[].forEach.call(document.querySelectorAll(i),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&a>0?a-=2:2==e&&a<r&&(a+=2),a>=r?(a=0,document.querySelector(i+":nth-child(1)").classList.add("style-disable")):0===a?document.querySelector(i+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(i),(function(e){e.classList.remove("style-disable")})),s=a*(c+l),s=a>1?s-c:s,detectIE()||s+200>o&&(s=0,a=0,document.querySelector(i+":nth-child(1)").classList.add("style-disable")),document.querySelector(t).style.webkitTransform="translateX(-"+s+"px) translateZ(0)",document.querySelector(t).style.MozTransform="translateX(-"+s+"px) translateZ(0)",document.querySelector(t).style.msTransform="translateX(-"+s+"px) translateZ(0)",document.querySelector(t).style.OTransform="translateX(-"+s+"px) translateZ(0)",document.querySelector(t).style.transform="translateX(-"+s+"px) translateZ(0)"}))}))}))}function common_navCarousel2(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t,n=(e="."+e.className.split(" ")[0])+" .container-el"+" .el",o=e+" .container-nav .nav";document.querySelector(o+":nth-child(1)").classList.add("style-disable");let c=0;[].forEach.call(document.querySelectorAll(n),(function(){c++}));let l=3,r=3;for(let e=1;e<=3;e++)document.querySelector(n+":nth-child("+e+")").classList.add("style-active"),document.querySelector(n+":nth-child("+e+")").classList.add("displayBlock");[].forEach.call(document.querySelectorAll(o),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&r>3?r-=3:2==e&&r<=c+2&&(r+=3),r>c+2?(r=3,document.querySelector(o+":nth-child(1)").classList.add("style-disable")):3===r?document.querySelector(o+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(o),(function(e){e.classList.remove("style-disable")}));let t=r-3+1,l=r;[].forEach.call(document.querySelectorAll(n),(function(e){e.classList.remove("displayBlock"),e.classList.remove("style-active")})),[].forEach.call(document.querySelectorAll(n),(function(e,n){n+1>=t&&n+1<=l&&e.classList.add("displayBlock")})),setTimeout((function(){[].forEach.call(document.querySelectorAll(n),(function(e,n){n+1>=t&&n+1<=l&&e.classList.add("style-active")}))}),50)}))}))}))}function common_navCarousel3(e){[].forEach.call(document.querySelectorAll(e),(function(e){if(e="."+e.className.split(" ")[0],detectEdge())document.querySelector(e).classList.add("edge");else{let t=e+" .container-el",n=e+" .container-el .el",o=document.querySelector(t).clientWidth,c=document.querySelector(n+":nth-child(1)").clientWidth,l=getComputedStyle(document.querySelector(n+":nth-child(1)")).marginRight;l=l?parseInt(l):0;let r=0;[].forEach.call(document.querySelectorAll(n),(function(e){r++}));let i=e+" .container-nav .nav";document.querySelector(i+":nth-child(1)").classList.add("style-disable");let a=0,s;[].forEach.call(document.querySelectorAll(i),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&a>0?a--:2==e&&a<r&&a++,a>=r?(a=0,document.querySelector(i+":nth-child(1)").classList.add("style-disable")):0===a?document.querySelector(i+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(i),(function(e){e.classList.remove("style-disable")})),s=a*(c+l),document.querySelector(t).style.webkitTransform="translateX(-"+s+"px) translateZ(1px)",document.querySelector(t).style.MozTransform="translateX(-"+s+"px) translateZ(1px)",document.querySelector(t).style.msTransform="translateX(-"+s+"px) translateZ(1px)",document.querySelector(t).style.OTransform="translateX(-"+s+"px) translateZ(1px)",document.querySelector(t).style.transform="translateX(-"+s+"px) translateZ(1px)"}))}))}}))}function common_sectionAutremetiers(){[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.addEventListener("click",(function(){this.classList.contains("style-open")?[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})):([].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})),this.classList.add("style-open"))}))}))}function common_sectionPartenaires(){function e(e){return Math.floor(Math.random()*Math.floor(e))}function t(e,t){e.classList.add("hide"),setTimeout((function(){e.setAttribute("src",t),setTimeout((function(){e.classList.remove("hide")}),250)}),250)}[].forEach.call(document.querySelectorAll(".common-section_partenaires"),(function(n){n="."+n.className.split(" ")[0];let o=[0,1,2,3,4],c=0;[].forEach.call(document.querySelectorAll(".common-section_partenaires .container-el .el"),(function(e){"none"!==getComputedStyle(e).display&&c++})),c=o.length-(o.length-c);let l=document.querySelector(n+" .data-img").getAttribute("data-img").split(";"),r=document.querySelector(n+" .data-img");r.parentNode.removeChild(r);let i=0,a=0,s=0,d=[-1,-1];setInterval((function(){let r;a=e(l.length);do{r=!0;for(let e=0;e<c;e++)o[e]==a&&(r=!1);r||(a=e(l.length))}while(!r);r=!0,i=e(c);do{r=!0;for(let e=0;e<d.length;e++)d[e]==i&&(r=!1);r||(i=e(c))}while(!r);o[i]=a,d[s]=i,s++,s>=d.length&&(s=0),t(document.querySelector(n+" .el:nth-child("+(i+1)+") img"),l[a])}),2e3)}))}function common_sectionKnoweverything(){[].forEach.call(document.querySelectorAll(".common-section_knoweverything"),(function(e){e="."+e.className.split(" ")[0],[].forEach.call(document.querySelectorAll(e+" .container .container-tab .tab"),(function(e){e.addEventListener("click",(function(){let t=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;document.querySelector(".common-section_knoweverything .container .container-tab .tab:nth-child("+t+")").classList.contains("style-active")?window.matchMedia("(min-width:"+breakPoint_mobile+"px)").matches||document.querySelector(".common-section_knoweverything .container .container-tab .tab:nth-child("+t+")").classList.remove("style-active"):([].forEach.call(document.querySelectorAll(".common-section_knoweverything .container .container-tab .tab"),(function(e){e.classList.remove("style-active")})),document.querySelector(".common-section_knoweverything .container .container-tab .tab:nth-child("+t+")").classList.add("style-active"),[].forEach.call(document.querySelectorAll(".common-section_knoweverything .container .content-tab .tab"),(function(e){e.classList.remove("style-active")})),document.querySelector(".common-section_knoweverything .container .content-tab .tab:nth-child("+t+")").classList.add("style-active"),window.matchMedia("(min-width:"+breakPoint_mobile+"px)").matches||setTimeout((function(){e.innerHTML+=document.querySelector(".common-section_knoweverything .container .content-tab .tab:nth-child("+t+")").innerHTML}),250))}))}))})),window.matchMedia("(min-width:"+breakPoint_mobile+"px)").matches&&document.querySelector(".common-section_knoweverything .container .container-tab .tab:nth-child(1)").click()}if(headerDesktop_nav(),breakPoint_tablet=1250,breakPoint_mobile=700,window.addEventListener("scroll",(function(){window.scrollY>=1?document.querySelector("#common-btn_top").classList.add("style-show"):document.querySelector("#common-btn_top").classList.remove("style-show"),window.pageYOffset>=document.querySelector(".section-cover").offsetTop+document.querySelector(".section-cover").clientHeight?document.querySelector(".common-section_cta_compare").classList.add("show"):document.querySelector(".common-section_cta_compare").classList.remove("show")})),document.querySelector("#common-btn_top").addEventListener("click",(function(){scrollIt(0)})),[].forEach.call(document.querySelectorAll(".common-section_faq .container-el .el"),(function(e){e.addEventListener("click",(function(){e.classList.contains("active")?e.classList.remove("active"):([].forEach.call(document.querySelectorAll(".common-section_faq .container-el .el"),(function(e){e.classList.remove("active")})),e.classList.add("active"))}))})),window.addEventListener("load",(function(){animScroll(),[].forEach.call(document.getElementsByClassName("toHref"),(function(e){e.addEventListener("click",(function(e){window.location=this.getAttribute("data-href")}))}))})),window.addEventListener("scroll",(function(){animScroll()})),detectIE())do{[].forEach.call(document.getElementsByTagName("svg"),(function(e){let t=e.parentNode,n=e.getAttribute("class"),o=document.createElement("div");o.setAttribute("class",n+" img"),t.removeChild(e),t.appendChild(o)}))}while(document.getElementsByTagName("svg").length>1);window.addEventListener("load",(function(){window.matchMedia("(min-width:"+breakPoint_tablet+"px)").matches&&common_navCarousel1(".common-section_actu")}));