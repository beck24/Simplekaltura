<?php
/**
 * Edit video
 *
 */

$video = get_entity(get_input('guid'));

if (!elgg_instanceof($video, 'object', 'simplekaltura_video')) {
	$content = elgg_echo('simplekaltura:not_found');
} else {
	elgg_push_breadcrumb($video->title, $video->getURL());
	elgg_push_breadcrumb(elgg_echo('edit'));
	$vars = simplekaltura_prepare_form_vars($video);
	$content = elgg_view_form("simplekaltura/save", array(), $vars);
}

$body = elgg_view_layout('content', array(
	'filter' => '',
	'buttons' => '',
	'content' => $content,
	'context' => 'videos',
	'title' => $title,
));

echo elgg_view_page($title, $body);