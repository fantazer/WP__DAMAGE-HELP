<?
// Создаем массив
  $post_data = array(
	 'post_title'    => 'Оценка залива метро Курская',
	 'post_content'  => '<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi consequuntur repellat eius a itaque, in ratione ipsam, perferendis temporibus. Adipisci?</P>',
	 'post_status'   => 'publish',
	 'post_author'   => 1,
	 'post_category' => array(7)
  );

// Вставляем данные в БД
$post_id = wp_insert_post( wp_slash($post_data) );

?>

