
$(document).ready(function(){

	var hideToggle = function(targetClick,toggleEl) {
		$(targetClick).click(function(event){
				event.stopPropagation();
				$(toggleEl).slideToggle("fast");
		});
		$(toggleEl).on("click", function (event) {
			event.stopPropagation();
		});
		$(document).on("click", function () {
				$(toggleEl).hide();
		});
	}
	hideToggle('.header__toggle','.header-nav');
	//load video
	$('.js-lazyYT').lazyYT(); 


	//modal
	$('.get-modal').click(function(){
			$('.modal-order').bPopup({
				closeClass:'icon-times',
					position:['auto','auto'], // position center
					follow: [true,false],
					positionStyle: 'fixed'
			}); 
	})
	//calc
	$('.calc-block').click(function(){
		var  cost = $(this).data('calcprice');
		var  constPrice = 500;
		$('.calc-block__el input').change(function(){
			var numbCheck = $('.calc-block__el input').length;
			if(numbCheck  > 0 ){
				$('.calc-block__el input').each(function(){
					if ($(this).is(':checked')) {
						cost += $(this).data('cost');
						console.log(cost);
					};
					$('.calc-block__val  span').text(cost);
				})
			} else {
				$('.calc-block__val  span').text(0);
			}
		})

		/*$('.input_mo').change(function(){
			if (cost  != 0) {
				cost+=constRange;
			};
		})*/
		
	})
	/* ###### For only ies  ######*/
	//if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)){
	//	//code
	//}

	//message for old IE
	function isIE () {
	  var myNav = navigator.userAgent.toLowerCase();
	  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
	}
	if (isIE () == 9) {
		$('body').append('<div class="old-browser"><div class="old-browser-text"> Браузер не поддерживается =(</div></div>')
		$("html,body").css("overflow","hidden");
	}

	//Responsive Table
	$('.table_price').stacktable();


	//animate header
	var shrinkHeader = 900;
	var needScroll  = false;
	$(window).scroll(function() {
	    var scroll = $(this).scrollTop();

	    if (scroll  > shrinkHeader ) {
	    	needScroll = true;
	    }

      if ( scroll >= shrinkHeader ) {
           var heightHeader=$('.header').height();
           var heightHeaderPanel=$('.panel').height();
           $('.header').addClass('shrink');
            $('.header').removeClass('shrinkUp');

            $('.panel').addClass('shrinkPanel');
            $('.panel').removeClass('shrinkPanelUp');

            $('body').css({
            	paddingTop:heightHeader
            });
             $('.content__left').css({
            	paddingTop:heightHeaderPanel
            });
        }
        else {
            $('.header').removeClass('shrink');
            $('.panel').removeClass('shrinkPanel');
            $('body').css({
            	paddingTop:"0px"
            });
            $('.content__left').css({
            	paddingTop:0
            });
        }
        if ( scroll <= shrinkHeader &&  scroll >= 100 && needScroll) {
        	$('.header').addClass('shrinkUp');
        	$('.panel').addClass('shrinkPanelUp');
        	needScroll = false;
        }
        if ( scroll <=  900 ) {
        	$('.header').removeClass('shrinkUp');
        }
	});

	//Stick panel
	
	//$(".panel").sticky({topSpacing:-300});

	/* ###### For SlideToggle Elements  ######*/
	var hideToggle = function(targetClick,toggleEl) {
		$(targetClick).click(function(event){
				event.stopPropagation();
				$(toggleEl).slideToggle("fast");
		});
		$(toggleEl).on("click", function (event) {
			event.stopPropagation();
		});
		$(document).on("click", function () {
				$(toggleEl).hide();
		});
	}

	if ($(window).width()<768) {
		hideToggle('.header .icon-bars','.header-nav');
		hideToggle('.list-service .icon-bars','.list-service__content');
	}
	

	setInterval(function() {
		$('.panel__get').addClass('shake')
	}, 26000);
	
	setInterval(function() {
		$('.panel__get').removeClass('shake')
	}, 28000);	


	//validate
		$('.validate-form').each(function() {   
		var curentForm = $(this);
    $(this).validate({        
		    	rules:{ //правила для полей 
						name:{
							required:true,
						},
						phone:{
							required:true,
							minlength:5,
							number:true
						},
					
					},
					messages:{
						name:{
							required: 'Обязательное поле',
						},
						phone:{
							required: 'Обязательное поле',
							number:'Введите правильный номер',
							minlength:'Номер должен быть длиннее',
						},
					
					},
					submitHandler : function(form){ 
						$.ajax({ //отправка ajax
						            type: "POST",
						            url: "/wp-content/themes/DAMAGE/sender.php",
						            data: $(form).serialize(),
						            timeout: 3000,
						          });
							$('.modal-close').click(); // автозакрытие окна
							setTimeout(function(){
										$('.modal-true').bPopup({
											closeClass:'modal-close',
												position:['auto','auto'], // position center
												follow: [true,true],
												autoClose: 2000
										}); 
										$(':input','.validate-form') //очитска формы от данных
										  .not(':button, :submit, :reset, :hidden')
										  .val('')
										  .removeAttr('checked')
										  .removeAttr('selected')
							},2000)
				}
		    });
		});

	

	
});
