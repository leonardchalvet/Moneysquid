function headerDesktop_nav(){[].forEach.call(document.querySelectorAll(".common-header_desktop .head ul li"),(function(e){e.addEventListener("mouseenter",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;document.querySelector(".common-header_desktop").classList.add("style-open"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el:not(:nth-child("+e+"))"),(function(e){e.classList.remove("show")})),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.contains("show")||(document.querySelector(".common-header_desktop .container-el").classList.add("show"),document.querySelector(".common-header_desktop").classList.remove("style-white"),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.add("show"))}))})),document.querySelector(".common-header_desktop .container-el").addEventListener("mouseleave",(function(){document.querySelector(".common-header_desktop").classList.remove("style-open"),document.querySelector(".common-header_desktop .container-el").classList.remove("show"),document.querySelector(".common-header_desktop").classList.add("style-white"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el"),(function(e){e.classList.remove("show")}))})),document.querySelector(".common-header_mobile .head .action-menu").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.add("show")})),document.querySelector(".common-header_mobile .container-sidebar .background").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.remove("show")})),[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.addEventListener("click",(function(){[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.classList.remove("style-open")})),this.classList.toggle("style-open")}))}))}function detectIE(){let e=window.navigator.userAgent,t=e.indexOf("MSIE "),n;if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);if(e.indexOf("Trident/")>0){var o=e.indexOf("rv:");return parseInt(e.substring(o+3,e.indexOf(".",o)),10)}return!1}function animScroll(){let e=window.innerHeight/1.2;[].forEach.call(document.getElementsByTagName("section"),(function(t){window.pageYOffset>=t.offsetTop-e+e/4&&(t.classList.contains("style-reach")||t.classList.add("style-reach"))})),window.pageYOffset>=document.querySelector("footer").offsetTop-window.innerHeight+82?document.querySelector("#common-btn_top").classList.add("style-white"):document.querySelector("#common-btn_top").classList.remove("style-white")}function common_navCarousel1(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t=(e="."+e.className.split(" ")[0])+" .container-el",n=e+" .container-el .el",o=document.querySelector(t).clientWidth,l=document.querySelector(n+":nth-child(2)").clientWidth,c=document.querySelector(n+":nth-child(2)").style.marginRight;c=c?parseInt(c):0;let r=0;[].forEach.call(document.querySelectorAll(n),(function(e){r++}));let a=e+" .container-nav .nav";document.querySelector(a+":nth-child(1)").classList.add("style-disable");let s=0,i;[].forEach.call(document.querySelectorAll(a),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&s>0?s-=2:2==e&&s<r&&(s+=2),s>=r?(s=0,document.querySelector(a+":nth-child(1)").classList.add("style-disable")):0===s?document.querySelector(a+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(a),(function(e){e.classList.remove("style-disable")})),i=s*(l+c),document.querySelector(t).style.webkitTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.MozTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.msTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.OTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.transform="translateX(-"+i+"px) translateZ(0)"}))}))}))}function common_navCarousel2(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t,n=(e="."+e.className.split(" ")[0])+" .container-el"+" .el",o=e+" .container-nav .nav";document.querySelector(o+":nth-child(1)").classList.add("style-disable");let l=0;[].forEach.call(document.querySelectorAll(n),(function(){l++}));let c=3,r=3;for(let e=1;e<=3;e++)document.querySelector(n+":nth-child("+e+")").classList.add("style-active"),document.querySelector(n+":nth-child("+e+")").classList.add("displayBlock");[].forEach.call(document.querySelectorAll(o),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&r>3?r-=3:2==e&&r<=l+2&&(r+=3),r>l+2?(r=3,document.querySelector(o+":nth-child(1)").classList.add("style-disable")):3===r?document.querySelector(o+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(o),(function(e){e.classList.remove("style-disable")}));let t=r-3+1,c=r;[].forEach.call(document.querySelectorAll(n),(function(e){e.classList.remove("displayBlock"),e.classList.remove("style-active")})),[].forEach.call(document.querySelectorAll(n),(function(e,n){n+1>=t&&n+1<=c&&e.classList.add("displayBlock")})),setTimeout((function(){[].forEach.call(document.querySelectorAll(n),(function(e,n){n+1>=t&&n+1<=c&&e.classList.add("style-active")}))}),50)}))}))}))}function common_navCarousel3(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t=(e="."+e.className.split(" ")[0])+" .container-el",n=e+" .container-el .el",o=document.querySelector(t).clientWidth,l=document.querySelector(n+":nth-child(1)").clientWidth,c=getComputedStyle(document.querySelector(n+":nth-child(1)")).marginRight;c=c?parseInt(c):0;let r=0;[].forEach.call(document.querySelectorAll(n),(function(e){r++}));let a=e+" .container-nav .nav";document.querySelector(a+":nth-child(1)").classList.add("style-disable");let s=0,i,d=e+" .container-line",u=d+" .line";document.querySelector(d).style.width=o-l/2+"px",document.querySelector(u).style.width=o/r/2+"px",[].forEach.call(document.querySelectorAll(a),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&s>0?s--:2==e&&s<r&&s++,s>=r?(s=0,document.querySelector(a+":nth-child(1)").classList.add("style-disable")):0===s?document.querySelector(a+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(a),(function(e){e.classList.remove("style-disable")})),i=s*(l+c),document.querySelector(t).style.webkitTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.MozTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.msTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.OTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(t).style.transform="translateX(-"+i+"px) translateZ(0)",document.querySelector(d).style.webkitTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(d).style.MozTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(d).style.msTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(d).style.OTransform="translateX(-"+i+"px) translateZ(0)",document.querySelector(d).style.transform="translateX(-"+i+"px) translateZ(0)",document.querySelector(u).style.webkitTransform="translateX("+i+"px) translateZ(0)",document.querySelector(u).style.MozTransform="translateX("+i+"px) translateZ(0)",document.querySelector(u).style.msTransform="translateX("+i+"px) translateZ(0)",document.querySelector(u).style.OTransform="translateX("+i+"px) translateZ(0)",document.querySelector(u).style.transform="translateX("+i+"px) translateZ(0)"}))}))}))}function common_sectionAutremetiers(){console.log("salut"),[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.addEventListener("click",(function(){this.classList.contains("style-open")?[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})):([].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})),this.classList.add("style-open"))}))}))}function common_sectionPartenaires(){function e(e){return Math.floor(Math.random()*Math.floor(e))}function t(e,t){e.classList.add("hide"),setTimeout((function(){e.setAttribute("src",t),setTimeout((function(){e.classList.remove("hide")}),250)}),250)}[].forEach.call(document.querySelectorAll(".common-section_partenaires"),(function(n){n="."+n.className.split(" ")[0];let o=[0,1,2,3,4],l=0;[].forEach.call(document.querySelectorAll(".common-section_partenaires .container-el .el"),(function(e){"none"!==getComputedStyle(e).display&&l++})),l=o.length-(o.length-l);let c=document.querySelector(n+" .data-img").getAttribute("data-img").split(";"),r=document.querySelector(n+" .data-img");r.parentNode.removeChild(r);let a=0,s=0,i=0,d=[-1,-1];setInterval((function(){let r;s=e(c.length);do{r=!0;for(let e=0;e<l;e++)o[e]==s&&(r=!1);r||(s=e(c.length))}while(!r);r=!0,a=e(l);do{r=!0;for(let e=0;e<d.length;e++)d[e]==a&&(r=!1);r||(a=e(l))}while(!r);o[a]=s,d[i]=a,i++,i>=d.length&&(i=0),t(document.querySelector(n+" .el:nth-child("+(a+1)+") img"),c[s])}),2e3)}))}if(headerDesktop_nav(),breakPoint_tablet=1250,breakPoint_mobile=700,window.addEventListener("scroll",(function(){window.scrollY>=1?document.querySelector("#common-btn_top").classList.add("style-show"):document.querySelector("#common-btn_top").classList.remove("style-show")})),document.querySelector("#common-btn_top").addEventListener("click",(function(){window.scrollTo(0,0)})),window.addEventListener("load",(function(){animScroll(),[].forEach.call(document.getElementsByClassName("toHref"),(function(e){e.addEventListener("click",(function(e){window.location=this.getAttribute("data-href")}))}))})),window.addEventListener("scroll",(function(){animScroll()})),detectIE())do{[].forEach.call(document.getElementsByTagName("svg"),(function(e){let t=e.parentNode,n=e.getAttribute("class"),o=document.createElement("div");o.setAttribute("class",n+" img"),t.removeChild(e),t.appendChild(o)}))}while(document.getElementsByTagName("svg").length>1);