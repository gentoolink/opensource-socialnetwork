<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('__OSSN_COMMENTS__', ossn_route()->com . 'OssnComments/');
require_once(__OSSN_COMMENTS__ . 'classes/OssnComments.php');
require_once(__OSSN_COMMENTS__ . 'libs/comments.php');

/**
 * Initialize Comments Component
 *
 * @return void;
 * @access private
 */
function ossn_comments() {
    if (ossn_isLoggedin()) {
        ossn_register_action('post/comment', __OSSN_COMMENTS__ . 'actions/post/comment.php');
        ossn_register_action('post/entity/comment', __OSSN_COMMENTS__ . 'actions/post/entity/comment.php');
        ossn_register_action('delete/comment', __OSSN_COMMENTS__ . 'actions/comment/delete.php');
    }
    ossn_add_hook('post', 'comments', 'ossn_post_comments');
    ossn_add_hook('post', 'comments:entity', 'ossn_post_comments_entity');

    ossn_register_callback('comment', 'load', 'ossn_comment_menu');

    ossn_extend_view('js/opensource.socialnetwork', 'components/OssnComments/js/OssnComments');
    ossn_extend_view('css/ossn.default', 'components/OssnComments/css/comments');

    ossn_register_page('comment', 'ossn_comment_page');

    ossn_register_callback('post', 'delete', 'ossn_post_comments_delete');

}

/**
 * View comments bar on wall posts
 *
 * @return mix data;
 * @access private
 */
function ossn_post_comments($hook, $type, $return, $params) {
    return ossn_view('components/OssnComments/post/comments', $params);
}

/**
 * View comments bar on entity
 *
 * @return mix data;
 * @access private
 */
function ossn_post_comments_entity($hook, $type, $return, $params) {
    return ossn_view('components/OssnComments/post/comments_entity', $params);
}

/**
 * Delete post comments
 *
 * @return void;
 * @access private
 */
function ossn_post_comments_delete($event, $type, $params) {
    $delete = new OssnComments;
    $delete->commentsDeleteAll($params);
}

/**
 * Delete comment menu
 *
 * @return voud;
 * @access private
 */
function ossn_comment_menu($name, $type, $params) {
    ossn_unregister_menu('delete', 'comments');

    $OssnComment = new OssnComments;
    if (is_object($params)) {
        $params = get_object_vars($params);
    }
    $comment = $OssnComment->getComment($params['id']);
    if ($comment->type == 'comments:post') {
        if (com_is_active('OssnWall')) {
            $ossnwall = new OssnWall;
            $post = $ossnwall->GetPost($comment->subject_guid);
            if (ossn_loggedin_user()->guid == $post->owner_guid) {
                ossn_register_menu_link('delete', ossn_print('comment:delete'), array(
                    'href' => ossn_add_tokens_to_url(ossn_site_url("action/delete/comment?comment={$params['id']}")),
                    'class' => 'ossn-delete-comment',
                ), 'comments');
            }
        }
    }
	$user = ossn_loggedin_user();
	if(ossn_isLoggedin()){
      if (($user->guid == $params['owner_guid']) || ossn_isAdminLoggedin()) {
          ossn_register_menu_link('delete', ossn_print('comment:delete'), array(
              'href' => ossn_add_tokens_to_url(ossn_site_url("action/delete/comment?comment={$params['id']}")),
              'class' => 'ossn-delete-comment',
          ), 'comments');
      }
	}
}

/**
 * Comment page for viewing comment photos
 *
 * @access private;
 */
function ossn_comment_page($pages) {
    $page = $pages[0];
    switch ($page) {
        case 'image':
            if (!empty($pages[1]) && !empty($pages[2])) {
                $file = ossn_get_userdata("annotation/{$pages[1]}/comment/photo/{$pages[2]}");
                header('Content-Type: image/jpeg');
                if (is_file($file)) {
                    echo ossn_resize_image($file, 300, 300);
                } else {
                    ossn_error_page();
                }
            } else {
                ossn_error_page();
            }
            break;
        case 'attachment':
            header('Content-Type: application/json');
            if (isset($_FILES['file']['tmp_name']) && ossn_isLoggedin()) {
                $file = $_FILES['file']['tmp_name'];
                $unique = time() . '-' . substr(md5(time()), 0, 6) . '.jpg';
                $newfile = ossn_get_userdata("tmp/photos/{$unique}");
                $dir = ossn_get_userdata("tmp/photos/");
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true);
                }
                if (move_uploaded_file($file, $newfile)) {
                    $file = base64_encode(ossn_string_encrypt($newfile));
                    echo json_encode(array(
                            'file' => base64_encode($file),
                            'type' => 1,
                        ));
                    exit;
                }
            }
            echo json_encode(array('type' => 0,));
            break;
        case 'staticimage' :
            $image = base64_decode(input('image'));
            if (!empty($image)) {
                $file = ossn_string_decrypt(base64_decode($image));
                header('content-type: image/jpeg');
                $file = rtrim(ossn_validate_filepath($file), '/');
                if (is_file($file)) {
                    echo file_get_contents($file);
                } else {
                    ossn_error_page();
                }
            } else {
                ossn_error_page();
            }
            break;
    }
}

ossn_register_callback('ossn', 'init', 'ossn_comments');
