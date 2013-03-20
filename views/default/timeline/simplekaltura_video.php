<?php
/**
 * Timeline view for simplekaltura videos
 *
 * @package Simplekaltura
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2013
 * @link http://www.thinkglobalschool.com/
 * 
 */
elgg_load_library('simplekaltura');

if (!($thumbnail_url = $vars['entity']->thumbnailUrl)) {
	$thumbnail_url = elgg_get_plugin_setting('kaltura_thumbnail_url', 'simplekaltura') . $vars['entity']->kaltura_entryid;
}

$comments_count = $vars['entity']->countComments();
$likes_count = likes_count($vars['entity']);

$pop_url = elgg_get_site_url() . 'videos/popup/' . $vars['entity']->guid;

echo  "<a href='$pop_url' class='modules-lightbox'><img width='153px' src='$thumbnail_url' /></a><br />
	<div class='elgg-subtext timeline-entity-subtext'>
		Likes: $likes_count $views_string Comments: $comments_count
	</div>". elgg_get_excerpt($vars['entity']->description);
