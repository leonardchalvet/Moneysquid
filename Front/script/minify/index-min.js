function headerDesktop_nav(){[].forEach.call(document.querySelectorAll(".common-header_desktop .head ul li"),(function(e){e.addEventListener("mouseenter",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;document.querySelector(".common-header_desktop").classList.add("style-open"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el:not(:nth-child("+e+"))"),(function(e){e.classList.remove("show")})),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.contains("show")||(document.querySelector(".common-header_desktop .container-el").classList.add("show"),document.querySelector(".common-header_desktop").classList.remove("style-white"),document.querySelector(".common-header_desktop .container-el .el:nth-child("+e+")").classList.add("show"))}))})),document.querySelector(".common-header_desktop .container-el").addEventListener("mouseleave",(function(){document.querySelector(".common-header_desktop").classList.remove("style-open"),document.querySelector(".common-header_desktop .container-el").classList.remove("show"),document.querySelector(".common-header_desktop").classList.add("style-white"),[].forEach.call(document.querySelectorAll(".common-header_desktop .container-el .el"),(function(e){e.classList.remove("show")}))})),document.querySelector(".common-header_mobile .head .action-menu").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.add("show")})),document.querySelector(".common-header_mobile .container-sidebar .background").addEventListener("click",(function(){document.querySelector(".common-header_mobile .container-sidebar").classList.remove("show")})),[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.addEventListener("click",(function(){[].forEach.call(document.querySelectorAll(".common-header_mobile .container-sidebar .sidebar .container-link .link"),(function(e){e.classList.remove("style-open")})),this.classList.toggle("style-open")}))}))}function detectIE(){let e=window.navigator.userAgent,t=e.indexOf("MSIE "),o;if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);if(e.indexOf("Trident/")>0){var n=e.indexOf("rv:");return parseInt(e.substring(n+3,e.indexOf(".",n)),10)}return!1}function animScroll(){let e=window.innerHeight/1.2;[].forEach.call(document.getElementsByTagName("section"),(function(t){window.pageYOffset>=t.offsetTop-e+e/4&&(t.classList.contains("style-reach")||t.classList.add("style-reach"))})),window.pageYOffset>=document.querySelector("footer").offsetTop-window.innerHeight+82?document.querySelector("#common-btn_top").classList.add("style-white"):document.querySelector("#common-btn_top").classList.remove("style-white")}function common_navCarousel1(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t=(e="."+e.className.split(" ")[0])+" .container-el",o=e+" .container-el .el",n=document.querySelector(t).clientWidth,c=document.querySelector(o+":nth-child(2)").clientWidth,l=document.querySelector(o+":nth-child(2)").style.marginRight;l=l?parseInt(l):0;let r=0;[].forEach.call(document.querySelectorAll(o),(function(e){r++}));let s=e+" .container-nav .nav";document.querySelector(s+":nth-child(1)").classList.add("style-disable");let i=0,a;[].forEach.call(document.querySelectorAll(s),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&i>0?i-=2:2==e&&i<r&&(i+=2),i>=r?(i=0,document.querySelector(s+":nth-child(1)").classList.add("style-disable")):0===i?document.querySelector(s+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(s),(function(e){e.classList.remove("style-disable")})),a=i*(c+l),document.querySelector(t).style.webkitTransform="translateX(-"+a+"px) translateZ(0)",document.querySelector(t).style.MozTransform="translateX(-"+a+"px) translateZ(0)",document.querySelector(t).style.msTransform="translateX(-"+a+"px) translateZ(0)",document.querySelector(t).style.OTransform="translateX(-"+a+"px) translateZ(0)",document.querySelector(t).style.transform="translateX(-"+a+"px) translateZ(0)"}))}))}))}function common_navCarousel2(e){[].forEach.call(document.querySelectorAll(e),(function(e){let t,o=(e="."+e.className.split(" ")[0])+" .container-el"+" .el",n=e+" .container-nav .nav";document.querySelector(n+":nth-child(1)").classList.add("style-disable");let c=0;[].forEach.call(document.querySelectorAll(o),(function(){c++}));let l=3,r=3;for(let e=1;e<=3;e++)document.querySelector(o+":nth-child("+e+")").classList.add("style-active"),document.querySelector(o+":nth-child("+e+")").classList.add("displayBlock");[].forEach.call(document.querySelectorAll(n),(function(e){e.addEventListener("click",(function(){let e=Array.prototype.slice.call(this.parentElement.children).indexOf(this)+1;1==e&&r>3?r-=3:2==e&&r<=c+2&&(r+=3),r>c+2?(r=3,document.querySelector(n+":nth-child(1)").classList.add("style-disable")):3===r?document.querySelector(n+":nth-child(1)").classList.add("style-disable"):[].forEach.call(document.querySelectorAll(n),(function(e){e.classList.remove("style-disable")}));let t=r-3+1,l=r;[].forEach.call(document.querySelectorAll(o),(function(e){e.classList.remove("displayBlock"),e.classList.remove("style-active")})),[].forEach.call(document.querySelectorAll(o),(function(e,o){o+1>=t&&o+1<=l&&e.classList.add("displayBlock")})),setTimeout((function(){[].forEach.call(document.querySelectorAll(o),(function(e,o){o+1>=t&&o+1<=l&&e.classList.add("style-active")}))}),50)}))}))}))}function common_horizontalScroll(t){[].forEach.call(document.querySelectorAll(t),(function(t){let o=(t="."+t.className.split(" ")[0])+" .container-slider",n=document.querySelector(o+" .container-el").clientWidth,c=t+" .container-line .line";if(void 0!==t&&null!=t){function l(){let e=window.innerWidth-1200;document.querySelector(t).style.height=n-e+"px"}l(),window.addEventListener("scroll",(function(){let l=document.querySelector(t).offsetTop,r=window.innerWidth/100*25,s=document.querySelector(t).clientWidth,i=window.pageYOffset-l+r,a=0;if([].forEach.call(document.querySelectorAll(t+" .container-el .el"),(function(e){a<e.clientHeight&&(a=e.clientHeight)})),detectIE()){let e=document.querySelector(t+" .container");i>357&&i<parseInt(document.querySelector(t).style.height)-477?e.classList.add("fixed"):e.classList.remove("fixed"),i>parseInt(document.querySelector(t).style.height)-477?(e.classList.add("absolute"),e.style.top=parseInt(document.querySelector(t).style.height)-477-a/2+"px"):(e.classList.remove("absolute"),e.removeAttribute("style"))}document.querySelector(o).style.webkitTransform="translateX(-"+i+"px)",document.querySelector(o).style.MozTransform="translateX(-"+i+"px)",document.querySelector(o).style.msTransform="translateX(-"+i+"px)",document.querySelector(o).style.OTransform="translateX(-"+i+"px)",document.querySelector(o).style.transform="translateX(-"+i+"px)";let u=document.querySelector(t+" .container-el .el:last-child").clientHeight,m=100*i/(n-u);document.querySelector(c).style.webkitTransform="translateX(calc(-100% + "+m+"%))",document.querySelector(c).style.MozTransform="translateX(calc(-100% + "+m+"%))",document.querySelector(c).style.msTransform="translateX(calc(-100% + "+m+"%))",document.querySelector(c).style.OTransform="translateX(calc(-100% + "+m+"%))",document.querySelector(c).style.transform="translateX(calc(-100% + "+m+"%))",d=document.querySelector(t).nextElementSibling.offsetTop,e=d-l-1.25*window.innerHeight,i>=e?document.querySelector(t).classList.contains("active")||document.querySelector(t).classList.add("active"):document.querySelector(t).classList.contains("active")&&document.querySelector(t).classList.remove("active")}))}}))}function common_sectionAutremetiers(){console.log("salut"),[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.addEventListener("click",(function(){this.classList.contains("style-open")?[].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})):([].forEach.call(document.querySelectorAll(".common-section_autremetiers .container-section .section"),(function(e){e.classList.remove("style-open")})),this.classList.add("style-open"))}))}))}function common_sectionPartenaires(){function e(e){return Math.floor(Math.random()*Math.floor(e))}function t(e,t){e.classList.add("hide"),setTimeout((function(){e.setAttribute("src",t),setTimeout((function(){e.classList.remove("hide")}),250)}),250)}[].forEach.call(document.querySelectorAll(".common-section_partenaires"),(function(e){e="."+e.className.split(" ")[0];let o=6,n=document.querySelector(e+" .data-img").getAttribute("data-img").split(";"),c=document.querySelector(e+" .data-img");c.parentNode.removeChild(c),setInterval((function(){let c=100,l=1;for(let r=1;r<=5;r++)setTimeout((function(){o>n.length&&(o=1),t(document.querySelector(e+" .container-el .el:nth-child("+l+") img"),n[o-1]),o++,l++}),c),c+=100}),3e3)}))}if(headerDesktop_nav(),breakPoint_tablet=1250,breakPoint_mobile=700,window.addEventListener("scroll",(function(){window.scrollY>=1?document.querySelector("#common-btn_top").classList.add("style-show"):document.querySelector("#common-btn_top").classList.remove("style-show")})),document.querySelector("#common-btn_top").addEventListener("click",(function(){window.scrollTo(0,0)})),window.addEventListener("load",(function(){animScroll(),[].forEach.call(document.getElementsByClassName("toHref"),(function(e){e.addEventListener("click",(function(e){window.location=this.getAttribute("data-href")}))}))})),window.addEventListener("scroll",(function(){animScroll()})),detectIE())do{[].forEach.call(document.getElementsByTagName("svg"),(function(e){let t=e.parentNode,o=e.getAttribute("class"),n=document.createElement("div");n.setAttribute("class",o+" img"),t.removeChild(e),t.appendChild(n)}))}while(document.getElementsByTagName("svg").length>1);window.addEventListener("load",(function(){function e(){let e=document.querySelector(".section-cover .container-comp"),t=e.offsetTop;window.addEventListener("scroll",(function(){window.scrollY>t-16?e.classList.contains("style-sticky")||(e.classList.add("style-sticky"),document.querySelector(".common-header_desktop").classList.add("style-scrollCover")):(e.classList.remove("style-sticky"),document.querySelector(".common-header_desktop").classList.remove("style-scrollCover"))}))}document.querySelector(".section-cover .container-comp .container-input .input input").addEventListener("focusin",(function(){document.querySelector(".section-cover .container-comp").classList.add("style-open")})),document.querySelector(".section-cover .container-comp .container-input .input input").addEventListener("focusout",(function(){document.querySelector(".section-cover .container-comp").classList.remove("style-open")})),document.querySelector(".section-cover .container-comp .container-input .input input").addEventListener("keyup",(function(){let e=this.value.toLowerCase();e.length>0?[].forEach.call(document.querySelectorAll(".section-cover .container-comp .container-dropdown ul"),(function(t){[].forEach.call(t.querySelectorAll("li:not(:first-child)"),(function(t){t.textContent.trim().toLowerCase().includes(e)?t.classList.remove("hide"):t.classList.add("hide")}))})):[].forEach.call(document.querySelectorAll(".section-cover .container-comp .container-dropdown ul"),(function(e){[].forEach.call(e.querySelectorAll("li:not(:first-child)"),(function(e){e.classList.remove("hide")}))}))})),window.matchMedia("(min-width:"+breakPoint_tablet+"px)").matches?(e(),common_navCarousel1(".common-section_actu"),common_navCarousel1(".common-section_trustpilot"),common_sectionPartenaires(),common_navCarousel2(".common-section_quotes"),common_horizontalScroll(".common-section_sousmetiers")):common_sectionAutremetiers()}));