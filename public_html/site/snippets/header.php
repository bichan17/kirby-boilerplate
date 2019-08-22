<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title><?= $page->title(); ?> - <?= $site->title(); ?></title>

        <?= css('assets/styles/main.css') ?>
	</head>
	<body class="">
		<div class="site-container">
            <?php snippet('layout/site-header'); ?>