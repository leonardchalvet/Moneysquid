function headerDesktop_nav(){[].forEach.call(document.querySelectorAll(".common-header_desktop .head ul li"),(function(e){e.addEventListener("mouseenter",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;document.querySelector(".common-header_desktop").classList.add("style-open"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el:not(:nth-child("+e+"))"),(function(e){e.classList.remove("show")})),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.contains("show")||(document.querySelector(".common-header_desktop .container-el").classList.add("show"),document.querySelector(".common-header_desktop").classList.remove("style-white"),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.add("show"))}))})),document.querySelector(".common-header_desktop .container-el").addEventListener("mouseleave",(function(){document.querySelector(".common-header_desktop").classList.remove("style-open"),document.querySelector(".common-header_desktop .container-el").classList.remove("show"),document.querySelector(".common-header_desktop").classList.add("style-white"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el"),(function(e){e.classList.remove("show")}))})),document.querySelector(".common-header_mobile .head .action-menu").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.add("show")})),document.querySelector(".common-header_mobile .container-sidebar .background").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.remove("show")})),[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.addEventListener("click",(function(){[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.classList.remove("style-open")})),this.classList.toggle("style-open")}))}))}function detectIE(){let e=window.navigator.userAgent,t=e.indexOf("MSIE "),o;if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);if(e.indexOf("Trident/")>0){var n=e.indexOf("rv:");return parseInt(e.substring(n+3,e.indexOf(".",n)),10)}return!1}function animScroll(){let e=window.innerHeight/1.2;[].forEach.call(document.getElementsByTagName("section"),(function(t){window.pageYOffset>=t.offsetTop-e+e/4&&(t.classList.contains("style-reach")||t.classList.add("style-reach"))})),window.pageYOffset>=document.querySelector("footer").offsetTop-window.innerHeight+82?document.querySelector("#common-btn_top").classList.add("style-white"):document.querySelector("#common-btn_top").classList.remove("style-white"),window.pageYOffset>=document.querySelector(".section-cover").offsetTop+document.querySelector(".section-cover").clientHeight?document.querySelector(".common-section_cta_compare").classList.add("show"):document.querySelector(".common-section_cta_compare").classList.remove("show")}function common_navCarousel1(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t=(e="."+e.className.split(" ")[0])+" .container-el",o=e+" .container-el .el",n=document.querySelector(t).clientWidth,c=document.querySelector(o+":nth-child(2)").clientWidth,l=getComputedStyle(document.querySelector(o+":nth-child(1)")).marginRight;l=l?parseInt(l):0;let r=0;[].forEach.call(document.querySelectorAll(o),(function(e){r++}));let s=e+" .container-nav .nav";document.querySelector(s+":nth-child(1)").classList.add("style-disable");let a=0,i;[].forEach.call(document.querySelectorAll(s),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&a>0?a-=2:2==e&&a<r&&(a+=2),a>=r?(a=0,document.querySelector(s+":nth-child(1)").classList.add("style-disable")):0===a?document.querySelector(s+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(s),(function(e){e.classList.remove("style-disable")})),i=a*(c+l),i=a>1?i-c:i,i+200>n&&(i=0,a=0),document.querySelector(t).style.webkitTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.MozTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.msTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.OTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.transform="translateX(-"+i+"px) translateZ(0)"}))}))}))}function common_navCarousel2(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t,o=(e="."+e.className.split(" ")[0])+" .container-el"+" .el",n=e+" .container-nav .nav";document.querySelector(n+":nth-child(1)").classList.add("style-disable");let c=0;[].forEach.call(document.querySelectorAll(o),(function(){c++}));let l=3,r=3;for(let e=1;e<=3;e++)document.querySelector(o+":nth-child("+e+")").classList.add("style-active"),document.querySelector(o+":nth-child("+e+")").classList.add("displayBlock");[].forEach.call(document.querySelectorAll(n),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&r>3?r-=3:2==e&&r<=c+2&&(r+=3),r>c+2?(r=3,document.querySelector(n+":nth-child(1)").classList.add("style-disable")):3===r?document.querySelector(n+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(n),(function(e){e.classList.remove("style-disable")}));let t=r-3+1,l=r;[].forEach.call(document.querySelectorAll(o),(function(e){e.classList.remove("displayBlock"),e.classList.remove("style-active")})),[].forEach.call(document.querySelectorAll(o),(function(e,o){o+1>=t&&o+1<=l&&e.classList.add("displayBlock")})),setTimeout((function(){[].forEach.call(document.querySelectorAll(o),(function(e,o){o+1>=t&&o+1<=l&&e.classList.add("style-active")}))}),50)}))}))}))}function common_navCarousel3(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t=(e="."+e.className.split(" ")[0])+" .container-el",o=e+" .container-el .el",n=document.querySelector(t).clientWidth,c=document.querySelector(o+":nth-child(1)").clientWidth,l=getComputedStyle(document.querySelector(o+":nth-child(1)")).marginRight;l=l?parseInt(l):0;let r=0;[].forEach.call(document.querySelectorAll(o),(function(e){r++}));let s=e+" .container-nav .nav";document.querySelector(s+":nth-child(1)").classList.add("style-disable");let a=0,i;[].forEach.call(document.querySelectorAll(s),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&a>0?a--:2==e&&a<r&&a++,a>=r?(a=0,document.querySelector(s+":nth-child(1)").classList.add("style-disable")):0===a?document.querySelector(s+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(s),(function(e){e.classList.remove("style-disable")})),i=a*(c+l),document.querySelector(t).style.webkitTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.MozTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.msTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.OTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.transform="translateX(-"+i+"px) translateZ(0)"}))}))}))}function common_sectionAutremetiers(){console.log("salut"),[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.addEventListener("click",(function(){this.classList.contains("style-open")?[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})):([].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})),this.classList.add("style-open"))}))}))}function common_sectionPartenaires(){function e(e){return Math.floor(Math.random()*Math.floor(e))}function t(e,t){e.classList.add("hide"),setTimeout((function(){e.setAttribute("src",t),setTimeout((function(){e.classList.remove("hide")}),250)}),250)}[].forEach.call(document.querySelectorAll(".common-section_partenaires"),(function(o){o="."+o.className.split(" ")[0];let n=[0,1,2,3,4],c=0;[].forEach.call(document.querySelectorAll(".common-section_partenaires .container-el .el"),(function(e){"none"!==getComputedStyle(e).display&&c++})),c=n.length-(n.length-c);let l=document.querySelector(o+" .data-img").getAttribute("data-img").split(";"),r=document.querySelector(o+" .data-img");r.parentNode.removeChild(r);let s=0,a=0,i=0,d=[-1,-1];setInterval((function(){let r;a=e(l.length);do{r=!0;for(let e=0;e<c;e++)n[e]==a&&(r=!1);r||(a=e(l.length))}while(!r);r=!0,s=e(c);do{r=!0;for(let e=0;e<d.length;e++)d[e]==s&&(r=!1);r||(s=e(c))}while(!r);n[s]=a,d[i]=s,i++,i>=d.length&&(i=0),t(document.querySelector(o+" .el:nth-child("+(s+1)+") img"),l[a])}),2e3)}))}if(headerDesktop_nav(),breakPoint_tablet=1250,breakPoint_mobile=700,window.addEventListener("scroll",(function(){window.scrollY>=1?document.querySelector("#common-btn_top").classList.add("style-show"):document.querySelector("#common-btn_top").classList.remove("style-show")})),document.querySelector("#common-btn_top").addEventListener("click",(function(){window.scrollTo(0,0)})),[].forEach.call(document.querySelectorAll(".common-section_faq .container-el .el"),(function(e){e.addEventListener("click",(function(){e.classList.contains("active")?e.classList.remove("active"):([].forEach.call(document.querySelectorAll(".common-section_faq .container-el .el"),(function(e){e.classList.remove("active")})),e.classList.add("active"))}))})),window.addEventListener("load",(function(){animScroll(),[].forEach.call(document.getElementsByClassName("toHref"),(function(e){e.addEventListener("click",(function(e){window.location=this.getAttribute("data-href")}))}))})),window.addEventListener("scroll",(function(){animScroll()})),detectIE())do{[].forEach.call(document.getElementsByTagName("svg"),(function(e){let t=e.parentNode,o=e.getAttribute("class"),n=document.createElement("div");n.setAttribute("class",o+" img"),t.removeChild(e),t.appendChild(n)}))}while(document.getElementsByTagName("svg").length>1);