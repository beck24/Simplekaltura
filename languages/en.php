<?php
/**
 * Simple Kaltura English Translation
 *
 * @package Simplekaltura
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 *
 */
$english = array(

	// Generic
	'video' => 'Video',
	'videos' => 'Videos',
	'item:object:video' => 'Video',
	'item:object:simplekaltura_video' => 'Spot Videos',
	'simplekaltura_video:new' => 'Upload New Video',
	'simplekaltura_video' => 'Videos',
	'simplekaltura:owner' => '%s\'s videos',
	'simplekaltura:none' => 'No Videos',
	'simplekaltura:spotvideo' => 'Spot Videos',

	// Titles
	'admin:plugin_settings:simplekaltura' => 'Simple Kaltura Settings',

	'videos:add' => 'Upload New Video',
	'simplekaltura:edit' => 'Edit Video',
	'simplekaltura:all' => 'All Videos',
	'simplekaltura:friends' => '%s\'s Friends\' Videos',

	// Labels
	'simplekaltura:label:subtypes_settings_submit' => 'Submit Subtype Settings',
	'simplekaltura:label:title' => 'Title',
	'simplekaltura:label:description' => 'Description',
	'simplekaltura:label:grouptags' => 'Group Videos',
	'simplekaltura:label:deleteconfirm' => 'Are you sure you want to delete this Video?',
	'simplekaltura:label:submitted_by' => 'Submitted by %s',
	'simplekaltura:label:leaveacomment' => 'Leave a Comment / ',
	'simplekaltura:label:new' => 'Upload New Video',
	'simplekaltura:label:selectvideo' => 'Select a video..',
	'simplekaltura:label:deleteconfirm' => 'Are you sure you want to delete this video?',
	'simplekaltura:label:posted_by' => 'Posted by %s',
	'simplekaltura:label:friends' => 'Friends',
	'simplekaltura:label:vidlength' => 'Length: %s ',
	'simplekaltura:label:vidplays' => 'Plays: %s ',
	'simplekaltura:label:unavailable' => 'Unavailable',
	'simplekaltura:label:default' => 'Default',
	'simplekaltura:label:download' => 'Download Video',
	'simplekaltura:label:groupvideos' => 'Group spot videos',
	'simplekaltura:label:mostplayed' => 'Most Played',
	'simplekaltura:label:embedcode' => 'Embed Code',
	'simplekaltura:label:viewonspot' => 'View this video on THINK Spot!',
	'simplekaltura:label:copypaste' => 'Copy and paste the code below:',
	'simplekaltura:label:embedvideo' => 'Embed Video',
	'simplekaltura:label:viewvideo' => 'View Original Video',
	'simplekaltura:label:currentthumbnail' => 'Current Thumbnail',
	'simplekaltura:label:selectthumbnail' => 'Select Thumbnail',
	'simplekaltura:label:editvideo' => 'Edit Video: "%s"',

	// Admin
	'simplekaltura:admin:kalturaconfig' => 'Kaltura Configuration',
	'simplekaltura:admin:playerconfig' => 'Player Configuration',
	'simplekaltura:admin:thumbconfig' => 'Thumbnail Configuration',
	'simplekaltura:admin:admintags' => 'Admin Tags (Used to identify this particular Elgg site\'s videos)',
	'simplekaltura:admin:partnerid' => 'Partner ID',
	'simplekaltura:admin:emailaccount' => 'Email Address',
	'simplekaltura:admin:passwordaccount' => 'Password',
	'simplekaltura:admin:customplayerid' => 'Custom Player ID',
	'simplekaltura:admin:playerheight' => 'Player Height',
	'simplekaltura:admin:playerwidth' => 'Player Width',
	'simplekaltura:admin:thumbnailurl' => 'Thumbnail URL (See: http://corp.kaltura.com/wiki/index.php/KalturaAPI:thumbnail)',
	'simplekaltura:admin:smallthumb' => 'Small Thumbnail',
	'simplekaltura:admin:mediumthumb' => 'Medium Thumbnail',
	'simplekaltura:admin:largethumb' => 'Large Thumbnail',
	'simplekaltura:admin:width' => 'Width',
	'simplekaltura:admin:height' => 'Height',

	// River
	'river:create:object:simplekaltura_video' => '%s uploaded a Video titled %s',
	'river:comment:object:simplekaltura_video' => '%s commented on a Video titled %s',

	// Notifications
	'simplekaltura:notification:subject' => 'New Spot Video',
	'simplekaltura:notification:body' => "%s posted a new Spot Video titled: %s\n\n%s\n\nTo watch the video click here:\n%s
",


	// Messages
	'simplekaltura:success:save' => 'Successfully saved Video',
	'simplekaltura:success:delete' => 'Video successfully deleted',
	'simplekaltura:success:update' => 'Video successfully updated',
	'simplekaltura:error:save' => 'Error saving Video',
	'simplekaltura:error:delete' => 'There was an error deleting the Video',
	'simplekaltura:error:notfound' => 'Video not found',
	'simplekaltura:error:apierror' => 'Kaltura API Error',
	'simplekaltura:error:titlerequired' => 'Title is required',
	'simplekaltura:error:nonpublic' => 'Video must be public!',
	'simplekaltura:error:invalidsecond' => 'Invalid value for thumbnail second',
	'simplekaltura:error:invalidsecondduration' => 'Value must be less than video duration (%s seconds)',
	'simplekaltura:notconverted' => 'Warning: Video has not yet finished converting. Thumbnail selection is unavailable while conversion in progress.',

	// Other content
	'simplekaltura:no_content' => 'No content',
	'groups:enablesimplekaltura' => 'Enable group spot videos',
);

add_translation('en', $english);