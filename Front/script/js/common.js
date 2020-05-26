// @codekit-prepend 'js-element_header'

/*===================================
=            BREAK POINT            =
===================================*/

	breakPoint_tablet = 1250;
	breakPoint_mobile = 700;


/*=====  End of BREAK POINT  ======*/

/* BTN SCROLL */
window.addEventListener('scroll', function() {
	if ( window.scrollY >= 1 ) {
        document.querySelector('#common-btn_top').classList.add('style-show');
    } else {
    	document.querySelector('#common-btn_top').classList.remove('style-show');
    };

    if (window.pageYOffset >= document.querySelector('.section-cover').offsetTop + document.querySelector('.section-cover').clientHeight ) {
        document.querySelector('.common-section_cta_compare').classList.add('show');
    } else {
        document.querySelector('.common-section_cta_compare').classList.remove('show');
    };
});

function scrollIt(destination, callback) {
  
  duration = 200;

  const start = window.pageYOffset;
  const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

  const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
  const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
  const destinationOffset = typeof destination === 'number' ? destination : destination.offsetTop;
  const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset);

  if ('requestAnimationFrame' in window === false) {
    window.scroll(0, destinationOffsetToScroll);
    if (callback) {
      callback();
    }
    return;
  }

  function scroll() {
    const now = 'now' in window.performance ? performance.now() : new Date().getTime();
    const time = Math.min(1, ((now - startTime) / duration));
    const timeFunction = time;
    window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start));

    if (window.pageYOffset === destinationOffsetToScroll) {
      if (callback) {
        callback();
      }
      return;
    }

    requestAnimationFrame(scroll);
  }

  scroll();
}

document.querySelector('#common-btn_top').addEventListener('click', function(){
    scrollIt(0);
});

/*=======================================
=            COMMON FUNCTION            =
=======================================*/

[].forEach.call(document.querySelectorAll('.common-section_faq .container-el .el'), function(el) {
    el.addEventListener('click', function(){
        if( el.classList.contains('active') ) {
            el.classList.remove('active');
        }
        else {
            [].forEach.call(document.querySelectorAll('.common-section_faq .container-el .el'), function(r) {
                r.classList.remove('active');
            });
            el.classList.add('active');
        }
    });
});


function detectIE() {
    let ua = window.navigator.userAgent;

    let msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    let trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    // other browser
    return false;
}

function detectEdge() {
    let ua = window.navigator.userAgent;

    let edge = ua.indexOf('Edge/');
    if (edge > 0) {
       // Edge (IE 12+) => return version number
       return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}

function animScroll() {
	let windowHeight = window.innerHeight / 1.2;
    [].forEach.call(document.getElementsByTagName('section'), function(el) {
        if (window.pageYOffset >= el.offsetTop - windowHeight + (windowHeight/4)) {
            if (!el.classList.contains('style-reach')) {
                el.classList.add('style-reach');
            }
        }
    });


    if (window.pageYOffset >= document.querySelector('footer').offsetTop - window.innerHeight + 82 ) {
        document.querySelector('#common-btn_top').classList.add('style-white');
    } else {
        document.querySelector('#common-btn_top').classList.remove('style-white');
    };

};

function common_navCarousel1(sectionAll){

	[].forEach.call(document.querySelectorAll(sectionAll), function(section) {

		section = '.' + section.className.split(" ")[0];

		let containerEl = section + ' .container-el';
		let el = section + ' .container-el .el';

		let width_containerEl = document.querySelector(containerEl).clientWidth;
		let width_el = document.querySelector(el+':nth-child(2)').clientWidth;

		let margin_el = getComputedStyle(document.querySelector(el+':nth-child(1)')).marginRight;
		margin_el = margin_el ? parseInt(margin_el) : 0;

		let num_el = 0;
		[].forEach.call(document.querySelectorAll(el), function(el) {
			num_el++;
		});
		
		let nav = section + ' .container-nav .nav';
        document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');

		let count = 0;

		let slideData;

		[].forEach.call(document.querySelectorAll(nav), function(n) {
			n.addEventListener('click', function() {

				let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
				if ( indexNav == 1 && count > 0 ) {
					count = count - 2;
				} else if ( indexNav == 2 && count < num_el ) {
					count = count + 2;
				}

				if (count >= num_el) {
                    count = 0;
                    document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
				} else if (count === 0) {
					document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
				} else {
					[].forEach.call(document.querySelectorAll(nav), function(remove) {
						remove.classList.remove('style-disable');
					});
				}

				slideData = count * (width_el + margin_el);
				slideData = count > 1 ? (slideData - width_el) : slideData;

                if(!detectIE()) {
    				if( (slideData+200) > width_containerEl ) {
    					slideData = 0;
    					count = 0;
                        document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
    				}
                }

				document.querySelector(containerEl).style.webkitTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
				document.querySelector(containerEl).style.MozTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
				document.querySelector(containerEl).style.msTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
				document.querySelector(containerEl).style.OTransform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
				document.querySelector(containerEl).style.transform = 'translateX(-' + slideData + 'px' + ') translateZ(0)';
			});
		});
	});
};

function common_navCarousel2(sectionAll){

	[].forEach.call(document.querySelectorAll(sectionAll), function(section) {

		section = '.' + section.className.split(" ")[0];

		let containerEl = section + ' .container-el';
		let el =  containerEl + ' .el';
		let nav = section + ' .container-nav .nav';
        document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');

		let num_el = 0;
		[].forEach.call(document.querySelectorAll(el), function() {
			num_el++;
		});

		let step_el = 3;

		let count = 3;

		for(let i=1 ; i <= step_el ; i++) {
			document.querySelector(el + ':nth-child(' + i + ')').classList.add('style-active');
			document.querySelector(el + ':nth-child(' + i + ')').classList.add('displayBlock');
		}

		[].forEach.call(document.querySelectorAll(nav), function(n) {
			n.addEventListener('click', function() {

				let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
				if ( indexNav == 1 && count > 3 ) {
					count = count - step_el;
				} else if ( indexNav == 2 && count <= (num_el+2) ) {
					count = count + step_el;
				}

				if (count > (num_el+2) ) {
                    count = 3;
                    document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
				} else if (count === 3 ) {
					document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
				} else {
					[].forEach.call(document.querySelectorAll(nav), function(remove) {
						remove.classList.remove('style-disable');
					});
				}

                let first_el = count - step_el + 1;
                let last_el = count;

				[].forEach.call(document.querySelectorAll(el), function(element) {
					element.classList.remove('displayBlock');
					element.classList.remove('style-active');
				});
				[].forEach.call(document.querySelectorAll(el), function(element, i) {
					if( (i+1) >= first_el && (i+1) <= last_el) {
						element.classList.add('displayBlock');
					}
				});
				setTimeout(function(){
					[].forEach.call(document.querySelectorAll(el), function(element, i) {
						if( (i+1) >= first_el && (i+1) <= last_el) {
							element.classList.add('style-active');
						}
					});
				}, 50);

			});
		});
	});
};

function common_navCarousel3(sectionAll){

    [].forEach.call(document.querySelectorAll(sectionAll), function(section) {

        section = '.' + section.className.split(" ")[0];

        let containerEl = section + ' .container-el';
        let el = section + ' .container-el .el';

        let width_containerEl = document.querySelector(containerEl).clientWidth;
        let width_el = document.querySelector(el+':nth-child(1)').clientWidth;

        let margin_el = getComputedStyle(document.querySelector(el+':nth-child(1)')).marginRight;
        margin_el = margin_el ? parseInt(margin_el) : 0;

        let num_el = 0;
        [].forEach.call(document.querySelectorAll(el), function(el) {
            num_el++;
        });
        
        let nav = section + ' .container-nav .nav';
        document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');

        let count = 0;

        let slideData;

        [].forEach.call(document.querySelectorAll(nav), function(n) {
            n.addEventListener('click', function() {

                let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
                if ( indexNav == 1 && count > 0 ) {
                    count--;
                } else if ( indexNav == 2 && count < num_el ) {
                    count++;
                }

                if (count >= num_el) {
                    count = 0;
                    document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
                } else if (count === 0) {
                    document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
                } else {
                    [].forEach.call(document.querySelectorAll(nav), function(remove) {
                        remove.classList.remove('style-disable');
                    });
                }

                slideData = count * (width_el + margin_el);

                document.querySelector(containerEl).style.webkitTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.MozTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.msTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.OTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.transform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
            });
        });

    });
};

/* REMOVE AT THE END
function common_navCarousel3_forEgde(sectionAll){
    [].forEach.call(document.querySelectorAll(sectionAll), function(section) {

        section = '.' + section.className.split(" ")[0];
        document.querySelector(section).classList.add('edge');

        let containerEl = section + ' .container-el';
        let el = section + ' .container-el .el';

        let width_el = document.querySelector(el+':nth-child(1)').clientWidth;

        let margin_el = getComputedStyle(document.querySelector(el+':nth-child(1)')).marginRight;
        margin_el = margin_el ? parseInt(margin_el) : 0;

        let heightEl_max = 0;
        [].forEach.call(document.querySelectorAll(el), function(element) {
            if(heightEl_max < element.clientHeight) {
                heightEl_max = element.clientHeight;
            }
            element.classList.add('displayNone');
            element.classList.add('hide');
        });
        document.querySelector(containerEl).style.height = heightEl_max + 'px';

        let num_el = 0;
        [].forEach.call(document.querySelectorAll(el), function(el) {
            num_el++;
        });
        
        let nav = section + ' .container-nav .nav';
        document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');

        let count = 1;

        let slideData;

        document.querySelector(el + ':nth-child(1)').classList.remove('displayNone');
        document.querySelector(el + ':nth-child(2)').classList.remove('displayNone');
        document.querySelector(el + ':nth-child(3)').classList.remove('displayNone');
        document.querySelector(el + ':nth-child(1)').classList.remove('hide');
        document.querySelector(el + ':nth-child(2)').classList.remove('hide');
        document.querySelector(el + ':nth-child(3)').classList.remove('hide');
        document.querySelector(el + ':nth-child(1)').classList.add('center');
        document.querySelector(el + ':nth-child(2)').classList.add('right');

        [].forEach.call(document.querySelectorAll(nav), function(n) {
            n.addEventListener('click', function() {

                let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
                if ( indexNav == 1 && count > 0 ) {
                    count--;
                } else if ( indexNav == 2 && count < num_el ) {
                    count++;

                    if( (count-3) >= 1 ) {
                        document.querySelector(el + ':nth-child('+(count-3)+')').classList.remove('leftHide');
                        document.querySelector(el + ':nth-child('+(count-3)+')').classList.add('displayNone');
                    }

                    if( (count-2) >= 1 ) {
                        document.querySelector(el + ':nth-child('+(count-2)+')').classList.remove('left');
                        document.querySelector(el + ':nth-child('+(count-2)+')').classList.add('leftHide');
                        document.querySelector(el + ':nth-child('+(count-2)+')').classList.add('hide');
                    }

                    if( (count-1) >= 1 ) {
                        document.querySelector(el + ':nth-child('+(count-1)+')').classList.remove('center');
                        document.querySelector(el + ':nth-child('+(count-1)+')').classList.add('left');
                    }

                    document.querySelector(el + ':nth-child('+(count)+')').classList.remove('right');
                    document.querySelector(el + ':nth-child('+(count)+')').classList.add('center');

                    if( (count+1) <= num_el ) {
                        document.querySelector(el + ':nth-child('+(count+1)+')').classList.add('right');
                    }

                    if( (count+2) <= num_el ) {
                        document.querySelector(el + ':nth-child('+(count+2)+')').classList.remove('displayNone');
                        setTimeout(function(){
                            document.querySelector(el + ':nth-child('+(count+2)+')').classList.remove('hide');
                        },100);
                    }
                }

                if (count === 1) {
                    document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
                }
                else {
                    document.querySelector(nav + ':nth-child(1)').classList.remove('style-disable');
                }

                /*
                if (count >= num_el) {
                    count = 0;
                    document.querySelector(nav + ':nth-child(1)').classList.add('style-disable');
                } else  else {
                    [].forEach.call(document.querySelectorAll(nav), function(remove) {
                        remove.classList.remove('style-disable');
                    });
                }

                slideData = count * (width_el + margin_el);

                document.querySelector(containerEl).style.webkitTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.MozTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.msTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.OTransform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                document.querySelector(containerEl).style.transform = 'translateX(-' + slideData + 'px' + ') translateZ(1px)';
                
            });
        });
        
    });  
};
function common_horizontalScroll(sectionAll){
	
    [].forEach.call(document.querySelectorAll(sectionAll), function(section) {
        
        section = '.' + section.className.split(" ")[0];
		let slider = section + ' .container-slider';
		let sliderWidth = document.querySelector(slider + ' .container-el').clientWidth;
		let progressbar = section + ' .container-line .line';

		if(typeof(section) != 'undefined' && section != null){
            
            function initHeight() {
				let a = window.innerWidth - 1200;
				document.querySelector(section).style.height = sliderWidth - a + 'px';
            };

			initHeight();
			
			window.addEventListener('scroll', function() {

				let a = document.querySelector(section).offsetTop;
				let b = (window.innerWidth / 100) * 25; 
				let c = document.querySelector(section).clientWidth;

				let scrollTop = window.pageYOffset - a + b;

                let bigHeightEL = 0;
                [].forEach.call(document.querySelectorAll(section + ' .container-el .el'), function(el) {
                    if( bigHeightEL < el.clientHeight) {
                        bigHeightEL = el.clientHeight;
                    }
                });
                
                if(detectIE()) {
                    let container = document.querySelector(section + ' .container');
                    if( scrollTop > 357  &&  scrollTop < (parseInt(document.querySelector(section).style.height)-477) ) {
                        container.classList.add('fixed');
                    }
                    else {
                        container.classList.remove('fixed');
                    }
                    
                    if( scrollTop > (parseInt(document.querySelector(section).style.height)-477) ) {
                        container.classList.add('absolute');
                        container.style.top = (parseInt(document.querySelector(section).style.height)-477-(bigHeightEL/2)) + 'px';
                    }
                    else {
                        container.classList.remove('absolute');
                        container.removeAttribute('style');
                    }
                }

				document.querySelector(slider).style.webkitTransform = 'translateX(-' + scrollTop + 'px' + ')';
				document.querySelector(slider).style.MozTransform = 'translateX(-' + scrollTop + 'px' + ')';
				document.querySelector(slider).style.msTransform = 'translateX(-' + scrollTop + 'px' + ')';
				document.querySelector(slider).style.OTransform = 'translateX(-' + scrollTop + 'px' + ')';
				document.querySelector(slider).style.transform = 'translateX(-' + scrollTop + 'px' + ')';

				let lastHeightEl = document.querySelector(section + ' .container-el .el:last-child').clientHeight;
				let progressbarData = scrollTop * 100 / (sliderWidth - lastHeightEl);

				document.querySelector(progressbar).style.webkitTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
				document.querySelector(progressbar).style.MozTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
				document.querySelector(progressbar).style.msTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
				document.querySelector(progressbar).style.OTransform = 'translateX(calc(-100% + ' + progressbarData + '%))';
				document.querySelector(progressbar).style.transform = 'translateX(calc(-100% + ' + progressbarData + '%))';

				d = document.querySelector(section).nextElementSibling.offsetTop;
				e = d - a - (window.innerHeight * 1.25);
				
				if (scrollTop >= e) {
					if (!document.querySelector(section).classList.contains('active')) {
						document.querySelector(section).classList.add('active');
					}
				} else {
					if (document.querySelector(section).classList.contains('active')) {
						document.querySelector(section).classList.remove('active');
					}
				}
			    
			});
		}
	});
};
*/

function common_sectionAutremetiers(){
	[].forEach.call(document.querySelectorAll('.common-section_autremetiers .container-section .section'), function(section) {
		section.addEventListener('click', function() {
			if (this.classList.contains('style-open')) {
				[].forEach.call(document.querySelectorAll('.common-section_autremetiers .container-section .section'), function(s) {
					s.classList.remove('style-open');
				});
			} else {
				[].forEach.call(document.querySelectorAll('.common-section_autremetiers .container-section .section'), function(s) {
					s.classList.remove('style-open');
				});
				this.classList.add('style-open');
			}

		});
	});
}

function common_sectionPartenaires(){

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    function remplaceImg(img, data) {
        img.classList.add('hide');
        setTimeout(function(){
            img.setAttribute('src', data);
            setTimeout(function(){
                img.classList.remove('hide');
            }, 250);
        }, 250);
    }

    [].forEach.call(document.querySelectorAll('.common-section_partenaires'), function(section) {
        
        section = '.' + section.className.split(" ")[0];

        let imgAct = [ 0, 1, 2, 3, 4 ];
        let subLength = 0;
        [].forEach.call(document.querySelectorAll('.common-section_partenaires .container-el .el'), function(el) {
            if(getComputedStyle(el).display !== 'none') {
                subLength++;
            }
        });
        subLength = imgAct.length - (imgAct.length - subLength);
        let dataImg = document.querySelector(section + ' .data-img').getAttribute('data-img').split(';');
        let sectionData = document.querySelector(section + ' .data-img');
        sectionData.parentNode.removeChild(sectionData);

        
        let choiceEl = 0;
        let choiceData = 0;
        let indexPrev = 0;
        let prevChoice = [ -1, -1 ];
        setInterval(function(){
            
            let bool;
            choiceData = getRandomInt(dataImg.length);
            do {
                bool = true;
                for(let i=0 ; i < subLength ; i++) {
                    if(imgAct[i] == choiceData) {
                        bool = false;
                    }
                }
                if(!bool) {
                    choiceData = getRandomInt(dataImg.length);
                }
            } while(!bool);

            bool = true;
            choiceEl   = getRandomInt(subLength);
            do {
                bool = true;
                for(let i=0 ; i < prevChoice.length ; i++) {
                    if(prevChoice[i] == choiceEl) {
                        bool = false;
                    }
                }
                if(!bool) {
                    choiceEl = getRandomInt(subLength);
                }
            } while(!bool);


            imgAct[choiceEl] = choiceData;
            prevChoice[indexPrev] = choiceEl;

            indexPrev++;
            if(indexPrev >= prevChoice.length) {
                indexPrev = 0;
            }

            remplaceImg( document.querySelector(section + ' .el:nth-child(' + (choiceEl+1) + ') img'), dataImg[choiceData] );

        }, 2000);

    });
}

function common_sectionKnoweverything(){
    [].forEach.call(document.querySelectorAll('.common-section_knoweverything'), function(section) {
        section = '.' + section.className.split(" ")[0];

        [].forEach.call(document.querySelectorAll(section + ' .container .container-tab .tab'), function(tab) {
            tab.addEventListener('click', function() {
                
                let indexNav = Array.prototype.slice.call(this.parentElement.children).indexOf(this) + 1;
                if( !document.querySelector('.common-section_knoweverything .container .container-tab .tab:nth-child('+indexNav+')').classList.contains('style-active') ) {
                    
                    [].forEach.call(document.querySelectorAll('.common-section_knoweverything .container .container-tab .tab'), function(r) {
                        r.classList.remove('style-active');
                    });
                    document.querySelector('.common-section_knoweverything .container .container-tab .tab:nth-child('+indexNav+')').classList.add('style-active');

                    [].forEach.call(document.querySelectorAll('.common-section_knoweverything .container .content-tab .tab'), function(r) {
                        r.classList.remove('style-active');
                    });
                    document.querySelector('.common-section_knoweverything .container .content-tab .tab:nth-child('+indexNav+')').classList.add('style-active');

                    if (!window.matchMedia('(min-width:' + breakPoint_mobile + 'px)').matches) {
                        setTimeout(function(){
                            tab.innerHTML += document.querySelector('.common-section_knoweverything .container .content-tab .tab:nth-child('+indexNav+')').innerHTML;
                        }, 250);
                    }
                }
                else {
                    if (!window.matchMedia('(min-width:' + breakPoint_mobile + 'px)').matches) {
                        document.querySelector('.common-section_knoweverything .container .container-tab .tab:nth-child('+indexNav+')').classList.remove('style-active');
                    }
                }

            });
        });
    });

    if (window.matchMedia('(min-width:' + breakPoint_mobile + 'px)').matches) {
        document.querySelector('.common-section_knoweverything .container .container-tab .tab:nth-child(1)').click();
    }
}

/*=====  End of COMMON FUNCTION  ======*/

/*===========================================
=            ONLOAD RUN FUNCTION            =
===========================================*/
window.addEventListener('load', function() {
	
    animScroll();
	
    /* DETECT BTN TOHREF */
	[].forEach.call(document.getElementsByClassName('toHref'), function(toHref) {
        toHref.addEventListener('click', function(el) {
            window.location = this.getAttribute('data-href');
        });
    });

});
/*=====  End of ONLOAD RUN FUNCTION  ======*/


/*============================================
=            ONSCROL RUN FUNCTION            =
============================================*/
window.addEventListener('scroll', function() {
    animScroll();
});
/*=====  End of ONSCROL RUN FUNCTION  ======*/


/*===========================================
=                ONLY FOR IE                =
===========================================*/
if(detectIE()) {
    do {
        [].forEach.call(document.getElementsByTagName('svg'), function(svg) {
            let parent = svg.parentNode;
            let getClass = svg.getAttribute('class');

            let div = document.createElement("div");
            div.setAttribute('class', getClass + ' img');

            parent.removeChild(svg);
            parent.appendChild(div);
        });
    } while( document.getElementsByTagName('svg').length > 1 );

}
/*=========  End of ONLY FOR IE  ==========*/



