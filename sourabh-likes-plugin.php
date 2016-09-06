<?php
/**
 * Plugin Name: Sourabh's Like Plugin
 * Plugin URI: http://sdudakiya.0fees.us
 * Description: A plugin for Viewing User Likes
 * Version: 1.0
 * Author: Sourabh Dudakiya
 * Author URI: http://sdudakiya.0fees.us
 * License: GPLv2
 */

// For Security Check

if ( !function_exists('add_action')) {
  # code...
  echo "Not Allowed";
  exit();
}


function us_activate_plugin(){
  if (version_compare( get_bloginfo( 'version' ), '4.2' , '<' )) {
    # code...
    wp_die( __('You must update wordpress to use this plugin.'));
  }

  global $wpdb;

  $createSQL      = "CREATE TABLE IF NOT EXISTS `". $wpdb->prefix ."likes` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `author_id` int(11) NOT NULL,
                `recepient_id` varchar(50) NOT NULL,
                PRIMARY KEY (`id`)
              ) ENGINE=InnoDB ". $wpdb->get_charset_collate()." ";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $createSQL );
}

register_activation_hook( __FILE__, 'us_activate_plugin' );


/*
 * Enqueue scripts and styles
 */


function dobsondev_ajax_tester_style_scripts() {
  wp_enqueue_style( 'dobsondev-ajax-tester-css', plugins_url( 'materialize/css/materialize.min.css', __FILE__ ) );
  wp_enqueue_scripts( 'dobsondev-ajax-tester-js', plugins_url( 'materialize/js/materialize.min.js', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'dobsondev_ajax_tester_style_scripts' );

/*
 * Create the admin menu item
 */
function dobsondev_ajax_tester_create_admin_page() {
  add_menu_page( 'Likes Admin Panel', 'User Likes', 'edit_pages', 'sourabh_likes_admin/ve-admin.php', 'dobsondev_ajax_tester_admin_page', 'dashicons-clipboard', 49 );
}
add_action( 'admin_menu', 'dobsondev_ajax_tester_create_admin_page' );

/*
 *
 */
function dobsondev_ajax_tester_admin_page() {
  $html = '<div class="container">';
  $html .= '<br><h2>User By Alphabets </h2><br />';

  $html .= '<div class="row" id="letters">
        <div class="col s3 m3" id="A">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>A</center><h1></p>
              <input name="letter" type="hidden" value="A">
          </div>
        </div>';
  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>B</center><h1></p>
              <input name="letter" type="hidden" value="B">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>C</center><h1></p>
              <input name="letter" type="hidden" value="C">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>D</center><h1></p>
              <input name="letter" type="hidden" value="D">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>E</center><h1></p>
              <input name="letter" type="hidden" value="E">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>F</center><h1></p>
              <input name="letter" type="hidden" value="F">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>G</center><h1></p>
              <input name="letter" type="hidden" value="G">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>H</center><h1></p>
              <input name="letter" type="hidden" value="H">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>I</center><h1></p>
              <input name="letter" type="hidden" value="I">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>J</center><h1></p>
              <input name="letter" type="hidden" value="J">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>K</center><h1></p>
              <input name="letter" type="hidden" value="K">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>L</center><h1></p>
              <input name="letter" type="hidden" value="L">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>M</center><h1></p>
              <input name="letter" type="hidden" value="M">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>N</center><h1></p>
              <input name="letter" type="hidden" value="N">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>O</center><h1></p>
              <input name="letter" type="hidden" value="O">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>P</center><h1></p>
              <input name="letter" type="hidden" value="P">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>Q</center><h1></p>
              <input name="letter" type="hidden" value="Q">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>R</center><h1></p>
              <input name="letter" type="hidden" value="R">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>S</center><h1></p>
              <input name="letter" type="hidden" value="S">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>T</center><h1></p>
              <input name="letter" type="hidden" value="T">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>U</center><h1></p>
              <input name="letter" type="hidden" value="U">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>V</center><h1></p>
              <input name="letter" type="hidden" value="V">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>W</center><h1></p>
              <input name="letter" type="hidden" value="W">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>X</center><h1></p>
              <input name="letter" type="hidden" value="X">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>Y</center><h1></p>
              <input name="letter" type="hidden" value="Y">
          </div>
        </div>';

  $html .= '<div class="col s3 m3">
          <div class="card blue-grey darken-1">
              <p><h1 class="white-text"><center><br>Z</center><h1></p>
              <input name="letter" type="hidden" value="Z">
          </div>
        </div>';

  $html .= '</div>';

  $html .= '<div id ="selected_letter"></div><div id="selected_user_by_id"></div>
            <div id="back_btn" hidden="true"><input type="button" class="btn" value="Back to All Letters" ></div>';

  $html .= '</div>';



  echo $html;
}

/*
 * The JavaScript for our AJAX call
 */
function dobsondev_ajax_tester_ajax_script() {
  ?>
  <script type="text/javascript" >
  jQuery(document).ready(function($) {


/********************* New Ajax call for Selected Letter Div ***********************/

	  $('.col').click(function(){

            var a = document.querySelector("p");
            var v = $(this).text();
            var selectedLetter = $.trim(v)

	  		    $.ajax({
		        method: "POST",
		        url: ajaxurl,
		        data: { 'action': 'all_likes_by_letter', 'letter' : selectedLetter }
		      })
		      .done(function( data ) {
		        console.log('Successful AJAX Call! /// Return Data: ' + data);
		        data = jQuery.parseJSON( data );
		//        alert(data);
		//        alert(data.author_id);
		       	$( '#selected_letter' ).append('<table id="selected_table"><thead><tr><th>ID</th><th>Who Liked</th><th>Liked Whom ID </th></tr></thead>');
		        $.each(data, function (idx, obj){
		        $( '#selected_table' ).append('<tr><center><td>' + obj.ID + '</td><td>' + obj.display_name + '</td><td class="btn" id="uid"><p hidden> ' + obj.ID + ' </p>All Likes</div></td></center></tr>' );
		//        $( '#selected_table' ).append('<tr><td>' + obj.liked_by + '</td><td>' + obj.display_name + '</td><td>' + obj.display_name + '</td></tr>' );
		    });
		        $( '#selected_letter' ).append('</table>');
		        $( '#letters' ).hide();
            $( '#selected_letter' ).show();
            $('#back_btn').show();
		      })
		      .fail(function( data ) {
		        console.log('Failed AJAX Call :( /// Return Data: ' + data);
		      });
		  });

/**************** Back Button Function *****************/

      $('#back_btn').click(function(){
        //alert('btn clicked');
        $('#selected_letter').empty();
        $('#selected_table_by_id').empty();
        $('#letters').show();
        $('#selected_user_by_id').hide();
        $( '#back_btn' ).hide();
      });


/********************* New Ajax call for Selected Letter Div ***********************/

$(document).on('click', '#uid', function () {
//    alert($('p',this).text());
    var u_id = $('p',this).text();
    $.ajax({
            method: "POST",
            url: ajaxurl,
            data: { 'action': 'all_likes_by_id', 'uid' : u_id }
          })
          .done(function( data ) {
            console.log('Successful AJAX Call! /// Return Data: ' + data);
            data = jQuery.parseJSON( data );
    //        alert(data);
    //        alert(data.author_id);
            $( '#selected_user_by_id' ).append('<table id="selected_table_by_id"><thead><tr><th>Liked Whom </th></tr></thead>');
            $.each(data, function (idx, obj){
            $( '#selected_table_by_id' ).append('<tr><td>' + obj.recepient_id + '</td></tr>' );
    //        $( '#selected_table' ).append('<tr><td>' + obj.liked_by + '</td><td>' + obj.display_name + '</td><td>' + obj.display_name + '</td></tr>' );
        });
            $( '#selected_user_by_id' ).append('</table>');
            $( '#letters' ).hide();
//            $( '#selected_table_by_id' ).empty();
            $( '#selected_letter' ).hide();
            $('#back_btn').show();
          })
          .fail(function( data ) {
            console.log('Failed AJAX Call :( /// Return Data: ' + data);
          });
        });
    });

	
  </script>
  <?php
}
add_action( 'admin_footer', 'dobsondev_ajax_tester_ajax_script' );

/*
 * The AJAX handler function
 */

/******************* Function for ajax call to get letter selected by the user ************/
function all_likes_by_letter() {
  global $wpdb;

  $letter = $_POST['letter'];
  $data = $wpdb->get_results( 'SELECT * FROM wp_users where display_name LIKE "'. $letter. '%"', ARRAY_A);
  echo json_encode($data);
  wp_die(); // just to be safe
}
add_action( 'wp_ajax_all_likes_by_letter', 'all_likes_by_letter' );



/******************* Function for ajax call to get letter selected by the user ************/
function all_likes_by_id() {
  global $wpdb;

  $uid = $_POST['uid'];
  $data = $wpdb->get_results( 'SELECT * FROM wp_likes where author_id = "'. $uid. '%"', ARRAY_A);
  echo json_encode($data);
  wp_die(); // just to be safe
}
add_action( 'wp_ajax_all_likes_by_id', 'all_likes_by_id' );



/********************** Notification Section **************************/

// this is to add a fake component to BuddyPress. A registered component is needed to add notifications
function custom_filter_notifications_get_registered_components( $component_names = array() ) {
  // Force $component_names to be an array
  if ( ! is_array( $component_names ) ) {
    $component_names = array();
  }
  // Add 'custom' component to registered components array
  array_push( $component_names, 'custom' );
  // Return component's with 'custom' appended
  return $component_names;
}
add_filter( 'bp_notifications_get_registered_components', 'custom_filter_notifications_get_registered_components' );


// this gets the saved item id, compiles some data and then displays the notification
function custom_format_buddypress_notifications( $action, $item_id, $secondary_item_id, $total_items, $format = 'string' ) {
  // New custom notifications
  if ( 'custom_action' === $action ) {
  
    $comment = get_comment( $item_id );
  
    $custom_title = $comment->comment_author . ' commented on the post ' . get_the_title( $comment->comment_post_ID );
    $custom_link  = get_comment_link( $comment );
    $custom_text = $comment->comment_author . ' commented on your post ' . get_the_title( $comment->comment_post_ID );
    // WordPress Toolbar
    if ( 'string' === $format ) {
      $return = apply_filters( 'custom_filter', '<a href="' . esc_url( $custom_link ) . '" title="' . esc_attr( $custom_title ) . '">' . esc_html( $custom_text ) . '</a>', $custom_text, $custom_link );
    // Deprecated BuddyBar
    } else {
      $return = apply_filters( 'custom_filter', array(
        'text' => $custom_text,
        'link' => $custom_link
      ), $custom_link, (int) $total_items, $custom_text, $custom_title );
    }
    return $return;   
  }
}
add_filter( 'bp_notifications_get_notifications_for_user', 'custom_format_buddypress_notifications', 10, 5 );

// this hooks to comment creation and saves the comment id
function bp_custom_add_notification( $comment_id, $comment_object ) {
  $post = get_post( $comment_object->comment_post_ID );
  $author_id = $post->post_author;
  bp_notifications_add_notification( array(
    'user_id'           => $author_id,
    'item_id'           => $comment_id,
    'component_name'    => 'custom',
    'component_action'  => 'custom_action',
    'date_notified'     => bp_core_current_time(),
    'is_new'            => 1,
  ) );
  
}
add_action( 'wp_insert_comment', 'bp_custom_add_notification', 99, 2 );

// HandlesUser ajax likes from the random-user page template

function user_like() {
  global $wpdb;

  $user_id = get_current_user_id();
  $rec_id = $_POST['recepient_id'];

//  $exists = $wpdb->get_results( 'SELECT * FROM wp_likes WHERE author_id = '. $user_id .' and recepient_id = ' .$rec_id. '', OBJECT );
  
  if (($wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "likes WHERE author_id = $user_id AND recepient_id = '$rec_id'"))){
    echo "Already Liked the user!";
  }
  else{
  $data = $wpdb->insert( 'wp_likes', array('author_id' => $user_id, 
                        'recepient_id' => $rec_id ));
  echo json_encode($data);
  wp_die(); // just to be safe

$to = 'sdudakiya@gmail.com';
$subject = 'The subject';
$body = 'The email body content';
$headers = array('Content-Type: text/html; charset=UTF-8');

include("email_header.php");

wp_mail( $to, $subject, $body, $headers );
  }
}
add_action( 'wp_ajax_user_like', 'user_like' );

function random_user() {
  global $wpdb;

  $user_id = get_current_user_id();

//  $exists = $wpdb->get_results( 'SELECT * FROM wp_likes WHERE author_id = '. $user_id .' and recepient_id = ' .$rec_id. '', OBJECT );
  
  $usernames = $wpdb->get_results("SELECT id, display_name, user_url, user_email FROM $wpdb->users ORDER BY RAND() LIMIT 1");

  echo json_encode($data);
  wp_die(); // just to be safe
  }

add_action( 'wp_ajax_random_user', 'random_user' );


?>