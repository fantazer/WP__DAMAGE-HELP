<? if (in_category(array('2','3','6','9','10','11','12','13','14','15','16','18'))) { ?>
	<div class="panel" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

		<div class="panel__el">
			<div class="panel__title"> Время</div>
			<div class="panel__info">
				<? 
				$category = get_the_category();
				 if(!in_category(array('7','9','21'))){
				 	echo CFS()->get('time');
				 	} else {
				 		echo '1-2';
				 	}
				  ?>
				<span>дня</span>
			</div>
		</div>
		<div class="panel__el">
			<div class="panel__title">Доставка</div>
			<div class="panel__info">Есть</div>
		</div>
		<div class="panel__el panel__ready">
			<div class="panel__title">Оценщик</div>
			<div class="panel__info">готов</div>
		</div>
		<div class="panel__el panel__price get-modal">
			<div class="panel__title"> Цена</div>
			<div class="panel__info"> <span>от</span>
				<? 
				$category = get_the_category();
				 if(!in_category(array('7','9','21'))){
				 	echo CFS()->get('price');
				 	echo ' <meta itemprop="price" content="'.CFS()->get('price').'.00">';
				 	}
				 	elseif(in_category(array('21'))){
				    echo '1500';
				 		echo ' <meta itemprop="price" content="1500.00">';
	        }
				 	else {
				 		echo '4000';
				 		echo ' <meta itemprop="price" content="4000.00">';
				 	}
				  ?>
				
	   			 <meta itemprop="name" content="<? the_title(); ?>">
	   			 <meta itemprop="priceCurrency" content="RUB">
	   			 <link itemprop="availability" href="http://schema.org/InStock">
				<span>руб</span>
			</div>
		</div>
		<div class="panel__el panel__get get-modal" onclick="yaCounter22674784.reachGoal('GET-ORDER'); return true;">Заказать</div>
	</div>

<? } else {?>
<div class="panel" >
	<div class="panel__el">
		<div class="panel__title"> Время!</div>
		<div class="panel__info">
			<? 
			$category = get_the_category();
			 if($category[0]->term_id==21){
			 		echo '1-2';
        }
			 if($category[0]->term_id!=7){
			 	echo CFS()->get('time');
			 	}
			 	else {
			 		echo '1-2';
			 	}
			  ?>
			<span>дня</span>
		</div>
	</div>
	<div class="panel__el">
		<div class="panel__title">Доставка</div>
		<div class="panel__info">Есть</div>
	</div>
	<div class="panel__el panel__ready">
		<div class="panel__title">Оценщик</div>
		<div class="panel__info">готов</div>
	</div>
	<div class="panel__el panel__price get-modal">
		<div class="panel__title"> Цена</div>
		<div class="panel__info">
		<span>от</span>
			<? 
			$category = get_the_category();
			 if(!in_category(array('7','9','21'))){
			 	echo CFS()->get('price');
			 	}
			 	elseif(in_category(array('21'))){
			 		echo '1500';
        }
			 	else {
			 		echo '4000';
			 	}
			  ?>
			<span>руб</span>
		</div>
	</div>
	<div class="panel__el panel__get get-modal" onclick="yaCounter22674784.reachGoal('GET-ORDER'); return true;">Заказать</div>
</div>

<? } ?>