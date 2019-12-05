<?php

$guid = elgg_extract('guid', $vars);

elgg_entity_gatekeeper($guid, 'object', 'discussion', true);

$topic = get_entity($guid);

$title = elgg_echo('edit:object:discussion');

elgg_push_entity_breadcrumbs($topic);
elgg_push_breadcrumb($title);

$body_vars = discussion_prepare_form_vars($topic);

echo elgg_view_page($title, [
	'content' => elgg_view_form('discussion/save', [], $body_vars),
]);
