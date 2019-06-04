<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'price' => [
		'controller' => 'main',
		'action' => 'price',
	],

	'reviews' => [
		'controller' => 'main',
		'action' => 'reviews',
	],

	'gallery/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'gallery',
	],

	'gallery' => [
		'controller' => 'main',
		'action' => 'gallery',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],


	'^(.*)$' => [
		'controller' => 'main',
		'action' => 'index',
	],

];
