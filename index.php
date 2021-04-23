<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Переключение IE в последнию версию, на случай если в настройках пользователя стоит меньшая -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Адаптирование страницы для мобильных устройств -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Запрет распознования номера телефона -->
		<meta name="format-detection" content="telephone=no">
		<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

		<!-- Заголовок страницы -->
		<title>Заголовок страницы</title>

		<!-- Данное значение часто используют(использовали) поисковые системы -->
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico или .png -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<link rel="stylesheet" href="css/fancybox.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/ion.rangeSlider.css">

		<link rel="stylesheet" href="css/styles.css">

		<link rel="stylesheet" href="css/response_1185.css" media="(max-width: 1185px)">
		<link rel="stylesheet" href="css/response_1023.css" media="(max-width: 1023px)">
		<link rel="stylesheet" href="css/response_767.css" media="(max-width: 767px)">
		<link rel="stylesheet" href="css/response_479.css" media="(max-width: 479px)">
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">



		<style>
			 :root
			{	
			        --bg_color: rgb(51 233 95 / 15%);
			} 
			

			<?php 
    			$main_color2 ="#33e95f";
				$svg1 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M35.8889 24.707C35.8889 22.6589 37.5794 21 39.6667 21H47.2222C49.3094 21 51 22.6589 51 24.707V33.3592C51 34.1562 50.7383 34.9317 50.2548 35.5711L42.1495 46.2542C41.7925 46.725 41.2338 47 40.6369 47C39.0824 47 38.1951 45.2638 39.1207 44.0423L45.3518 35.8282H39.6667C37.5794 35.8282 35.8889 34.1693 35.8889 32.1211V24.707ZM17 24.7577C17 22.7096 18.6906 21.0507 20.7778 21.0507H28.3333C30.4206 21.0507 32.1111 22.7096 32.1111 24.7577V33.4099C32.1111 34.2088 31.8494 34.9824 31.3659 35.6218L23.3012 46.2542C22.9442 46.725 22.3818 47 21.7849 47C20.2304 47 19.3431 45.262 20.2687 44.0387L26.4629 35.8789H20.7778C18.6906 35.8789 17 34.22 17 32.1718V24.7577Z" fill="white"/></svg>';

				$svg2 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M18 23.1111C18 21.3922 19.432 20 21.2 20H40.3998C42.1678 20 43.5998 21.3922 43.5998 23.1111V43.3333C43.5998 44.1904 44.3166 44.8889 45.1998 44.8889C46.1038 44.8889 46.7997 44.2123 46.7997 43.3333V27.7778C46.7877 26.9198 47.4923 26.2144 48.3747 26.201C48.8072 26.1944 49.224 26.3583 49.5301 26.6554C49.8362 26.9524 50.0056 27.3573 49.9997 27.7778V43.3333C49.9997 45.8922 47.8317 48 45.1998 48H22.8C20.1488 48 18 45.9109 18 43.3333V23.1111ZM35.5998 24.6667H25.9999C25.1167 24.6667 24.3999 25.3636 24.3999 26.2222V27.7778C24.3999 28.6364 25.1167 29.3333 25.9999 29.3333H35.5998C36.483 29.3333 37.1998 28.6364 37.1998 27.7778V26.2222C37.1998 25.3636 36.483 24.6667 35.5998 24.6667ZM25.9999 34H35.5998C36.483 34 37.1998 34.6969 37.1998 35.5556C37.1998 36.4142 36.483 37.1111 35.5998 37.1111H25.9999C25.1167 37.1111 24.3999 36.4142 24.3999 35.5556C24.3999 34.6969 25.1167 34 25.9999 34ZM35.5998 40.2222H25.9999C25.1167 40.2222 24.3999 40.9191 24.3999 41.7778C24.3999 42.6364 25.1167 43.3333 25.9999 43.3333H35.5998C36.483 43.3333 37.1998 42.6364 37.1998 41.7778C37.1998 40.9191 36.483 40.2222 35.5998 40.2222Z" fill="white"/></svg>';

				$svg3 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 21.3333C25.5 19.4917 27.0215 18 28.9 18H39.1C40.9785 18 42.5 19.4917 42.5 21.3333V23H47.6C49.4785 23 51 24.4917 51 26.3333V44.6667C51 46.5083 49.4785 48 47.6 48H20.4C18.5215 48 17 46.5083 17 44.6667V26.3333C17 24.4917 18.5215 23 20.4 23H25.5V21.3333ZM42.5 34.6667C42.5 30.0717 38.6869 26.3333 34 26.3333C29.3131 26.3333 25.5 30.0717 25.5 34.6667C25.5 39.2617 29.3131 43 34 43C38.6869 43 42.5 39.2617 42.5 34.6667ZM45.9 26.3333C46.8384 26.3333 47.6 27.08 47.6 28C47.6 28.92 46.8384 29.6667 45.9 29.6667C44.9616 29.6667 44.2 28.92 44.2 28C44.2 27.08 44.9616 26.3333 45.9 26.3333ZM28.9 34.6667C28.9 31.9052 31.1833 29.6667 34 29.6667C36.8167 29.6667 39.1 31.9052 39.1 34.6667C39.1 37.4281 36.8167 39.6667 34 39.6667C31.1833 39.6667 28.9 37.4281 28.9 34.6667Z" fill="#fff"/></svg>';

				$svg4 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M19.0174 34.1451L34.6492 18.987C35.3005 18.3554 36.1845 18 37.1051 18H47.5263C49.4455 18 51 19.5074 51 21.3685V31.4739C51 32.3665 50.6335 33.2238 49.9822 33.8554L34.3504 49.0135C32.9939 50.3288 30.795 50.3288 29.4386 49.0135L19.0174 38.9081C17.6609 37.5927 17.6609 35.4604 19.0174 34.1451ZM42.3157 23.8948C42.3157 25.2894 43.4828 26.4212 44.921 26.4212C46.3591 26.4212 47.5263 25.2894 47.5263 23.8948C47.5263 22.5003 46.3591 21.3685 44.921 21.3685C43.4828 21.3685 42.3157 22.5003 42.3157 23.8948Z" fill="white"/></svg>';

				$svg5 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M43.831 19C42.764 19 41.6971 19.4063 40.8826 20.2208L39.155 21.9484L45.0518 27.8451L46.7794 26.1176C48.4069 24.4901 48.4069 21.8498 46.7794 20.2208C45.9649 19.4063 44.8979 19 43.831 19ZM36.9437 24.1597L22.9388 38.1645C22.9388 38.1645 24.4204 38.1718 25.1501 38.9016C25.8798 39.6313 25.8642 41.0898 25.8642 41.0898C25.8642 41.0898 27.3673 41.1187 28.0985 41.8499C28.8297 42.5811 28.8356 44.0612 28.8356 44.0612L42.8405 30.0564L36.9437 24.1597ZM20.0105 46.2783L20.978 41.1128L25.8872 46.022L20.7217 46.9895C20.3001 47.0676 19.9324 46.6999 20.0105 46.2783Z" fill="white"/></svg>';

				$svg6 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M34.5 17C30.0213 17 25.542 18.6599 22.1304 21.9826C15.2899 28.611 15.2899 39.3875 22.1304 46.0159C28.9535 52.6614 40.0465 52.6614 46.8696 46.0159C53.7101 39.3875 53.7101 28.611 46.8696 21.9826C43.458 18.6599 38.9787 17 34.5 17ZM34.5 23.4863C34.8455 23.4863 35.1908 23.667 35.3508 24.0307C35.9059 25.2888 36.4612 26.548 37.0165 27.8072L37.0224 27.8206L37.0262 27.8294C37.7925 29.5671 38.5588 31.3048 39.3248 33.0399C39.5942 33.6535 39.5926 34.3484 39.3214 34.9619C38.661 36.4584 38.0011 37.9567 37.3412 39.4549C36.6814 40.9531 36.0215 42.4514 35.3611 43.9479C35.0374 44.6838 33.9626 44.6838 33.6389 43.9479C33.0585 42.6327 32.4779 41.3159 31.8972 39.999L31.8955 39.9951C31.1553 38.3163 30.4151 36.6375 29.6752 34.9619C29.404 34.3484 29.404 33.6535 29.6752 33.0399C30.442 31.303 31.2092 29.5633 31.9763 27.8237L31.9778 27.8203L31.9792 27.8171C32.5359 26.5546 33.0926 25.2921 33.6492 24.0307C33.8092 23.667 34.1545 23.4863 34.5 23.4863ZM33.8405 28.8507C33.956 28.5601 34.2272 28.4154 34.4966 28.4158C34.766 28.4163 35.0355 28.5601 35.1492 28.8507C35.4274 29.556 35.7052 30.2623 35.983 30.9685C36.2608 31.6748 36.5386 32.3811 36.8167 33.0864C36.9917 33.53 36.6556 34.0041 36.1675 34.0092L32.8017 34.0424C32.3066 34.0475 31.9638 33.5683 32.1423 33.1196C32.2919 32.7433 32.4416 32.3668 32.5914 31.99C33.0073 30.944 33.4238 29.8965 33.8405 28.8507Z" fill="white"/></svg>';

				$svg7 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.8889 25.1111C26.8889 21.1838 30.0726 18 34 18C37.9274 18 41.1111 21.1838 41.1111 25.1111C41.1111 29.0385 37.9274 32.2222 34 32.2222C30.0726 32.2222 26.8889 29.0385 26.8889 25.1111ZM18 45.5556C18 40.2364 28.6596 37.5556 34 37.5556C39.3404 37.5556 50 40.2364 50 45.5556V48.2222C50 49.2036 49.2036 50 48.2222 50H19.7778C18.7964 50 18 49.2036 18 48.2222V45.5556Z" fill="white"/></svg>';
			
				$svg8 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M20 16H48C50.21 16 52 17.79 52 20V48C52 50.21 50.21 52 48 52H20C17.79 52 16 50.21 16 48V20C16 17.79 17.79 16 20 16ZM42.344 41.416L45.814 41.368C45.814 41.368 47.63 41.254 46.77 39.822C46.7644 39.8128 46.7566 39.7987 46.7461 39.7795C46.6212 39.5518 46.1063 38.6136 44.188 36.83C43.2697 35.9766 42.7905 35.541 42.7399 35.0603C42.6704 34.4008 43.4075 33.6563 44.924 31.632C46.522 29.502 47.16 28.2 46.96 27.642C46.768 27.108 45.594 27.25 45.594 27.25L41.684 27.274C41.684 27.274 41.394 27.234 41.178 27.364C40.968 27.49 40.832 27.784 40.832 27.784C40.832 27.784 40.214 29.434 39.388 30.838C37.65 33.798 36.954 33.954 36.668 33.77C36.1134 33.4131 36.1399 32.4485 36.1631 31.604C36.1676 31.4404 36.172 31.2813 36.172 31.132C36.172 30.4706 36.1952 29.8982 36.2151 29.405C36.2817 27.7578 36.3126 26.9946 35.326 26.756C34.902 26.652 34.588 26.586 33.502 26.574C32.108 26.56 30.926 26.58 30.258 26.906C29.812 27.126 29.47 27.612 29.68 27.64C29.938 27.672 30.524 27.798 30.836 28.224C31.236 28.77 31.222 29.996 31.222 29.996C31.222 29.996 31.452 33.372 30.684 33.792C30.158 34.08 29.436 33.492 27.884 30.806C27.088 29.428 26.488 27.906 26.488 27.906C26.488 27.906 26.37 27.62 26.164 27.468C25.912 27.284 25.562 27.222 25.562 27.222L21.848 27.24C21.848 27.24 21.292 27.246 21.086 27.488C20.904 27.706 21.074 28.134 21.074 28.134C21.074 28.134 23.982 34.912 27.274 38.346C30.296 41.496 33.724 41.212 33.724 41.212H35.278C35.278 41.212 35.748 41.238 35.988 40.98C36.21 40.74 36.202 40.372 36.202 40.372C36.202 40.372 36.172 38.284 37.14 37.976C37.7166 37.7935 38.3919 38.5689 39.1226 39.4079C39.6007 39.9569 40.1026 40.5332 40.616 40.886C41.596 41.562 42.344 41.416 42.344 41.416Z" fill="white"/></svg>';
			
				$svg9 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16 26C16 20.478 20.478 16 26 16H42C47.522 16 52 20.478 52 26V42C52 47.522 47.522 52 42 52H26C20.478 52 16 47.522 16 42V26ZM48 22C48 20.896 47.104 20 46 20C44.896 20 44 20.896 44 22C44 23.104 44.896 24 46 24C47.104 24 48 23.104 48 22ZM34 24C39.522 24 44 28.478 44 34C44 39.522 39.522 44 34 44C28.478 44 24 39.522 24 34C24 28.478 28.478 24 34 24ZM28 34C28 30.6863 30.6863 28 34 28C37.3137 28 40 30.6863 40 34C40 37.3137 37.3137 40 34 40C30.6863 40 28 37.3137 28 34Z" fill="white"/></svg>';

				$svg10 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M28.9164 19.6C29.6783 17.4451 31.7144 16.0032 34 16C36.2869 16.0017 38.3248 17.4439 39.0871 19.6H44.8C46.7675 19.6 48.4 21.2325 48.4 23.2V28.6H50.2C51.1936 28.6 52 29.4064 52 30.4V37.6C52 38.5936 51.1936 39.4 50.2 39.4H48.4V44.8C48.4 46.7675 46.7675 48.4 44.8 48.4H39.0836C38.3217 50.5549 36.2856 51.9968 34 52C31.7131 51.9983 29.6752 50.5561 28.9129 48.4H23.2C21.2325 48.4 19.6 46.7675 19.6 44.8V39.4H17.8C16.8064 39.4 16 38.5936 16 37.6V30.4C16 29.4064 16.8064 28.6 17.8 28.6H19.6V23.2C19.6 21.2325 21.2325 19.6 23.2 19.6H28.9164ZM28.9129 23.2H23.2V28.6H25C25.9936 28.6 26.8 29.4064 26.8 30.4V37.6C26.8 38.5936 25.9936 39.4 25 39.4H23.2V44.8H28.9164C29.6783 42.6451 31.7144 41.2032 34 41.2C36.2869 41.2017 38.3248 42.6439 39.0871 44.8H44.8V39.4H43C42.0064 39.4 41.2 38.5936 41.2 37.6V30.4C41.2 29.4064 42.0064 28.6 43 28.6H44.8V23.2H39.0836C38.3217 25.3549 36.2856 26.7968 34 26.8C31.7131 26.7983 29.6752 25.3561 28.9129 23.2Z" fill="white"/></svg>';

				$svg11 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M34 15C23.512 15 15 23.512 15 34C15 44.488 23.512 53 34 53C44.488 53 53 44.488 53 34C53 23.512 44.488 15 34 15ZM33.05 47.3C32.5256 47.3 32.1 46.8744 32.1 46.35V44.45C32.1 43.9256 32.5256 43.5 33.05 43.5H34.95C35.4744 43.5 35.9 43.9256 35.9 44.45V46.35C35.9 46.8744 35.4744 47.3 34.95 47.3H33.05ZM38.123 34.323L39.833 32.575C41.7691 30.6389 42.4303 27.3082 40.1883 24.2074C38.4707 21.8324 35.7252 20.3428 32.8296 20.7893C29.896 21.2415 27.5172 23.3714 26.7021 26.1682C26.3943 27.2284 27.1657 28.3 28.2696 28.3H28.8225C29.5692 28.3 30.162 27.7756 30.4052 27.0707C31.0303 25.26 32.9892 24.0573 35.0906 24.6539C36.4225 25.032 37.4732 26.191 37.7297 27.5533C37.9805 28.8852 37.5473 30.1354 36.679 30.979L34.323 33.373C32.955 34.76 32.1 36.66 32.1 38.75V39.7H35.9C35.9 36.85 36.755 35.71 38.123 34.323Z" fill="white"/></svg>';

				$svg12 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M18 32.9886C18 24.1773 25.1823 17 33.9998 17C42.7561 17 49.8915 24.0802 49.9903 32.8075C49.9969 32.8676 50 32.9281 49.9997 32.9886V47.3784C50.0078 47.955 49.7047 48.4913 49.2063 48.782C48.7079 49.0727 48.0915 49.0727 47.5931 48.782C47.0947 48.4913 46.7916 47.955 46.7997 47.3784V42.5381C43.8783 46.4367 39.234 48.9772 33.9998 48.9772C25.1823 48.9772 18 41.7999 18 32.9886ZM37.1998 24.9943C37.1998 23.2276 35.7678 21.7966 33.9998 21.7966C32.2319 21.7966 30.7999 23.2276 30.7999 24.9943C30.7999 26.761 32.2319 28.192 33.9998 28.192C35.7678 28.192 37.1998 26.761 37.1998 24.9943ZM25.9999 29.7909C27.7679 29.7909 29.1999 31.2219 29.1999 32.9886C29.1999 34.7554 27.7679 36.1863 25.9999 36.1863C24.2319 36.1863 22.8 34.7554 22.8 32.9886C22.8 31.2219 24.2319 29.7909 25.9999 29.7909ZM45.1997 32.9886C45.1997 31.2219 43.7677 29.7909 41.9998 29.7909C40.2318 29.7909 38.7998 31.2219 38.7998 32.9886C38.7998 34.7554 40.2318 36.1863 41.9998 36.1863C43.7677 36.1863 45.1997 34.7554 45.1997 32.9886ZM33.9998 31.3898C34.883 31.3898 35.5998 32.106 35.5998 32.9886C35.5998 33.8712 34.883 34.5875 33.9998 34.5875C33.1167 34.5875 32.3999 33.8712 32.3999 32.9886C32.3999 32.106 33.1167 31.3898 33.9998 31.3898ZM37.1998 40.9829C37.1998 39.2162 35.7678 37.7852 33.9998 37.7852C32.2319 37.7852 30.7999 39.2162 30.7999 40.9829C30.7999 42.7497 32.2319 44.1806 33.9998 44.1806C35.7678 44.1806 37.1998 42.7497 37.1998 40.9829Z" fill="white"/></svg>';

				$svg13 = '<svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="34" cy="34" r="34" fill="'.$main_color2.'"/><path fill-rule="evenodd" clip-rule="evenodd" d="M25.5625 19C21.9603 19 19 21.9603 19 25.5625C19 29.1647 21.9603 32.125 25.5625 32.125C29.1647 32.125 32.125 29.1647 32.125 25.5625C32.125 21.9603 29.1647 19 25.5625 19ZM41.4634 20.853C40.8454 20.8701 40.2754 21.1906 39.9399 21.71L24.9399 44.21C24.5557 44.7673 24.5016 45.4884 24.7985 46.0968C25.0953 46.7052 25.697 47.1063 26.3728 47.1463C27.0485 47.1864 27.6934 46.8591 28.0601 46.29L43.0601 23.79C43.4599 23.2086 43.4995 22.4519 43.1624 21.8319C42.8254 21.2119 42.1688 20.8336 41.4634 20.853ZM28.375 25.5625C28.375 23.987 27.138 22.75 25.5625 22.75C23.987 22.75 22.75 23.987 22.75 25.5625C22.75 27.138 23.987 28.375 25.5625 28.375C27.138 28.375 28.375 27.138 28.375 25.5625ZM42.4375 35.875C38.8353 35.875 35.875 38.8353 35.875 42.4375C35.875 46.0397 38.8353 49 42.4375 49C46.0397 49 49 46.0397 49 42.4375C49 38.8353 46.0397 35.875 42.4375 35.875ZM45.25 42.4375C45.25 40.862 44.013 39.625 42.4375 39.625C40.862 39.625 39.625 40.862 39.625 42.4375C39.625 44.013 40.862 45.25 42.4375 45.25C44.013 45.25 45.25 44.013 45.25 42.4375Z" fill="white"/></svg>';

			?>

			.reviews .review::after{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg1); ?>') !important;	
			}

			.articles .article::after{
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg2); ?>') !important;
			} 
			.about .img:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg3); ?>')  !important;
			}

			.prices .item:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg4); ?>') !important;
			}
			
			.director_letter .img:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg5); ?>') !important;
			}

			.contacts_block .map:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg6); ?>') !important;
			}

			.team .item:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg7); ?>') !important;
			}

			.soc_block .widget:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg8); ?>') !important;
			}
			
			.soc_block2 .widget:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg9); ?>') !important;
			}

			.how_we_work .img:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg10); ?>') !important;
			}

			.quiz_poll .img:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg11); ?>') !important;
			}

			.video_reviews .review:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg12); ?>') !important;
			}

			.stocks .stock:after {
				background-image: url('data:image/svg+xml;base64,<?php echo base64_encode($svg13); ?>') !important;
			}


		</style>

		<!-- <style>
		@import url('https://fonts.googleapis.com/css2?family=Oswald:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		:root{
			--font_family: 'Oswald', 'Arial', sans-serif;

			--font_family2: 'Oswald', 'Arial', sans-serif;
		}
		</style> -->


	</head>

	<body class="header_fixed1">

		<svg style="display: none">
			<symbol id="button" viewBox="0 0 54 54">
				<rect x="0.75" y="0.75" width="52.5" height="52.5" rx="26.25" fill="#FF4500" stroke="white" stroke-width="1.5" style="fill: var(--main_color2)"/>
				<circle cx="27" cy="27" r="22" fill="white"/>
				<path d="M28.968 21C29.1999 21 29.432 21.0896 29.6087 21.2658L34.7343 26.3635C35.0886 26.7159 35.0886 27.2865 34.7343 27.638L29.6087 32.7357C29.2544 33.0881 28.6807 33.0881 28.3273 32.7357L28.2494 32.6583C27.8951 32.3059 27.8951 31.7353 28.2494 31.3838L31.7502 27.902H19.9062C19.406 27.902 19 27.4982 19 27.0008C19 26.5033 19.406 26.0995 19.9062 26.0995H31.7502L28.2494 22.6177C27.8951 22.2653 27.8951 21.6947 28.2494 21.3433L28.3273 21.2658C28.5044 21.0896 28.7361 21 28.968 21Z" fill="#FF4500" style="fill: var(--main_color2)"/>
			</symbol>
		</svg>

		<div class="color_change">
			<p><input type="text" class="color1"></p>
			<p><input type="text" class="color2"></p>
			<p><button class="apply">Применить</button></p>
			<p><button class="clear">Очистить</button></p>
		</div>
		<div class="wrap">
			<div class="main">
				<!-- Шапка -->
				<header>
					<button type="button" class="close">
						<span></span>
						<span></span>
					</button>


					<div class="mob_scroll">
						<div class="info">
							<div class="cont flex">

								<div class="logo">
									<div class="name resizeble-font"><a href="">ВКУСНЫЙ УГОЛОК</a></div>
									<div class="desc resizeble-font2">СТОЛОВАЯ</div>
								</div>


								<div class="socials">
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc1.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc2.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc3.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
								</div>

					

								<div class="contacts">
									<div class="email">
										<a href="mailto:mail@info.com">mail@info.com</a>
									</div>

									<div class="phones">
										<div><a href="tel:88001231213">8 800 123-12-13</a></div>

										<div><a href="tel:88001231213">8 800 123-12-13</a></div>
									</div>
								</div>
								

							</div>
						</div>


						<div class="bottom">
							<div class="cont">
						
								<ul class="menu flex">
									<li class="item">
										<a href="/">ГЛАВНАЯ</a>
									</li>
						
									<li class="item">
										<a href="/" class="active">ПРОЕКТЫ</a>
									</li>
						
									<li class="item">
										<a href="#" class="sub_link">
											<span>УСЛУГИ</span>
										</a>
						
										<div class="sub_menu">
											<div class="item"><a href="/">Пункт меню</a></div>
											<div class="item">
												<a href="/" class="sub_link"><span>Пункт меню</span></a>
												<div class="sub_menu">
													<div><a href="/">Пункт меню</a></div>
													<div><a href="/">Пункт меню</a></div>
													<div><a href="/">Пункт меню</a></div>
												</div>
											</div>
											<div class="item"><a href="/">Пункт меню</a></div>
										</div>
									</li>
						
									<li class="item">
										<a href="/">ЦЕНЫ</a>
									</li>
						
									<li class="item">
										<a href="/">О НАС</a>
									</li>
						
									<li class="item">
										<a href="/">СТАТЬИ</a>
									</li>
						
									<li class="item">
										<a href="/">Пункт меню</a>
									</li>
						
									<li class="item">
										<a href="/" class="sub_link">
											<span>Пункт меню</span>
										</a>
						
										<div class="sub_menu">
											<div class="item"><a href="/">Пункт меню</a></div>
											<div class="item">
												<a href="/" class="sub_link"><span>Пункт меню</span></a>
												<div class="sub_menu">
													<div><a href="/">Пункт меню</a></div>
													<div><a href="/">Пункт меню</a></div>
													<div><a href="/">Пункт меню</a></div>
												</div>
											</div>
											<div class="item"><a href="/">Пункт меню</a></div>
										</div>
									</li>
						
									<li class="item">
										<a href="/">Пункт меню</a>
									</li>
								</ul>
						
							</div>
						</div>
					</div>
				</header>


				<div class="mob_header">
					<div class="cont">

						<div class="logo">
							<a href="/">
								<div class="name resizeble-font3" data-ratio="1.5">.КОМПАНИЯ .КОМПАНИЯ .КОМПАНИЯ .КОМПАНИЯ</div>
								<div class="desc">ТОВАРЫ И УСЛУГИ</div>
							</a>
						</div>


						<div class="bg">
							<div class="contacts">
                                <a href="tel:+7234234234234">
                                    <img data-src="images/ic_phone.svg" alt="" class="lozad loaded" src="images/ic_phone.svg" data-loaded="true">
                                </a>
                                <a href="tel:+7900111222">                                        
                                    <img data-src="images/ic_phone.svg" alt="" class="lozad loaded" src="images/ic_phone.svg" data-loaded="true">
                                </a>
                                 <a href="tel:+43534534534534534">                                        
                                    <img data-src="images/ic_phone.svg" alt="" class="lozad loaded" src="images/ic_phone.svg" data-loaded="true">
                                </a>
                                 <a href="tel:+345345345345345">                                        
                                    <img data-src="images/ic_phone.svg" alt="" class="lozad loaded" src="images/ic_phone.svg" data-loaded="true">
                                </a>
                                 <a href="mailto:qwe@qwe.ru">                                    
                                	<img data-src="images/ic_email.svg" alt="" class="lozad loaded" src="images/ic_email.svg" data-loaded="true">
                           		</a>
                            </div>

							<div class="socials">
								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc1.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc2.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc3.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>
							</div>
						</div>


						<button type="button" class="mob_menu_link">
							<span></span>
							<span></span>
							<span></span>
						</button>

					</div>
				</div>
				<!-- End Шапка -->


				<!-- Основная часть -->
				<section class="first_section block">
					<div class="cont">
						<div class="info">
							<div class="title">Столовая<br>«Вкусный Уголок»</div>

							<div class="desc">Наша компания - лидер на рынке нашего города.<br>
											Смело обращайтесь к нам для решения любых вопросов.<br> 
											Консультация бесплатна!</div>							
							<a href="/" class="link"><span>Подробнее</span> 
								<svg>
								    <use xlink:href="#button"/>
								</svg>			
							</a>
						</div>
						
						<div class="img">
							<div class="lozad" data-background-image="images/tmp/first_section_img.png"></div>
						</div>
					</div>
				</section>

				<section class="about block">
					<div class="cont">

						<div class="img">
							<div class="lozad" data-background-image="images/tmp/about_img.jpg"></div>
						</div>

						<div class="info">
							<div class="block_head">
								<div class="title">О нашей компании</div>
							</div>

							<div class="text_block">
								<p>
								Мы специализируемся на оказании высококачественных услуг. Квалифицированные сотрудники внимательно изучат ваши потребности и предложат наиболее выгодные условия обслуживания. Все специалисты — профессионалы, которые любят свою работу. Вы можете смело довериться нам. Наша главная задача — воплощение в жизнь идей и пожеланий наших клиентов с максимальным исполнительским качеством с использованием новейших технологий.
								</p>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"/>
									</svg>			
								</a>
							</div>
						</div>	
					</div>
				</section>

				<section class="advantages block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Наши преимущества</div>
						</div>

						<div class="flex">
							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb1.jpg" alt="" class="lozad">
								</div>
								<div class="inform">
									<div class="name">Большой опыт</div>
									<div class="desc">Все наши сотрудники имеют опыт работы в сфере не менее 5 лет.</div>
								</div>
							</div>

							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb2.jpg" alt="" class="lozad">
								</div>
								<div class="inform">
									<div class="name">Низкие цены</div>
									<div class="desc">Мы предлагаем адекватные цены и готовы просчитать ваш заказ.</div>
								</div>								
							</div>

							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb3.jpg" alt="" class="lozad">
								</div>
								<div class="inform">
									<div class="name">Бесплатные консультации</div>
									<div class="desc">Мы готовы в сжатые сроки предоставить любую информацию.</div>
								</div>								
							</div>

							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb4.jpg" alt="" class="lozad">
								</div>
								<div class="inform">
									<div class="name">Удобная оплата</div>
									<div class="desc">Принимаем все формы оплаты - нал, безнал, терминал для оплаты картами.</div>
								</div>								
							</div>

							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb5.jpg" alt="" class="lozad">
								</div>
								<div class="inform">
									<div class="name">Партнерская программа</div>
									<div class="desc">Приглашаем к сотрудничеству агентов за % от приведенных клиентов.</div>
								</div>								
							</div>

							<div class="item">
								<div class="icon">
									<img data-src="images/tmp/advantages_thumb6.jpg" alt="" class="lozad">
								</div>
								<div class="inform">
									<div class="name">Открыты к переговорам</div>
									<div class="desc">Мы открыты к диалогу и готовы предложить индивидуальные условия.</div>
								</div>								
							</div>
						</div>

					</div>
				</section>


				
				<section class="articles block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Последние Новости</div>

							<a href="/" class="link"><span>Все новости</span> 
								<svg>
									<use xlink:href="#button"/>
								</svg>			
							</a>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<a href="/" class="article">
									<div class="img"><img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad"></div>

									<div class="info">
										<div class="name">Комплексное обслуживание ТСЖ»</div>

										<div class="date">14 февраля 2021</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<div class="img"><img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad"></div>

									<div class="info">
										<div class="name">СТРОИТЕЛЬСТВО МАГАЗИНА "ПЯТЁРОЧКА"</div>

										<div class="date">14 февраля 20219</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<div class="img"><img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad"></div>

									<div class="info">
										<div class="name">ЗАВЕРШИЛИСЬ РАБОТЫ НА ПЕКАРНИ СЕТИ ХЛЕБОПОЛИС</div>

										<div class="date">14 февраля 2021</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<div class="img"><img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad"></div>

									<div class="info">
										<div class="name">СТРОИТЕЛЬСТВО МАГАЗИНА "ПЯТЁРОЧКА"</div>

										<div class="date">14 февраля 2021</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<a href="/" class="article">
									<div class="img"><img data-src="images/tmp/article_thumb.jpg" alt="" class="lozad"></div>

									<div class="info">
										<div class="name">ЗАВЕРШИЛИСЬ РАБОТЫ НА ПЕКАРНИ СЕТИ ХЛЕБОПОЛИС</div>

										<div class="date">14 февраля 2021</div>
									</div>
								</a>
							</div>
						</div>

					</div>
				</section>



				<section class="how_we_work block">
					<div class="cont">
						<div class="img">
							<div class="lozad" data-background-image="images/tmp/how_we_work_img.jpg"></div>
						</div>
						<div class="info">
							<div class="block_head">
								<div class="title">Почему Обращаются к Нам</div>
								<!-- <div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div> -->
							</div>

							<div class="flex">
								<div class="item">
									<!-- <div class="name">Оставляете заявку</div> -->

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatem hic sint alias dolore nulla laborum quasi dignissimos perferendis labore est at aliquam quia, expedita eius unde assumenda cupiditate? Optio!</div>
								</div>

								<div class="item">
									<!-- <div class="name">Связь с менеджером</div> -->

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>

								<div class="item">
									<!-- <div class="name">Оплата</div> -->

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>

								<div class="item">
									<!-- <div class="name">Результат</div> -->

									<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="reviews block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши отзывы</div>
							
							<a href="/" class="link"><span>Все отзывы</span> 
								<svg>
									<use xlink:href="#button"/>
								</svg>			
							</a>
							
							<!-- <div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div> -->

						</div>


						<div class="slider_wrap">
							<div class="slider owl-carousel">
								<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											<div class="author-info">
												<div class="name">Мария Петрова</div>
												<div class="post">Менеджер</div>
											</div>
											
										</div>

										<div class="text">
											<p>
											Мы аккредитованная подрядная организация у Х5 Retail Group. Что является показателем высокого качества наших работ. Наши клиенты Всегда остаются довольны. Большой опыт в решении нестандартных ситуаций.
											</p>
										</div>
									</div>
								</div>


								<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											<div class="author-info">
												<div class="name">Мария Петрова</div>
												<div class="post">Менеджер</div>
											</div>
											
										</div>

										<div class="text">
											<p>
											Мы аккредитованная подрядная организация у Х5 Retail Group. Что является показателем высокого качества наших работ. Наши клиенты Всегда остаются довольны. Большой опыт в решении нестандартных ситуаций.
											</p>
										</div>
									</div>
								</div>


								<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											<div class="author-info">
												<div class="name">Мария Петрова</div>
												<div class="post">Менеджер</div>
											</div>
											
										</div>

										<div class="text">
											<p>
											Мы аккредитованная подрядная организация у Х5 Retail Group. Что является показателем высокого качества наших работ. Наши клиенты Всегда остаются довольны. Большой опыт в решении нестандартных ситуаций.
											</p>
										</div>
									</div>
								</div>

								<div class="slide">
									<div class="review">
										<div class="author">
											<div class="foto">
												<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
											</div>
											<div class="author-info">
												<div class="name">Мария Петрова</div>
												<div class="post">Менеджер</div>
											</div>
											
										</div>

										<div class="text">
											<p>
											Мы аккредитованная подрядная организация у Х5 Retail Group. Что является показателем высокого качества наших работ. Наши клиенты Всегда остаются довольны. Большой опыт в решении нестандартных ситуаций.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>



				<!-- <section class="big_boss_quote block">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Слово Нашего <span>Руководителя</span></div>
							</div>

							<div class="name">Иван Петрович</div>

							<div class="text_block">
								<p>
									«Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.
								</p>

								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент»
								</p>
							</div>
						</div>


						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div>

					</div>
				</section> -->


				<section class="video_reviews block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Видео Отзывы</div>
							<a href="/" class="link"><span>Все отзывы</span> 
								<svg>
									<use xlink:href="#button"></use>
								</svg>			
							</a>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb3.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>

							<div class="slide">
								<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" data-fancybox class="review">
									<img data-src="images/tmp/video_review_thumb2.jpg" alt="" class="lozad">
								</a>
							</div>
						</div>

					</div>
				</section>


				<section class="prices block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Наши цены</div>

							<!-- <div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div> -->
						</div>


						<div class="flex">
							<div class="item">
								<div class="name">Начальный</div>

								<div class="price">Бесплатно</div>

								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение</div>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"/>
									</svg>			
								</a>
							</div>


							<div class="item">
								<div class="name">Стандарт</div>

								<div class="price">
									2500p
								</div>

								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение</div>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"/>
									</svg>			
								</a>
							</div>


							<div class="item">
								<div class="name">Премиум</div>

								<div class="price">
									5000p
								</div>

								<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение</div>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"/>
									</svg>			
								</a>
							</div>
						</div>

					</div>
				</section>


				<section class="documents block">
					<div class="cont">

						<div class="block_head center">
							<div class="title title-white">Наши Документы</div>
							<!-- <div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div> -->
						</div>


						<div class="flex">
							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_doc.svg" alt="" class="lozad">
								</div>
								<div class="name">документы.doc</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_pdf.svg" alt="" class="lozad">
								</div>
								<div class="name">новыйфайл.pdf</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_rar.svg" alt="" class="lozad">
								</div>
								<div class="name">наш_архив.rar</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_zip.svg" alt="" class="lozad">
								</div>
								<div class="name">еще_архив.zip</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_mp4.svg" alt="" class="lozad">
								</div>
								<div class="name">видео.mp4</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_fb2.svg" alt="" class="lozad">
								</div>
								<div class="name">книга.fb2</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_xls.svg" alt="" class="lozad">
								</div>
								<div class="name">таблица.xls</div>
							</a>

							<a href="/" class="item">
								<div class="icon">
									<img data-src="images/ic_file_jpg.svg" alt="" class="lozad">
								</div>
								<div class="name">картинка.jpg</div>
							</a>
						</div>

					</div>
				</section>


				<section class="faq block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Ответы на Вопросы (FAQ)</div>
							<!-- <div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div> -->
						</div>


						<div class="accordion">
							<div class="item">
								<div class="title">Почему Пятерочка? 
										<i>
										<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.24288 18.6286L8.46914 10.9902L1.24288 3.35168C0.516532 2.58389 0.516532 1.34362 1.24288 0.575839C1.96923 -0.191946 3.14257 -0.191946 3.86892 0.575839L12.4175 9.61208C13.1439 10.3799 13.1439 11.6201 12.4175 12.3879L3.86892 21.4242C3.14257 22.1919 1.96923 22.1919 1.24288 21.4242C0.535157 20.6564 0.516532 19.3964 1.24288 18.6286Z" fill="white"/>
										</svg>
										</i>
								</div>

								<div class="data text_block">
									<p>
										Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
									</p>

									<p>
										Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
									</p>
								</div>
							</div>

							<div class="item">
								<div class="title">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.
										<i>
										<svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.24288 18.6286L8.46914 10.9902L1.24288 3.35168C0.516532 2.58389 0.516532 1.34362 1.24288 0.575839C1.96923 -0.191946 3.14257 -0.191946 3.86892 0.575839L12.4175 9.61208C13.1439 10.3799 13.1439 11.6201 12.4175 12.3879L3.86892 21.4242C3.14257 22.1919 1.96923 22.1919 1.24288 21.4242C0.535157 20.6564 0.516532 19.3964 1.24288 18.6286Z" fill="white"/>
										</svg>
										</i>
								</div>

								<div class="data text_block">
									<p>
										Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой Росстатом, и позволяет оценить ежемесячную динамику цен в сетевой розничной торговле.
									</p>

									<p>
										Используйте высококачественные фотографии магазинов, распределительных центров, а также элементы фирменного стиля X5
									</p>
								</div>
							</div>


						</div>

					</div>
				</section>


				<section class="director_letter block">
					<div class="cont">
						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div>
						<div class="info">
							<div class="block_head">
								<div class="title">Письмо Директору</div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>
							</div>


							<form action="" class="form">
								<div class="line">
									<div class="field">
										<input type="text" name="" value="" class="input" placeholder="Ваше имя" required>
									</div>
								</div>

								<div class="line">
									<div class="field">
										<input type="tel" name="" value="" class="input" placeholder="Телефон" required>
									</div>
								</div>

								<div class="line">
									<div class="field">
										<textarea name="" placeholder="Сообщение" required></textarea>
									</div>
								</div>


								<div class="bottom">
									<div class="agree">
										<input type="checkbox" name="agree" id="agree_check" checked>
										<label for="agree_check">Согласен с политикой обработки данных
											<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
										</label>
									</div>

									<div class="submit">
										<button type="submit" class="submit_btn"><span>Отправить</span>
											<svg>
												<use xlink:href="#button"/>
											</svg>
										</button>
									</div>
								</div>
							</form>
						</div>


						

					</div>
				</section>


				<!-- <section class="order_block block bg">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Оставьте Заявку</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей. Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<form action="" class="form">
							<div class="columns">
								<div class="line width1of4">
									<div class="field">
										<input type="text" name="" value="" class="input" placeholder="Ваше имя" required>
									</div>
								</div>

								<div class="line width1of4">
									<div class="field">
										<input type="tel" name="" value="" class="input" placeholder="Телефон" required>
									</div>
								</div>

								<div class="line width2of4">
									<div class="field">
										<textarea name="" placeholder="Сообщение" required></textarea>
									</div>
								</div>
							</div>


							<div class="bottom">
								<div class="agree">
									<input type="checkbox" name="agree" id="agree2_check" checked>
									<label for="agree2_check">Согласен с политикой <a href="">обработки данных</a>
										<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
									</label>
								</div>


								<div class="socials">
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc1.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc2.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc3.svg" alt="">
									</a>

									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
									<a href="/" target="_blank" rel="noopener nofollow">
										<img src="images/ic_soc4.svg" alt="">
									</a>
								</div>


								<div class="submit">
									<button type="submit" class="submit_btn">Отправить
											<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></button>
								</div>
							</div>
						</form>

					</div>
				</section> -->


				<section class="contacts_block block">
					<div class="cont">

						<div class="info">
							<div class="block_head">
								<div class="title">Наши Контакты</div>
							</div>

							<div class="contacts">
								<div>Связь с нами:</div>

								<div class="val">
									<a href="tel:88001231213" class="phone">8 800 123-12-13</a>
									<div class="exp">Бесплатный звонок по России</div>
								</div>

								<div class="val">
									<a href="mailto:info@gmail.com" class="email">info@gmail.com</a>
									<div class="exp">Наша электронная почта</div>
								</div>
							</div>


							<div class="adres">
								<div>Наш адрес:</div>

								<div class="val">г. Волгоград, ул. Ленина, 31, офис 5</div>
							</div>
						</div>
						
						<div class="map">
							<div>
								<iframe width="100%" height="500" class="lozad" data-src="https://maps.google.com/maps?width=100&amp;height=500&amp;hl=ru&amp;q=%D0%92%D0%BE%D0%BB%D0%B6%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BC%D0%B8%D1%80%D0%B0%2036%20%D0%BF&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							</div>
						</div>

					</div>
				</section>


				<section class="stocks block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Акции</div>
							<!-- <div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей. Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div> -->
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quisquam vel nostrum amet aperiam tempore!</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемоИндекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемойИндекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемойй</div>
									</div>
								</div>
							</div>


							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb2.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>


							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb3.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>

							<div class="slide">
								<div class="stock">
									<a href="/" class="thumb">
										<img data-src="images/tmp/stock_thumb3.jpg" alt="" class="lozad">
									</a>

									<div class="info">
										<div class="name">
											<a href="/">Три по цене Двух</a>
										</div>

										<div class="desc">Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>


				<section class="team block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Сотрудники</div>
							<!-- <div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей. Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div> -->
						</div>


						<div class="slider owl-carousel">
							
							<div class="slide">
								<div class="item">

									<div class="box_team_item">
										<div class="foto">
											<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
										</div>
										<div>
											<div class="name">Ирина Петрова Ирина Петрова Ирина Петрова Ирина Петрова</div>
											<div class="post">Генеральный директор</div>
										</div>
									</div>

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit repellat, illum itaque eum maxime excepturi dolorum tenetur rem in?</div>
								</div>
							</div>

							<div class="slide">
								<div class="item">

									<div class="box_team_item">
										<div class="foto">
											<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
										</div>
										<div>
											<div class="name">Ирина Петрова Ирина Петрова Ирина Петрова Ирина Петрова</div>
											<div class="post">Генеральный директор</div>
										</div>
									</div>

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit repellat, illum itaque eum maxime excepturi dolorum tenetur rem in?</div>
								</div>
							</div>

							<div class="slide">
								<div class="item">

									<div class="box_team_item">
										<div class="foto">
											<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
										</div>
										<div>
											<div class="name">Ирина Петрова Ирина Петрова Ирина Петрова Ирина Петрова</div>
											<div class="post">Генеральный директор</div>
										</div>
									</div>

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit repellat, illum itaque eum maxime excepturi dolorum tenetur rem in?</div>
								</div>
							</div>

							<div class="slide">
								<div class="item">

									<div class="box_team_item">
										<div class="foto">
											<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
										</div>
										<div>
											<div class="name">Ирина Петрова Ирина Петрова Ирина Петрова Ирина Петрова</div>
											<div class="post">Генеральный директор</div>
										</div>
									</div>

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit repellat, illum itaque eum maxime excepturi dolorum tenetur rem in?</div>
								</div>
							</div>

							<div class="slide">
								<div class="item">

									<div class="box_team_item">
										<div class="foto">
											<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
										</div>
										<div>
											<div class="name">Ирина Петрова Ирина Петрова Ирина Петрова Ирина Петрова</div>
											<div class="post">Генеральный директор</div>
										</div>
									</div>

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit repellat, illum itaque eum maxime excepturi dolorum tenetur rem in?</div>
								</div>
							</div>

							<div class="slide">
								<div class="item">

									<div class="box_team_item">
										<div class="foto">
											<img data-src="images/tmp/review_foto.jpg" alt="" class="lozad">
										</div>
										<div>
											<div class="name">Ирина Петрова Ирина Петрова Ирина Петрова Ирина Петрова</div>
											<div class="post">Генеральный директор</div>
										</div>
									</div>

									<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit repellat, illum itaque eum maxime excepturi dolorum tenetur rem in?</div>
								</div>
							</div>

						</div>

					</div>
				</section>


				<!-- <section class="poll block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Блок Опроса</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>
						</div>


						<div class="widget">
							Put this script tag to the <head> of your page
							<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
							
							<script type="text/javascript">
							  VK.init({apiId: 7239986, onlyWidgets: true});
							</script>

							Put this div tag to the place, where the Poll block will be
							<div id="vk_poll"></div>
							<script type="text/javascript">
							VK.Widgets.Poll("vk_poll", {}, "356050851_510253bd6b71887e3d");
							</script>
						</div>

					</div>
				</section> -->


			

				<!-- <section class="vacancies block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Вакансии</div>
							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
						</div>


						<div class="slider owl-carousel">
							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Генеральный директор</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></a>
								</div>
							</div>


							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Менеджер по продажам</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></a>
								</div>
							</div>


							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Генеральный директор</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></a>
								</div>
							</div>


							<div class="slide">
								<div class="item">
									<div class="name">
										<a href="/">Менеджер по продажам</a>
									</div>

									<div class="desc">
										<div class="title">Обязанности:</div>

										<div>
											Индекс «Пятёрочки» рассчитывается как соотношение стоимости продовольственного набора торговой сети «Пятёрочка» рассчитываемой
										</div>
									</div>

									<a href="/" class="link">Подробнее<svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></a>
								</div>
							</div>
						</div>

					</div>
				</section> -->


				<section class="soc_block block">
					<div class="cont">

						<div class="widget">
							<iframe class="lozad vk" data-src="https://vk.com/widget_community.php?app=0&width=320px&_ver=1&gid=121203589&mode=4&color1=&color2=&color3=&class_name=&height=490" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
						</div>
						<div class="info">
							<div class="block_head">
								<div class="title">Мы Вконтакте</div>

								<a href="/" target="_blank" rel="noopener nofollow" class="soc_link">
									<!-- <img data-src="images/ic_vk_link.svg" alt="" class="lozad icon"> -->
									vk.com/group123124
								</a>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>

								<a href="/" class="link"><span>Перейти</span> 
									<svg>
										<use xlink:href="#button"/>
									</svg>			
								</a>
							</div>
						</div>
					</div>
				</section>


				<section class="soc_block soc_block2 block">
					<div class="cont">
						<div class="info">
							<div class="block_head">
								<div class="title">Мы в Instagram</div>

								<a href="/" target="_blank" rel="noopener nofollow" class="soc_link">
									<!-- <img data-src="images/ic_soc2.svg" alt="" class="lozad icon"> -->
									instagram.com/user123124
								</a>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b></div>

								<a href="/" class="link"><span>Перейти</span> 
									<svg>
										<use xlink:href="#button"/>
									</svg>			
								</a>
							</div>
						</div>

						<div class="widget">
							<iframe class="lozad" data-src="https://averin.pro/widget.php?l=alfasiterus&style=1&width=320&gallery=1&s=80&icc=4&icr=3&t=1&tt=Мы в Инстаграм&h=1&ttcolor=FFFFFF&th=c3c3c3&bw=f9f9f9&bscolor=FFFFFF&bs=FF0000&ts=Подписаться" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
						</div>
					</div>
				</section>


				<section class="payment block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Оплата Услуг</div>

							<div class="desc text_block">
								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.
								</p>

								<p>
									Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей
								</p>
							</div>
						</div>


						<div class="widget">
							<iframe class="lozad" data-src="https://money.yandex.ru/quickpay/shop-widget?writer=buyer&targets=&targets-hint=%D0%9D%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%20%D0%B8%D0%BB%D0%B8%20%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B8&default-sum=1000&button-text=12&payment-type-choice=on&mobile-payment-type-choice=on&hint=&successURL=&quickpay=shop&account=41001885065609" height="227" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
						</div>

					</div>
				</section>


				<!-- <section class="services block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Услуги</div>

							<a href="/" class="link"><span>Все услуги</span> 
								<svg>
									<use xlink:href="#button"></use>
								</svg>			
							</a>

							<div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div>
						</div>


						<div class="flex">
							<a href="/" class="service">
								<div class="img"><img data-src="images/tmp/service_thumb.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, voluptates!</div>

									<a href="/" class="link"><span>Подробнее</span> 
										<svg>
											<use xlink:href="#button"></use>
										</svg>			
									</a>
								</div>
							</a>

							<a href="/" class="service">
								<div class="img"><img data-src="images/tmp/service_thumb.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Компьютерная диагностика</div>

									<a href="/" class="link"><span>Подробнее</span> 
										<svg>
											<use xlink:href="#button"></use>
										</svg>			
									</a>
								</div>
							</a>

							<a href="/" class="service">
								<div class="img"><img data-src="images/tmp/service_thumb.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Компьютерная диагностика</div>

									<a href="/" class="link"><span>Подробнее</span> 
										<svg>
											<use xlink:href="#button"></use>
										</svg>			
									</a>
								</div>
							</a>
						</div>

					</div>
				</section> -->


				<section class="upload block">
					<form class="cont">
						 <div class="info">
							<div class="block_head">
								<div class="title">Загрузка Файлов</div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
							</div>


							<div class="form file-uploader">
								<div class="file">
								    <div class="file-chooser">
								    	<input class="file-chooser__input" name="file[]" type="file" id="file">
								    	<label for="file">Загрузить</label>
								    </div>
									
									<div class="list file-uploader__message-area">
										
									</div>
								</div>
							</div>
						</div>


						<div class="form">
							<div class="line">
								<div class="field">
									<input type="text" name="" value="" class="input" placeholder="Ваше имя" required>
								</div>
							</div>

							<div class="line">
								<div class="field">
									<input type="tel" name="" value="" class="input" placeholder="Телефон" required>
								</div>
							</div>

							<div class="line">
								<div class="field">
									<textarea name="" placeholder="Сообщение" required></textarea>
								</div>
							</div>


							<div class="bottom">
								<div class="agree">
									<input type="checkbox" name="agree" id="upload_agree_check" checked>
									<label for="upload_agree_check">Согласен с политикой обработки данных
										<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z"></path></svg></i>
									</label>
								</div>

								<div class="submit">
									<button type="submit" class="submit_btn"><span>Отправить</span>
										<svg>
											<use xlink:href="#button"></use>
										</svg>
									</button>
								</div>
							</div>
						</div>
					</form>
				</section>


				<section class="stock_finish block">
					<div class="cont">

						<div class="block_head center">
							<div class="title">Успей до конца Акции</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="timer" data-date="2020/06/25 22:34:56"></div>

						<div class="wrap_link">
							<a href="/" class="link"><span>Подробнее</span> 
								<svg>
									<use xlink:href="#button"></use>
								</svg>			
							</a>
						</div>
						

					</div>
				</section>


				<section class="before_after block">
					<div class="cont">
						<div class="item">
							<img data-src="images/tmp/before_after_img1.jpg" alt="" class="lozad">

							<div class="resize">
							    <img src="images/tmp/before_after_img1.jpg" alt="">
							</div>

							<span class="handle"><span></span></span>
						</div>

						<div class="block_head">
							<div class="title">До и После</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>

							<a href="/" class="link"><span>Подробнее</span> 
								<svg>
									<use xlink:href="#button"></use>
								</svg>			
							</a>
						</div>

					</div>
				</section>


				<section class="image_tips block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Блок Картинка</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
						</div>


						<div class="image">
							<img data-src="images/tmp/image_tips_img.jpg" alt="" class="lozad">

							<div class="item item1">
								<div class="btn" data-info=".info1">
									<span></span>
								</div>
							</div>

							<div class="item item2">
								<div class="btn" data-info=".info2">
									<span></span>
								</div>
							</div>

							<div class="item item3">
								<div class="btn" data-info=".info3">
									<span></span>
								</div>
							</div>


							<div class="info info1">
								<button class="close">
									<span></span>
									<span></span>
								</button>

								<div class="name">Квартира 43 м<sup>2</sup></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"></use>
									</svg>			
								</a>
							</div>


							<div class="info info2">
								<button class="close">
									<span></span>
									<span></span>
								</button>

								<div class="name">Квартира 43 м<sup>2</sup></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"></use>
									</svg>			
							    </a>
							</div>


							<div class="info info3">
								<button class="close">
									<span></span>
									<span></span>
								</button>

								<div class="name">Квартира 43 м<sup>2</sup></div>

								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов</div>

								<a href="/" class="link"><span>Подробнее</span> 
									<svg>
										<use xlink:href="#button"></use>
									</svg>			
								</a>
							</div>
						</div>

					</div>
				</section>


				<section class="three_photo block">
					<div class="cont">
						<div class="photo">
							<a href="images/tmp/three_photo_img1.jpg" class="img1 fancy_img">
								<img data-src="images/tmp/three_photo_img1.jpg" alt="" class="lozad">
							</a>

							<a href="images/tmp/three_photo_img1.jpg" class="img2 fancy_img">
								<img data-src="images/tmp/about_img.jpg" alt="" class="lozad">
							</a>

							<a href="images/tmp/three_photo_img1.jpg" class="img3 fancy_img">
								<img data-src="images/tmp/three_photo_img1.jpg" alt="" class="lozad">
							</a>
						</div>

						<div class="block_head">
							<div class="title">Три Фото</div>

							<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>

							<a href="/" class="link"><span>Подробнее</span> 
								<svg>
									<use xlink:href="#button"></use>
								</svg>			
							</a>
						</div>


						

					</div>
				</section>



				<section class="socials_block block">
					<div class="cont">					
						<div class="socials_block-info">
							<div class="data">
								<div class="block_head">
									<div class="title">Напишите нам удобным способом</div>
								</div>
								<div class="desc">Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, удовлетворяющий любым требованиям покупателей.</div>
							</div>


							<div class="socials">
								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc1.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc2.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc3.svg" alt="">
								</a>

								<a href="/" target="_blank" rel="noopener nofollow">
									<img src="images/ic_soc4.svg" alt="">
								</a>

								<a href="" class="number" target="_blank" rel="noopener nofollow">
									<img src="images/ic_phone.svg" alt="">
								</a>

								<a href="/" class="number" target="_blank" rel="noopener nofollow">
									<img src="images/ic_phone2.svg" alt="">
								</a>

								<a href="/" class="number" target="_blank" rel="noopener nofollow">
									<img src="images/ic_email.svg" alt="">
								</a>
							</div>
						</div>	
					</div>
				</section>



				<!-- <section class="about_video block">
					<div class="cont">

						<a href="https://www.youtube.com/watch?v=60VYXd9RVJ0" class="video_link" data-fancybox>
							<img data-src="images/tmp/about_video_thumb.jpg" alt="" class="lozad">
						</a>

						<div class="info">
							<div class="block_head">
								<div class="title">Видео о Компании</div>

								<div class="desc text_block">
									<p>
										Выгодное расположение в непосредственной близости от жилых домов Широкий товарный ассортимент, <b>удовлетворяющий любым требованиям покупателей.</b>
									</p>

									<p>
										Выгодное расположение в непосредственной близости от жилых домов <b>Широкий товарный ассортимент,</b> удовлетворяющий любым требованиям покупателей
									</p>
								</div>

								<a href="/" class="link">Подробнее <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></a>
							</div>
						</div>						

					</div>
				</section> -->


				<section class="quiz_poll block">
					<div class="cont">
					<div class="info">
							<div class="block_head">
								<div class="title">Пройдите Квиз-Опрос</div>
							</div>


							<form class="steps">
								<div class="step step1">
									<div class="title">Заголовок Опроса</div>

									<div class="desc">Торговая сеть «Перекресток» открыла 800-й супермаркет. Им стал второй экспериментальный магазин</div>
								

									<div class="links">
										<button class="next" data-step=".step2">
											<span>Начать</span> 
											<svg>
												<use xlink:href="#button"/>
											</svg>	
										</button>
									</div>
								</div>


								<div class="step step2">
									<div class="title">Какой ваш Возраст?</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input">
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step3">
										Продолжить 
											<svg>
												<use xlink:href="#button"/>
											</svg>
										</button>
										<button class="next next-padding" data-step=".step1">Вернуться</button>
									</div>
								</div>

								<div class="step step3">
									<div class="title">Какой ваш Возраст 2?</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input" >
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step4">Продолжить <svg>
												<use xlink:href="#button"/>
											</svg></button>
										<button class="next next-padding" data-step=".step2">Вернуться</button>
									</div>
								</div>

								<div class="step step4">
									<div class="title">Ваше имя</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input" >
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step5">Продолжить <svg>
												<use xlink:href="#button"/>
											</svg></button>
										<button class="next next-padding" data-step=".step3">Вернуться</button>
									</div>
								</div>

								<div class="step step5">
									<div class="title">Телефон</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="tel" name="" value="" class="input">
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step6">Продолжить <svg>
												<use xlink:href="#button"/>
											</svg></button>
										<button class="next next-padding" data-step=".step4">Вернуться</button>
									</div>
								</div>

								<div class="step step6">
									<div class="title">Нажмите на "завершить" для завершения опроса</div>

									<div class="form">
										<div class="agree">
											<input type="checkbox" name="agree" id="quiz_poll_agree_check" checked>
											<label for="quiz_poll_agree_check">Согласен с политикой обработки данных
												<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
											</label>
										</div>
									</div> 

									<div class="links">
										<button class="next valide end" data-step=".step7">Завершить <svg>
												<use xlink:href="#button"/>
											</svg>
										</button>
										<button class="next next-padding" data-step=".step5">Вернуться</button>
									</div>
								</div>


								<div class="step step7">
									<div class="success">
										<div class="icon">
											<svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M36.6352 0.486328C16.681 0.486328 0.486328 16.681 0.486328 36.6352C0.486328 56.5894 16.681 72.7841 36.6352 72.7841C56.5894 72.7841 72.7841 56.5894 72.7841 36.6352C72.7841 16.681 56.5894 0.486328 36.6352 0.486328ZM36.6352 65.5543C20.6936 65.5543 7.7161 52.5769 7.7161 36.6352C7.7161 20.6936 20.6936 7.7161 36.6352 7.7161C52.5769 7.7161 65.5543 20.6936 65.5543 36.6352C65.5543 52.5769 52.5769 65.5543 36.6352 65.5543ZM29.4054 44.4795L50.661 23.224C52.0708 21.8142 54.3843 21.8142 55.7941 23.224C57.2039 24.6338 57.2039 26.9112 55.7941 28.321L31.972 52.1431C30.5622 53.5529 28.2848 53.5529 26.875 52.1431L17.5124 42.7805C16.1026 41.3707 16.1026 39.0933 17.5124 37.6835C18.9223 36.2737 21.1996 36.2737 22.6094 37.6835L29.4054 44.4795Z" fill="white"/>
											</svg>

										</div>

										<div class="title">Спасибо!</div>

										<div class="desc">Мы перезвоним вам в течении рабочего времени</div>
									</div>
								</div>
							</form>
						</div>


						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div>

					</div>
				</section>





						<!-- <div class="block_head">
							<div class="title">Пройдите Квиз-Опрос</div>
						</div>
						<div class="info">

							<form class="steps">
								<div class="step step1">
									<div class="title">Заголовок Опроса</div>

									<div class="desc">Торговая сеть «Перекресток» открыла 800-й супермаркет. Им стал второй экспериментальный магазин</div>
								

									<div class="links">
										<button class="next" data-step=".step2">
											<span>Начать</span> 
											<svg>
												<use xlink:href="#button"/>
											</svg>	
										</button>
									</div>
								</div>
								
								<div class="step step2">
									<div class="title">Какой ваш Возраст?</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input">
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next" data-step=".step2">
											<span>Продолжить</span> 
											<svg>
												<use xlink:href="#button"/>
											</svg>	
										</button>
										<button class="next2" data-step=".step1">Вернуться</button>
									</div>
								</div>

								<div class="step step3">
									<div class="title">Какой ваш Возраст 2?</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input" >
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step4">Продолжить <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></button>
										<button class="next" data-step=".step2">Вернуться</button>
									</div>
								</div>

								<div class="step step4">
									<div class="title">Ваше имя</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="text" name="" value="" class="input" >
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step5">Продолжить <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></button>
										<button class="next" data-step=".step3">Вернуться</button>
									</div>
								</div>

								<div class="step step5">
									<div class="title">Телефон</div>

									<div class="form">
										<div class="line">
											<div class="field">
												<input type="tel" name="" value="" class="input">
											</div>
										</div>
									</div>

									<div class="links">
										<button class="next valide" data-step=".step6">Продолжить <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></button>
										<button class="next" data-step=".step4">Вернуться</button>
									</div>
								</div>

								<div class="step step6">
									<div class="title">Нажмите на "завершить" для завершения опроса</div>

									<div class="form">
										<div class="agree">
											<input type="checkbox" name="agree" id="quiz_poll_agree_check" checked>
											<label for="quiz_poll_agree_check">Согласен с политикой обработки данных
												<i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.9132 1.82809L15.3754 0.744931C14.9499 0.446366 14.367 0.560932 14.0822 0.998363L6.54409 12.5174L3.07992 8.92767C2.71809 8.55273 2.12844 8.55273 1.76661 8.92767L0.44996 10.292C0.0881317 10.667 0.0881317 11.278 0.44996 11.6564L5.77688 17.1764C6.07506 17.4854 6.54409 17.7214 6.96623 17.7214C7.38836 17.7214 7.81384 17.4472 8.08857 17.034L17.1611 3.16469C17.4492 2.72726 17.3386 2.12666 16.9132 1.82809Z" ></path></svg></i>
											</label>
										</div>
									</div> 

									<div class="links">
										<button class="next valide end" data-step=".step7">Завершить <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg>
										</button>
										<button class="next" data-step=".step5">Вернуться</button>
									</div>
								</div>


								<div class="step step7">
									<div class="success">
										<div class="icon">
											<svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M36.6352 0.486328C16.681 0.486328 0.486328 16.681 0.486328 36.6352C0.486328 56.5894 16.681 72.7841 36.6352 72.7841C56.5894 72.7841 72.7841 56.5894 72.7841 36.6352C72.7841 16.681 56.5894 0.486328 36.6352 0.486328ZM36.6352 65.5543C20.6936 65.5543 7.7161 52.5769 7.7161 36.6352C7.7161 20.6936 20.6936 7.7161 36.6352 7.7161C52.5769 7.7161 65.5543 20.6936 65.5543 36.6352C65.5543 52.5769 52.5769 65.5543 36.6352 65.5543ZM29.4054 44.4795L50.661 23.224C52.0708 21.8142 54.3843 21.8142 55.7941 23.224C57.2039 24.6338 57.2039 26.9112 55.7941 28.321L31.972 52.1431C30.5622 53.5529 28.2848 53.5529 26.875 52.1431L17.5124 42.7805C16.1026 41.3707 16.1026 39.0933 17.5124 37.6835C18.9223 36.2737 21.1996 36.2737 22.6094 37.6835L29.4054 44.4795Z" fill="white"/>
											</svg>

										</div>

										<div class="title">Спасибо!</div>

										<div class="desc">Мы перезвоним вам в течении рабочего времени</div>
									</div>
								</div>
							</form>
						</div>


						<div class="img">
							<div class="lozad" data-background-image="images/tmp/big_boss_quote_img.jpg"></div>
						</div> -->

					</div>
				</section>


				<!-- <section class="products block bg">
					<div class="cont">

						<div class="block_head">
							<div class="title">Популярные товары</div>
						</div>


						<div class="flex mob_slider">
							<a href="/" class="product">
								<div class="stickers">
									<div><div class="sticker stock">акция</div></div>
								</div>

								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad loaded" src="images/tmp/product_thumb10.jpg" data-loaded="true"></div>

								<div class="info">
									<div class="name">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, velit.</div>

									<div class="cat">Фотоаппараты</div>

									<div class="price">5000₽</div>
								</div>
							</a>


							<a href="/" class="product">
								<div class="stickers">
									<div><div class="sticker recommend">акция</div></div>
								</div>

								<div class="img"><img data-src="images/tmp/product_thumb11.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Отличный товар</div>

									<div class="cat">Фотоаппараты</div>

									<div class="price">5000₽</div>
								</div>
							</a>


							<a href="/" class="product">
								<div class="stickers">
									<div><div class="sticker hit">акция</div></div>
								</div>

								<div class="img"><img data-src="images/tmp/product_thumb12.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Отличный товар</div>

									<div class="cat">Фотоаппараты</div>

									<div class="price">5000₽</div>
								</div>
							</a>

						</div>
						
						<center><a href="/" class="link">Все товары <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.34498 0C9.56236 0 9.77998 0.0821376 9.94564 0.24365L14.7509 4.91658C15.083 5.2396 15.083 5.76261 14.7509 6.08481L9.94564 10.7577C9.61347 11.0808 9.07565 11.0808 8.74433 10.7577L8.67132 10.6867C8.33915 10.3637 8.33915 9.8407 8.67132 9.5185L11.9533 6.32684H0.849544C0.380595 6.32684 0 5.95673 0 5.50069C0 5.04465 0.380595 4.67454 0.849544 4.67454H11.9533L8.67132 1.48288C8.33915 1.15985 8.33915 0.636847 8.67132 0.314648L8.74433 0.24365C8.91042 0.0821376 9.12761 0 9.34498 0Z" fill="white"/>
											</svg></a>	</center>
			
					</div>
				</section> -->


				<!-- <section class="partners block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Партнёры</div>

							<div class="desc">Мы очень любим наших партнеров и ценим сотрудничество с ними. Вот несколько компаний из списка наших контрагентов:</div>
						</div>


						<div class="flex">
							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>

							<div class="item">
								<img data-src="images/tmp/google_logo.png" alt="" class="lozad">
							</div>
						</div>

					</div>
				</section> -->

				<!-- <section class="contacts_info">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наши Контакты</div>
						</div>


						<div class="info">
							<div class="flex">
								<div class="item">
									<div class="icon">
										<img data-src="images/ic_phone.svg" alt="" class="lozad">
									</div>

									<div class="title">Телефоны</div>

									<div class="val phone">
										<div><a href="tel:88001231213">8 800 123-12-13</a></div>

										<div><a href="tel:88009876531">8 800 987-65-31</a></div>
									</div>
								</div>


								<div class="item">
									<div class="icon">
										<img data-src="images/ic_adres.svg" alt="" class="lozad">
									</div>

									<div class="title">Наш Адрес</div>

									<div class="val adres">
										г. Волгоград, улица Ленина, дом 17, корпус 3, этаж 7, офис
									</div>
								</div>


								<div class="item">
									<div class="icon">
										<img data-src="images/ic_email.svg" alt="" class="lozad">
									</div>

									<div class="title">E-Mail</div>

									<div class="val email">
										<div><a href="mailto:mai1231123l@info.com">mai1231123l@info.com</a></div>

										<div><a href="mailto:m1231231231ail@gmail.com">m1231231231ail@gmail.com</a></div>
									</div>
								</div>


								<div class="item">
									<div class="icon">
										<img data-src="images/ic_messengers.svg" alt="" class="lozad">
									</div>

									<div class="title">Мессенджеры</div>

									<div class="val messengers">
										<div><a href="/" target="_blank" rel="nofollow noopener" class="ic_whatsapp">vk.com/group125412341</a></div>

										<div><a href="/" target="_blank" rel="nofollow noopener" class="ic_viber">instagram.com/user12434</a></div>
									</div>
								</div>


								<div class="item">
									<div class="icon">
										<img data-src="images/ic_socials.svg" alt="" class="lozad">
									</div>

									<div class="title">Соц.Сети</div>

									<div class="val socials">
										<div><a href="/" target="_blank" rel="nofollow noopener" class="ic_vk">vk.com/group125412341</a></div>

										<div><a href="/" target="_blank" rel="nofollow noopener" class="ic_insta">instagram.com/user12434</a></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section> -->

				<!-- <section class="contacts_info block">
					<div class="map_wrap">
						<div class="cont">

							<div class="block_head">
								<div class="title">Как до нас добраться?</div>

								<div class="desc">Лучший способ добраться до нас - на электричке. Удобнее всего садиться на Савёловском вокзале или на ст. «Тимирязевская»</div>
							</div>

						</div>


						<div class="map">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ay1sYoVOfg5u2n2tzkSNDlywSqmpRb7MW&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=false"></script>
						</div>
					</div>
				</section> -->


				<section class="gallery block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наша Галерея №1</div>
							<!-- <div class="desc">Магазины «у дома»​ для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div> -->
						</div>


						<div class="flex images">
							<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb3.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb3.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb4.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb4.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb5.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb5.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb6.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb6.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>

							<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
								<img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad">
								<span>Some quick example text to build on the card title and make up the bulk of the card's content.</span>
							</a>
						</div>

					</div>
				</section>

				<section class="gallery2 block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Наша Галерея №2</div>
							<!-- <div class="desc no_margin">Магазины «у дома»&#8203; для покупки товаров повседневного спроса. Выгодное расположение в непосредственной близости от жилых домов</div> -->
						</div>


						<div class="flex">
							<div>
								<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb.jpg" data-loaded="true"></div>

									<div class="info">
										<div class="name">Название фото</div>
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb2.jpg" data-loaded="true"></div>

									<div class="info">
									<div class="name">Название фото</div>
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>


							<div>
								<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb.jpg" data-loaded="true"></div>

									<div class="info">
									<div class="name">Название фото</div>
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb2.jpg" data-loaded="true"></div>

									<div class="info">
									<div class="name">Название фото</div>
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb.jpg" data-loaded="true"></div>

									<div class="info">
									<div class="name">Название фото</div>
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>

							<div>
								<a href="images/tmp/gallery_thumb2.jpg" class="item fanycy_img" data-fancybox="gallery">
									<div class="img"><img data-src="images/tmp/gallery_thumb2.jpg" alt="" class="lozad loaded" src="images/tmp/gallery_thumb2.jpg" data-loaded="true"></div>

									<div class="info">
									<div class="name">Название фото</div>
										<div class="desc">Описание фотографии. Может быть несколько строчек. Вот так.</div>
									</div>
								</a>
							</div>
						</div>					

					</div>
				</section>

				<section class="products_category block">
					<div class="cont">

						<div class="block_head">
							<div class="title">Популярные товары</div>
						</div>


						<div class="flex mob_slider">
							<a href="/" class="product_category">
								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Сапоги женские</div>

									<div class="counts">507 товаров</div>

									<div class="price">от 5000 ₽</div>
								</div>
							</a>
							<a href="/" class="product_category">
								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Сапоги женские</div>

									<div class="counts">507 товаров</div>

									<div class="price">от 5000 ₽</div>
								</div>
							</a>
							<a href="/" class="product_category">
								<div class="img"><img data-src="images/tmp/product_thumb10.jpg" alt="" class="lozad"></div>

								<div class="info">
									<div class="name">Сапоги женские</div>

									<div class="counts">507 товаров</div>

									<div class="price">от 5000 ₽</div>
								</div>
							</a>


						</div>					
			
					</div>
				</section>
				<!-- End Основная часть -->
			</div>


			<!-- Подвал -->
			<footer>
				<div class="cont">

					<ul class="links">
						<li><a href="/">Продукты</a></li>
						<li><a href="/">Прайс-лист</a></li>
						<li><a href="/">Документы</a></li>
						<li><a href="/">Блог</a></li>
						<li><a href="/">О нас</a></li>
						<li><a href="/">Вакансии</a></li>
						<li><a href="/">Пресса</a></li>
						<li><a href="/">Контакты</a></li>
						<li><a href="/">Товары</a></li>
						<li><a href="/">Услуги</a></li>
						<li><a href="/">Поддержка</a></li>
						<li><a href="/">Сообщество</a></li>
					</ul>


					<div class="creator">
						Работает на платформе
						<a href="/" target="_blank" rel="noopener">Портал.РФ</a>
					</div>

					<div class="support">
						<a href="/">Центр Поддержки Пользователей</a>
					</div>


					<div class="copyright">
						alfastiea&copy; 2020
					</div>

				</div>
			</footer>
			<!-- End Подвал -->
		</div>


		<div class="buttonUp">
			<button type="button"></button>
		</div>


		<div class="overlay"></div>

		<div class="supports_error">
			Ваш браузер устарел рекомендуем обновить его до последней версии<br> или использовать другой более современный.
		</div>


		<!-- Подключение javascript файлов -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/jquery-migrate-1.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<script src="js/lozad.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/inputmask.min.js"></script>
		<script src="js/nice-select.js"></script>
		<script src="js/flexmenu.min.js"></script>
		<script src="js/fancybox.min.js"></script>
		<script src="js/ion.rangeSlider.min.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/before-after.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/file.js"></script>
	</body>
</html>