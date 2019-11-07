
<?php 

function posts_home($offset) {

  $cards = [];

  $posts = get_posts([
    'numberposts' => 6,
    'offset'      => $offset,
    'orderby'     => 'date',
    'order'       => 'DESC',
  ]);
  
  foreach($posts as $post) {
  
    $categories = get_the_category( $post->ID );
  
    $cat_name = '';
    foreach($categories as $key => $category) {
      if($key !== 0) {
        $cat_name .= ', ';
      }
      $cat_name .= $category->cat_name;
    }
  
    $cards[] = array(
      'category' => $cat_name,
      'title' => mb_strimwidth(strip_tags($post->post_title), 0, 55, "..."),
      'description' => mb_strimwidth(strip_tags($post->post_content), 0, 75, "..."),
      'link' => get_permalink($post->ID),
      'img' => get_the_post_thumbnail_url($post->ID)
    );
  }
  
  return json_encode($cards);
}

// POSTS MAIS VISTOS  (NO FUNCTIONS)  
function shapeSpace_popular_posts($post_id) {
  $count_key = 'popular_posts';
  $count = get_post_meta($post_id, $count_key, true);
  if ($count == '') {
      $count = 0;
      delete_post_meta($post_id, $count_key);
      add_post_meta($post_id, $count_key, '0');
  } else {
      $count++;
      update_post_meta($post_id, $count_key, $count);
  }
}
function shapeSpace_track_posts($post_id) {
  if (!is_single()) return;
  if (empty($post_id)) {
      global $post;
      $post_id = $post->ID;
  }
  shapeSpace_popular_posts($post_id);
}
add_action('wp_head', 'shapeSpace_track_posts');

