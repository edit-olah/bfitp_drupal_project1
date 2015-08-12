(function($){
    
    
// defining bftip_timeout function for page nav and hamburger menu icon behaviour, and put it into a global variable:

var pageNavTimeout;

function bfitp_timeout ($time){
    pageNavTimeout = setTimeout(function(){ 
	
	// slide up/close page nav:
	$('#PageNav nav').slideUp(600);
	// make hamburger menu icon inactive:
	$('.cmn-toggle-switch').removeClass('active');
	
	// remove recorded data string against page nav link:
	$('.pageNavLink').removeData('clicked');
	
    }, $time);
};



$(document).ready(function() {
    // (when page loads and) if there is a '#' is in the url string
    if(window.location.hash){
	//scroll to divId
	var divId = '#About-us';
	$.scrollTo(divId, 1000,{offset: {top:0, left:0}});
	// make relevant page nav element appear current/selected:
	$('.pageNavLinkHome').parent().addClass('current');
    }
    
    // Instantiate MixItUp:
    
    // mixitup control panel is hidden under 530px window width, so don't apply default filter under this width:
    if ($(window).width() > 530) {
	$('#SkillsContainer.peters-skills').mixItUp({
		load: {
		    filter: '.webdev'
		}
	});
    } else {
	$('#SkillsContainer.peters-skills').mixItUp({});
    }
    
    
    
    $('#SkillsContainer.edits-skills').mixItUp({
	//load: {
	    //filter: '.markup, .extension-language, .dynamic-programming-language, .code-library, .cms, .frontend-automation, .version-control, .virtualization, .terminal-emulator'
	//}
    });    
    
    
    $('#PortfolioContainer').mixItUp({
	selectors: {
	    target: '.portfoMix',
	    filter: '.filter-portfo'
	}
    });
    
    // Click Follow function: (find link within the area and make the whole area a link):
    
    $(".click-follow").click(function() {
	$link = $(this).find("a").attr("href"), 
	$linktarget = $(this).find("a").attr("target"), 
	"_blank" === $linktarget ? window.open($link) : window.location.href = $link;
    });
    
    // Page nav behaviour - incl. scrollTo:
    
	//Home page
    
    $('.pageNavLinkHome').click(function(e) {
	//prevent default behaviour
	e.preventDefault();
	 // if we are on the home page
	if(window.location.origin == window.location.href){
	    // scroll to relevant section:
	    // add '#' into the url string
	    var divId = '#' + $(this).attr("href");	
	    $.scrollTo(divId, 1000,{offset: {top:0, left:0}});
	    // make relevant page nav element appear current/selected:
	    $('.mainNavLinkAbout').parent().addClass('current');
	}else{
	    
	    window.location = 'home/#About'; // once it is live 'home' might have to be deleted from this
	}
    });
  
	//Profile page
  
    $('.pageNavLink').click(function(e) {
	//prevent default behaviour
	e.preventDefault();
	// when clicked scroll to relevant section:
	var divId = '#' + $(this).attr("href");	
	$.scrollTo(divId, 1000,{offset: {top:-200, left:0}});
	
	// make relevant page nav element appear current/selected: 
	$('.pageNavLink').parent().removeClass('current');
	$(this).parent().addClass('current');
	
	// record data (clicked string) against .pageNavLink:
	$('.pageNavLink').data('clicked', true);
	
	// if Hamburger Menu is active (therefore pageNav is visible) and when this pageNavLink is clicked: 
		
	if(($('.cmn-toggle-switch').hasClass('active')) && ($('.pageNavLink').data('clicked') === true)){
	    bfitp_timeout(3000);
	}
	

	// remove 'current' class from 'back to top' element after some time:
	if(($(this).attr("href") === 'Hero') && ($(this).parent().hasClass('current'))) {
		
	    $this = $(this);
	    setTimeout(function(){ 
		$this.parent().removeClass('current');
	    }, 2500);
	} 
	    
	
   
    });
    
    // Back to top button behaviour:
    
    $('.backToTopButton').click(function(e) {
	e.preventDefault();
	// when clicked scroll to div with 'Hero' id:
	var divId = '#' + $(this).attr("href");	
	$.scrollTo(divId, 1500,{offset: {top:-160, left:0}});
	// unselect page nav item
	$('.pageNavLink').parent().removeClass('current');
	
    });
    
    
    // Hamburger menu behaviour: - Source/Author: Call Me Nick
    
    (function() {

	"use strict";

	var toggles = document.querySelectorAll(".cmn-toggle-switch");

	for (var i = toggles.length - 1; i >= 0; i--) {
	  var toggle = toggles[i];
	  toggleHandler(toggle);
	};

	function toggleHandler(toggle) {
	  toggle.addEventListener( "click", function(e) {
	    e.preventDefault();
	    
	    //original line of code: (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
	    // amended line of code:
	    
	    if(this.classList.contains("active") === true) {
		this.classList.remove("active");
		
		// slide up/close page nav:
		$('#PageNav nav').slideUp(600);
		// remove recorded data string against page nav link:
		$('.pageNavLink').removeData('clicked');
		clearTimeout(pageNavTimeout);
		
	    } else {
		this.classList.add("active");
		
		// slide down/open page nav:
		$('#PageNav nav').slideDown(600);
	    }
	  });
	}

    })();

});

})(jQuery);