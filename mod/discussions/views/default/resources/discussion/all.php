<?php

elgg_push_collection_breadcrumbs('object', 'discussion');

echo elgg_view_page(elgg_echo('discussion:latest'), [
	'content' => elgg_view('discussion/listing/all'),
]);
