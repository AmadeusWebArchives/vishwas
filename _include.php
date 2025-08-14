<?php
DEFINE('NODEPATH', __DIR__);

variables([
	'nodeSlug' => $relPath = variable('node') . '/organizations/vishwas',
	assetKey(NODEASSETS) => fileUrl(variable('section') . '/' . $relPath . '/assets/'),
	'nodeSiteName' => '<span>Vishwas</span> Mental Health',
	'nodeSafeName' => 'vishwas-mh',
	'submenu-at-node' => true,
	'nodes-have-files' => true,
]);

if ($bc1 = variable('sectionBC1'))
	variable('nodeParent1', $bc1);
