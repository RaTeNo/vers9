$(function(){
	// Основной слайдер на главной
	$('.main_slider .slider').owlCarousel({
		items: 1,
		margin: 0,
		nav: true,
		dots: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		loop: true,
		smartSpeed: 750,
		autoplay: true,
		autoplayTimeout: 5000,
		
	})


	// Основной слайдер на главной
	 var owl33 = $('.main_slider2 .slider').owlCarousel({
		items: 1,
		margin: 0,
		nav: false,
		dots: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		loop: true,
		smartSpeed: 750,
		autoplay: true,
		autoplayTimeout: 5000,		
	})

	  // Custom Button
	$('.customNextBtn').click(function() {
	    owl33.trigger('next.owl.carousel');
	    console.log(123);
	});
	$('.customPreviousBtn').click(function() {
	    owl33.trigger('prev.owl.carousel');
	});


	// Основной слайдер на главной
	 var owl2 =$('.main_slider3 .slider').owlCarousel({
	 	items: 1,
	 	margin: 0,
	 	nav: false,
	 	dots: false,		
	 	loop: true,
	 	navText: [
	 		'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	         '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	      
	     ],
	 	smartSpeed: 750,
	 	autoplay: true,
	 	autoplayTimeout: 5000,		
	 })

	 // Custom Button
	$('.customNextBtn').click(function() {
	    owl2.trigger('next.owl.carousel');
	});
	$('.customPreviousBtn').click(function() {
	    owl2.trigger('prev.owl.carousel');
	});


	// Отзывы
	$('.reviews .slider').owlCarousel({
		items: 2,
		margin: 73,
		nav: true,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		dotsEach : true,
		dots: false,
		loop: false,
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 1,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 2,
	            margin: 73
	        }
		}		
	})


	// Статьи
	$('.articles .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		dotsEach : false,
		loop: false,
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 3,
	            margin: 20
	        },
	        1200:{
	            items: 3,
	            margin: 36
	        }
		}
	})


	// Видео отзывы
	$('.video_reviews .slider').owlCarousel({
		items: 2,
		nav: true,
		dots: false,
		loop: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 2,
	            margin: 36
	        }
		},		
	})


	// Акции
	$('.stocks .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		dotsEach : true,
		loop: false,
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 3,
	            margin: 36
	        }
		},
		
	})


	// Сотрудники
	$('.team .slider').owlCarousel({
		items: 1,
		margin: 73,
		nav: true,
		dotsEach : true,
		dots: false,
		loop: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        768:{
	            items: 2,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 2,
	            margin: 36
	        }
		},
		
	})


	// Вакансии
	$('.vacancies .slider').owlCarousel({
		items: 1,
		nav: true,
		dots: false,
		navText: [
			'<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.65502 0C5.43764 0 5.22002 0.0821376 5.05436 0.24365L0.249129 4.91658C-0.083043 5.2396 -0.083043 5.76261 0.249129 6.08481L5.05436 10.7577C5.38653 11.0808 5.92435 11.0808 6.25567 10.7577L6.32868 10.6867C6.66085 10.3637 6.66085 9.8407 6.32868 9.5185L3.04665 6.32684H14.1505C14.6194 6.32684 15 5.95673 15 5.50069C15 5.04465 14.6194 4.67454 14.1505 4.67454H3.04665L6.32868 1.48288C6.66085 1.15985 6.66085 0.636847 6.32868 0.314648L6.25567 0.24365C6.08958 0.0821376 5.87239 0 5.65502 0Z" fill="white"/></svg>',
	        '<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/></svg>'
	        
	    ],
		dotsEach : true,
		loop: false,
		smartSpeed: 750,
		responsive: {
	        0:{
	            items: 1,
	            margin: 20
	        },
	        1024:{
	            items: 2,
	            margin: 20
	        },
	        1200:{
	            items: 2,
	            margin: 36
	        }
		},
		
	})


	// Меню в шапке
	$('header .menu').flexMenu({		
		showOnHover: true,
		linkText: '<span>ОСТАЛЬНОЕ</span>',
		linkTitle: '',
		linkTextAll: 'Меню',
	})

	//социальные сети
	if($('.mob_scroll .socials a').length>4)
	{
		$(".mob_scroll .socials a").eq(2).after($('<a href="/" class="more"><img src="./images/dot2.svg" alt=""><div class="arrow"><svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5L0 0L9 0L4.5 5Z" fill=""/></svg></div><div class="more_block"></div></a>'));
		$('.mob_scroll .socials a').each(function( index, element ) {
			if(index>3)
			{
				$(element).clone(true).appendTo(".mob_scroll .more_block");
				(element).remove();
			}
		});
	}
	$('body').on('click', '.mob_scroll .more_block a', function(e) {
		var href = $(this).attr('href');
      	window.open(href, '_blank');
	});

	$('body').on('click', '.mob_scroll a.more', function(e) {
    	e.preventDefault()
    });


	if($('.mob_header .socials a').length>4)
	{
		$(".mob_header .socials a").eq(2).after($('<a href="/" class="more"><img src="./images/dot2.svg" alt=""><div class="arrow"><svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5L0 0L9 0L4.5 5Z" fill=""/></svg></div><div class="more_block"></div></a>'));
		$('.mob_header .socials a').each(function( index, element ) {
			if(index>3)
			{
				$(element).clone(true).appendTo(".mob_header .more_block");
				(element).remove();
			}
		});
	}
	$('body').on('click', '.mob_header .more_block a', function(e) {
		var href = $(this).attr('href');
      	window.open(href, '_blank');
	});


	$('body').on('click', '.mob_header a.more', function(e) {
    	e.preventDefault()
    });


    if($('.mob_header .contacts a').length>2)
	{	
		$('.mob_header .contacts a').each(function( index, element ) {
			if(index>2)
			{
				$(element).clone(true).appendTo(".mob_header .more_block").addClass("new_contact");
				(element).remove();
			}
		});
	}




	// Фильтр
	$('body').on('click', 'aside .mob_filter_link', function(e) {
    	e.preventDefault()

    	if( $(this).hasClass('active') ) {
			$(this).removeClass('active')
			$('aside .filter').fadeOut(200)
			$('.overlay').fadeOut(200)
		} else {
			$(this).addClass('active')
			$('aside .filter').fadeIn(300)
			$('.overlay').fadeIn(300)
		}
	})

	$('aside .filter .close, .overlay, aside .block .title .close').click(function(e){
		e.preventDefault()
	    $('aside .mob_filter_link').removeClass('active')
		$('aside .filter').fadeOut(200)
		$('.overlay').fadeOut(200)
	})


	$priceRange = $('.filter #price_range').ionRangeSlider({
        type     : 'double',
        min      : 0,
        max      : 10000,
        from     : 1000,
        to       : 5000,
        step     : 10,
        postfix  : ' ₽'
    }).data("ionRangeSlider")


    // Таймер
	$('.timer').each(function(){
		let timerDate = $(this).data('date')


		$(this).countdown(timerDate, function(event) {
			let daysArr = event.strftime( '%D' ).split('')
			let hoursArr = event.strftime( '%H' ).split('')
			let minutesArr = event.strftime( '%M' ).split('')
			let secondsArr = event.strftime( '%S' ).split('')

			$(this).html( event.strftime(String()
				+ '<div class="item">'
					+ '<div class="val"><span>'+daysArr[0]+'</span><span>'+daysArr[1]+'</span></div>'
					+ '<div>дней</div>'
				+ '</div>'

				+ '<div class="item">'
					+ '<div class="val"><span>'+hoursArr[0]+'</span><span>'+hoursArr[1]+'</span></div>'
					+ '<div>часов</div>'
				+ '</div>'

				+ '<div class="item">'
					+ '<div class="val"><span>'+minutesArr[0]+'</span><span>'+minutesArr[1]+'</span></div>'
					+ '<div>минут</div>'
				+ '</div>'

				+ '<div class="item">'
					+ '<div class="val"><span>'+secondsArr[0]+'</span><span>'+secondsArr[1]+'</span></div>'
					+ '<div>секунд</div>'
				+ '</div>'
				) )
		})
	})


	// До/После
	$('.before_after .item').each(function(){
		$(this).beforeAfter()
	})


	// Фото с маркерами
	$('.image_tips .image .btn').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.image')
		let info = $(this).data('info')

		if( $(this).parents('.item').hasClass('active') ) {
			parent.find('.item').removeClass('active')
			parent.find('.info').hide()
		} else {
			parent.find('.item').removeClass('active')
			parent.find('.info').hide()

			$(this).parents('.item').addClass('active')
			parent.find(info).fadeIn(300)
		}
	})

	$('.image_tips .image .close').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.image')

		parent.find('.item').removeClass('active')
		parent.find('.info').hide()
	})


	// Квиз-Опрос
	$('.quiz_poll .step .links .next').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.steps')
		let nextStep = $(this).data('step')

		if($(this).hasClass("valide"))
		{
			let check = $(this).parent().prev().find("input");

			if(check.val()!="")
			{	
				check.removeClass("error");			
				parent.find('.step').hide()
				parent.find(nextStep).fadeIn(300)
			}
			else
			{
				check.addClass("error");
			}
		}
		else
		{
			parent.find('.step').hide()
			parent.find(nextStep).fadeIn(300)
		}
	})


	$("input[name='agree']").change(function () {
		if (this.checked) {
			$(this).closest("form").find("button").prop("disabled", false);
		}
		else
		{
			$(this).closest("form").find("button").prop("disabled", true);
		}
	});

	$('.product_delete').click(function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
	});


	// Покупка товара
	$('.product_info .buy .buy_link').click(function(e){
		e.preventDefault()

		let parent = $(this).closest('.btn')

		$(this).addClass('bounceOut')
		parent.find('.order_link').delay(750).fadeIn(300)
	})

	// Социальная выпадашка
	$('header .socials a.more, .mob_header .socials a.more').click(function(e){
		e.preventDefault()
		if($(this).hasClass("active"))
		{
			$(this).removeClass("active")
		}
		else
		{
			$(this).addClass("active")
		}
		
	})

	$('.products_sort_mobile .schema-order__link').click(function(e){
		e.preventDefault()	
		if($(this).hasClass("active"))
		{
			$(this).removeClass("active");
			$(".schema-order__popover").hide();
		}	
		else
		{
			$(this).addClass("active");
			$(".schema-order__popover").show();
		}

	})


	// Логотип
	$('.resizeble-font').each(function () {
        let length = $(this).text().replace(/^\s+|\s+$|\(|\)|8-/gm, '').length,
            size = $(this).width() / length * parseFloat($(this).data('ratio'))

        if( size > 33 ) {
        	size = 33
        }

        if( size < 16 ) {
        	size = 16
        }
        size2 = size+4
        $(this).css('font-size', size + 'px').css('line-height', size2 + 'px')
    })

    $('.resizeble-font2').each(function () {
        let length = $(this).text().replace(/^\s+|\s+$|\(|\)|8-/gm, '').length,
            size = $(this).width() / length * parseFloat($(this).data('ratio'))

        if( size > 16 ) {
        	size = 16
        }

        if( size < 10 ) {
        	size = 10
        }

        $(this).css('font-size', size + 'px')
    })


    $('.resizeble-font3').each(function () {
        let length = $(this).text().replace(/^\s+|\s+$|\(|\)|8-/gm, '').length,
            size = $(this).width() / length * parseFloat($(this).data('ratio'))

        if( size > 48 ) {
        	size = 48
        }

        if( size < 14 ) {
        	size = 14
        }

        size2 = size+3

        $(this).css('font-size', size + 'px').css('line-height', size2 + 'px')
    })


    $('.apply').click(function(e){
		//e.preventDefault()
		let color1 =  $(".color1").val();
    	let color2 =  $(".color2").val();

		localStorage.setItem('color1', color1);
		localStorage.setItem('color2', color2);

		window.location.reload(true)
	});

	$('.clear').click(function(e){
		//e.preventDefault()
		localStorage.removeItem('color1');
		localStorage.removeItem('color2');
		window.location.reload(true)
	});

		

    let color1 = localStorage.getItem('color1');
    let color2 = localStorage.getItem('color2');

    if(color1!=null)
    {
	    $(".color1").val(color1);
	    $(".color2").val(color2);

	    var root = document.querySelector(':root');
	    root.style.setProperty('--main_color1', color1);
	    root.style.setProperty('--main_color2', color2);

	    let rgba = hexDec(color2);
	    
	    root.style.setProperty('--box-shadow-color', "rgba("+rgba+",0.2)");

	    let rgba_opacity = hexDec(color2);

	    root.style.setProperty('--main_color_opacity', "rgba("+rgba_opacity+",0.2)");	    
    }


    
	if($(window).width() < 480)
	{
	    var config = {
		    elements: {
				email:"hallo@f2.codes",
				phone: "+490000000000",
				whatsApp: "79120374755",	        
				viber: "79120374755",
				native: "123",
				facebook : "123",
				vk: "123",
				instagram: "123",
				od: "123",
		      },
		      position: {
				left: "10px",
				bottom: "10px"
		      }
	    };
	    buildContactButton(config);
	}

	$('.tab_filter_title span, .tab_filter_title i').click(function(e){
		e.preventDefault()	
		if($(this).parent().hasClass("active"))
		{
			$(this).parent().removeClass("active");
			$(this).parent().next().slideUp();
		}	
		else
		{
			$(this).parent().addClass("active");
			$(this).parent().next().slideDown();
		}

	})

	$(".parent_cat").on('change', function() {
		if($(this).attr("checked")){
			$(this).parent().next().find("input").prop('checked', true);
		}
		else
		{
			$(this).parent().next().find("input").prop('checked', false);
		}
	});




	/*SVG CHANGE*/

	var svg = '<svg width="57" height="14" viewBox="0 0 57 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14Z" fill="'+color1+'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M32 12C34.7614 12 37 9.76142 37 7C37 4.23858 34.7614 2 32 2C29.2386 2 27 4.23858 27 7C27 9.76142 29.2386 12 32 12Z" fill="'+color1+'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M53.5 10.5C55.433 10.5 57 8.933 57 7C57 5.067 55.433 3.5 53.5 3.5C51.567 3.5 50 5.067 50 7C50 8.933 51.567 10.5 53.5 10.5Z" fill="'+color1+'"/></svg>';

	var encoded = window.btoa(svg);	
	document.styleSheets[0].addRule('.block_head .title:after, .stocks .stock .name a:after, .ads_block .item .name a:after',"background-image: url(data:image/svg+xml;base64,"+encoded+") !important;");


	var svg = '<svg width="1436" height="227" viewBox="0 0 1436 227" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.346308" fill-rule="evenodd" clip-rule="evenodd" d="M713.339 226.999C417.57 227.324 121.084 87.1585 8.69902 27.7328C-4.74331 20.6249 0.415885 1.56702 15.6217 1.55033L1420.3 0.00887955C1435.55 -0.0078495 1440.72 19.1058 1427.22 26.1958C1313.61 85.8808 1013.83 226.67 713.339 226.999Z" fill="url(#paint0_linear)"/><defs><linearGradient id="paint0_linear" x1="1447.71" y1="226.235" x2="1447.47" y2="-0.775067" gradientUnits="userSpaceOnUse"><stop stop-color="'+color2+'" stop-opacity="0.303813"/><stop offset="1" stop-color="'+color2+'" stop-opacity="0.01"/></linearGradient></defs></svg>';

	var encoded = window.btoa(svg);	
	document.styleSheets[0].addRule('.block.bg',"background-image: url(data:image/svg+xml;base64,"+encoded+") !important;");

	

})

function hexDec(h){
	var m=h.slice(1).match(/.{2}/g);
	 
	m[0]=parseInt(m[0], 16);
	m[1]=parseInt(m[1], 16);
	m[2]=parseInt(m[2], 16);
	 
	return(m.join(','));
 };

 
	 
$(window).scroll(function() {	
	if($("body").hasClass("header_fixed"))
	{
		if($(window).width() > 1023)
		{
			if ($(window).scrollTop() > 0) {
				$('header').addClass('fixed')
				if($("div").is(".warning"))
				{
					$('header').css("top", $(".warning").innerHeight()+"px")
				}	
			} else {
				$('header').removeClass('fixed')
				if($("div").is(".warning"))
				{
					$('header').css("top", "0px")
				}	
			}

		}
		else 
		{
			if ($(window).scrollTop() > 0) {
				$('.mob_header').addClass('fixed')
				if($("div").is(".warning"))
				{
					$('.mob_header').css("top", $(".warning").innerHeight()+"px")
				}	
			} else {
				$('.mob_header').removeClass('fixed')
				if($("div").is(".warning"))
				{
					$('.mob_header').css("top", "0px")
				}
			}
		}
	}
})





function buildContactButton(config){
	var idNames = [
	 "firstButton", 
	 "secondButton", 
	 "thirdButton",
	 "fourthButton", 
	 "fifthButton", 
	 "sixthButton", 
	 "seventhButton",
	 "seventhButton2",
	 "seventhButton3",
	 "seventhButton4",
	 "seventhButton5" 
	];
	var idNamesPointer = 0;
	var button = "";

	button = '<div id="contactButton" style="bottom:'+config.position["bottom"]+'; left:'+config.position["left"]+'">';
	if(Object.keys(config.elements).length > 1) {
	button += '<a id="shadow-element" class="contact-button shadow"></a>';
	    button += '<a onclick="toggleUp(this)" style="background-color: #ee3b24" id="'+idNames[idNamesPointer]+'" class="main-button contact-button" role="button"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="comments" class="svg-inline--fa fa-comments fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z"></path></svg></a>';
	    idNamesPointer++;
	}



	if(config.elements["email"]) {
	    button += '<a href="mailto:'+config.elements["email"]+'" style="background-color: #EF771E;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.3082 5.74463H24.5082C25.8282 5.74463 26.9082 6.8415 26.9082 8.18213V22.8071C26.9082 24.1478 25.8282 25.2446 24.5082 25.2446H5.3082C3.9882 25.2446 2.9082 24.1478 2.9082 22.8071V8.18213C2.9082 6.8415 3.9882 5.74463 5.3082 5.74463ZM16.1802 15.909L24.0282 10.9243C24.3282 10.7293 24.5082 10.4003 24.5082 10.0468C24.5082 9.23025 23.6322 8.74275 22.9482 9.16932L14.9082 14.2759L6.8682 9.16932C6.1842 8.74275 5.3082 9.23025 5.3082 10.0468C5.3082 10.4003 5.4882 10.7293 5.7882 10.9243L13.6362 15.909C14.4162 16.4087 15.4002 16.4087 16.1802 15.909Z" fill="white"/></svg></a>';
	    idNamesPointer++;
	}

	if(config.elements["phone"]) {
	    button += '<a href="tel:'+config.elements["phone"]+'" style="background-color: #888;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.8288 8.97746L10.0318 8.77229C9.60021 8.72276 9.17571 8.87134 8.87149 9.17556L7.56969 10.4774C5.56747 9.45857 3.92607 7.82423 2.90727 5.81492L4.21614 4.50604C4.52037 4.20182 4.66894 3.77731 4.61942 3.34574L4.41424 1.56283C4.32934 0.848249 3.72797 0.310547 3.00632 0.310547H1.78234C0.98287 0.310547 0.31782 0.9756 0.367345 1.77508C0.74232 7.81716 5.57454 12.6423 11.6095 13.0173C12.409 13.0668 13.074 12.4018 13.074 11.6023V10.3783C13.0811 9.66374 12.5434 9.06236 11.8288 8.97746Z" fill="white"/></svg></a>';
	    idNamesPointer++;
	}

	if(config.elements["whatsApp"]) {
	    button += '<a target="blank" href="'+config.elements["whatsApp"]+'" style="background-color: #27D045 !important;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.02841 0.845924C10.4711 0.649461 12.7974 1.50981 14.5029 3.21494C16.7023 5.41533 17.4936 8.64633 16.4238 11.8192C15.3253 15.0731 12.1503 17.1737 8.71403 17.1737H8.71075C7.34115 17.1728 5.99612 16.8298 4.80099 16.1782L1.11158 17.1663C0.770002 17.2572 0.461186 16.9387 0.562759 16.6006L1.62437 13.0782C0.503781 11.1381 0.214624 8.78959 0.902702 6.54008C1.86601 3.39176 4.74447 1.10951 8.02841 0.845924ZM11.3377 12.8842C11.7129 12.8506 12.5476 12.3906 12.718 11.9134C12.8884 11.4361 12.8884 11.0268 12.8376 10.9425C12.7968 10.8741 12.7009 10.8278 12.5584 10.7592C12.5237 10.7424 12.4862 10.7243 12.446 10.7043C12.2421 10.602 11.237 10.1075 11.0494 10.0396C10.8618 9.97164 10.725 9.93726 10.589 10.1419C10.4531 10.3466 10.0615 10.8066 9.94192 10.9425C9.82233 11.0792 9.70355 11.0964 9.49876 10.9941C9.46479 10.977 9.41836 10.9568 9.36096 10.9318C9.07235 10.8063 8.50658 10.5602 7.85475 9.97983C7.24695 9.43873 6.83738 8.76994 6.71778 8.56529C6.59901 8.36146 6.7055 8.25013 6.80789 8.14863C6.86893 8.08762 6.93904 8.00234 7.00928 7.91689C7.04461 7.87392 7.07998 7.83089 7.11425 7.7909C7.20089 7.68895 7.23866 7.61202 7.29008 7.50727C7.29895 7.48922 7.30822 7.47034 7.31821 7.45036C7.3862 7.31448 7.3518 7.19496 7.30101 7.09264C7.2797 7.0497 7.19737 6.84689 7.09555 6.59607C6.95473 6.24919 6.77663 5.81047 6.67109 5.57578C6.51791 5.23606 6.35654 5.22869 6.21073 5.22296C6.09196 5.21805 5.95516 5.21805 5.81918 5.21805C5.68239 5.21805 5.46122 5.2688 5.27364 5.47345C5.2619 5.4862 5.24884 5.50009 5.23465 5.51516C5.02203 5.74113 4.55771 6.23459 4.55771 7.17695C4.55771 8.17568 5.28056 9.14046 5.39034 9.28699L5.39241 9.28975C5.4 9.2999 5.41435 9.32119 5.43528 9.35223C5.69439 9.73654 6.96155 11.616 8.88441 12.3734C10.4459 12.9885 10.8827 12.937 11.2294 12.896C11.2661 12.8917 11.3018 12.8875 11.3377 12.8842Z" fill="white"/></svg></a>';
	    idNamesPointer++;
	}


	if(config.elements["viber"]) {
	    button += '<a target="blank"  href="viber://add?number='+config.elements["viber"]+'" style="background-color: #8F46AD !important;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.4095 4.17713C16.1136 3.12988 15.5276 2.30263 14.6694 1.7174C13.5864 0.976689 12.3405 0.715608 11.2648 0.555733C9.77631 0.33572 8.42837 0.304919 7.14257 0.460394C5.93816 0.607069 5.03114 0.840282 4.20403 1.21724C2.58236 1.95648 1.60876 3.15188 1.31136 4.7697C1.16635 5.55588 1.0687 6.26578 1.01247 6.94342C0.882265 8.5099 1.00064 9.89598 1.3735 11.1809C1.73749 12.4335 2.37225 13.3282 3.31478 13.9163C3.55447 14.0659 3.86224 14.1745 4.15964 14.2786C4.32832 14.3373 4.49256 14.3945 4.62721 14.4576C4.75149 14.5148 4.75149 14.525 4.75001 14.6277C4.73966 15.518 4.75001 17.2635 4.75001 17.2635L4.75297 17.636H5.42768L5.53718 17.5304C5.60968 17.4629 7.28166 15.8612 7.87795 15.2159L7.95933 15.1264C8.06142 15.0091 8.06142 15.0091 8.16648 15.0076C8.9714 14.9915 9.79407 14.9607 10.6108 14.9167C11.6007 14.8639 12.7474 14.7685 13.8275 14.3226C14.8159 13.9134 15.538 13.2636 15.9715 12.3924C16.4243 11.483 16.6921 10.4988 16.7927 9.38262C16.9703 7.42011 16.8445 5.71722 16.4095 4.17713ZM12.8495 11.8086C12.6009 12.209 12.231 12.4877 11.7945 12.6681C11.4749 12.8001 11.1494 12.7723 10.8342 12.6403C8.19607 11.5329 6.12607 9.78891 4.75889 7.28077C4.54882 6.89699 4.38698 6.48728 4.22537 6.07814C4.16957 5.93686 4.11379 5.79566 4.05607 5.65561C4.02513 5.58042 4.01641 5.49589 4.00765 5.41101C4.00342 5.37006 3.99919 5.32903 3.99244 5.28893C4.01168 4.40741 4.69379 3.91018 5.3833 3.76058C5.64667 3.70191 5.88045 3.79431 6.07576 3.98059C6.61731 4.49102 7.04492 5.08505 7.36748 5.75095C7.50804 6.04284 7.44442 6.30098 7.20472 6.51806C7.15441 6.56353 7.10262 6.6046 7.04788 6.64567C6.50042 7.05342 6.42052 7.36291 6.712 7.97748C7.20916 9.02327 8.03479 9.72584 9.1016 10.1615C9.38273 10.2759 9.64759 10.2187 9.86213 9.99279L9.8749 9.98025C9.90075 9.95498 9.92722 9.92911 9.94499 9.89891C10.3652 9.20368 10.9763 9.27261 11.54 9.66864C11.7634 9.82629 11.983 9.9893 12.2024 10.1522L12.2025 10.1522L12.2026 10.1523L12.2027 10.1524L12.2028 10.1525C12.3466 10.2592 12.4903 10.3659 12.635 10.4709C13.1928 10.8772 13.1883 11.2586 12.8495 11.8086ZM8.97879 4.90024C9.1016 4.8797 9.22589 4.86944 9.35018 4.86944C10.5724 4.86944 11.5681 5.85656 11.5681 7.06809C11.5681 7.19277 11.5578 7.31597 11.5371 7.43625C11.503 7.64012 11.6421 7.83373 11.8478 7.86747C11.87 7.87187 11.8907 7.87334 11.9114 7.87334C12.0934 7.87334 12.2532 7.7428 12.2843 7.55945C12.3124 7.39958 12.3257 7.23383 12.3257 7.06809C12.3257 5.44147 10.9911 4.11846 9.35018 4.11846C9.18446 4.11846 9.01726 4.13166 8.85451 4.15953C8.64736 4.19327 8.50827 4.38688 8.5423 4.59076C8.57781 4.7961 8.77165 4.93397 8.97879 4.90024ZM11.1894 7.12236C11.1894 7.32917 11.0192 7.49785 10.8106 7.49785C10.6019 7.49785 10.4318 7.32917 10.4318 7.12236C10.4318 6.50193 9.92132 5.9959 9.29543 5.9959C9.08681 5.9959 8.91665 5.82722 8.91665 5.62041C8.91665 5.4136 9.08681 5.24493 9.29543 5.24493C10.3401 5.24493 11.1894 6.08684 11.1894 7.12236ZM12.9827 8.24882C13.1558 8.24882 13.3126 8.13148 13.3526 7.95694C13.4192 7.66213 13.4532 7.35851 13.4532 7.05342C13.4532 4.8137 11.6155 2.992 9.3561 2.992C9.04834 2.992 8.74205 3.02574 8.44613 3.09321C8.24194 3.13868 8.11321 3.33962 8.16056 3.54203C8.20643 3.74444 8.40914 3.87205 8.61333 3.82511C8.85451 3.77084 9.10456 3.74298 9.3561 3.74298C11.1968 3.74298 12.6956 5.22879 12.6956 7.05342C12.6956 7.30277 12.6675 7.55065 12.6128 7.78973C12.5669 7.99214 12.6941 8.19309 12.8983 8.24002C12.9264 8.24589 12.9546 8.24882 12.9827 8.24882Z" fill="white"/></svg></a>';
	    idNamesPointer++;
	}


	if(config.elements["od"]) {
	    button += '<a target="blank"  href="'+config.elements["od"]+'" style="background-color: #ee8208 !important;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="odnoklassniki" class="svg-inline--fa fa-odnoklassniki fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M275.1 334c-27.4 17.4-65.1 24.3-90 26.9l20.9 20.6 76.3 76.3c27.9 28.6-17.5 73.3-45.7 45.7-19.1-19.4-47.1-47.4-76.3-76.6L84 503.4c-28.2 27.5-73.6-17.6-45.4-45.7 19.4-19.4 47.1-47.4 76.3-76.3l20.6-20.6c-24.6-2.6-62.9-9.1-90.6-26.9-32.6-21-46.9-33.3-34.3-59 7.4-14.6 27.7-26.9 54.6-5.7 0 0 36.3 28.9 94.9 28.9s94.9-28.9 94.9-28.9c26.9-21.1 47.1-8.9 54.6 5.7 12.4 25.7-1.9 38-34.5 59.1zM30.3 129.7C30.3 58 88.6 0 160 0s129.7 58 129.7 129.7c0 71.4-58.3 129.4-129.7 129.4s-129.7-58-129.7-129.4zm66 0c0 35.1 28.6 63.7 63.7 63.7s63.7-28.6 63.7-63.7c0-35.4-28.6-64-63.7-64s-63.7 28.6-63.7 64z"></path></svg></a>';
	    idNamesPointer++;
	}

	if(config.elements["facebook"]) {
	    button += '<a target="blank"  href="'+config.elements["facebook"]+'" style="background-color: #3b5998 !important;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>';
	    idNamesPointer++;
	}

	if(config.elements["instagram"]) {
	    button += '<a target="blank"  href="'+config.elements["instagram"]+'" style="background: radial-gradient(circle at 30% 107%, #FDF497 0%, #FDF497 5%, #FD5949 45%, #D6249F 60%, #285AEB 90%) !important;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>';
	    idNamesPointer++;
	}

	if(config.elements["vk"]) {
	    button += '<a target="blank"  href="'+config.elements["vk"]+'" style="background-color: #5d84ae !important;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="vk" class="svg-inline--fa fa-vk fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg></a>';
	    idNamesPointer++;
	}


	if(config.elements["native"]) {
	    button +='<a target="blank" onclick="window.nativeShare()"  href="'+config.elements["native"]+'" style="background-color: #3b5998;" id="'+idNames[idNamesPointer]+'" class="shadow contact-button" role="button"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" class="svg-inline--fa fa-share fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z"></path></svg></a>';
	    idNamesPointer++;
	}


	
	
	button += '</div>'
	$(button).appendTo("body");
	$(".main-button").mouseover(function(){
		$("#shadow-element").css("box-shadow", "2px 2px 6px rgba(0,0,0,0.7)");
	});
	$(".main-button").mouseleave(function(){
		$("#shadow-element").css("box-shadow", "2px 2px 6px rgba(0,0,0,0.4)");
	});
}

function toggleUp(element) {
	$(".contact-button").toggleClass("up");
	$(".menu-button").toggleClass("contact-button-out");
}


window.nativeShare = () => {
    const shareLink = location.href;

    if (navigator.share) {
        // this will work on Android
        navigator
            .share({
                title: document.title,
                url: shareLink
            })
            .then(() => console.log("Successful share"))
            .catch(error => console.log("Error sharing", error));
    } else {
        alert(`native share ${shareLink}`);   
    }
};
