<?php
/**
 * All files
 *
 * @package ElggFile
 */

elgg_register_title_button('file', 'add', 'object', 'file');

$title = elgg_echo('file:all');
$content = elgg_view('file/listing/all', $vars);
$sidebar = elgg_view('file/sidebar', $vars);

$body = elgg_view_layout('content', [
	'filter_context' => 'all',
	'content' => $content,
	'title' => $title,
	'sidebar' => $sidebar,
]);

echo elgg_view_page($title, $body);
