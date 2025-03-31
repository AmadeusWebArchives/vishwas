<?php
DEFINE('NODEPATH', __DIR__);

variables([
	'nodeSiteName' => '<span>Vishwas</span> Mental Health',
	'nodeSafeName' => 'vishwas-mh',
	'autofix-encoding' => true,
]);

runExtension('node-xt');
initializeNodeXt('special-site');
