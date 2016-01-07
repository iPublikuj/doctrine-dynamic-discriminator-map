<?php

$version = getenv('NETTE');

if (!$version || $version == 'default') {
	exit;
}

echo "Nette version " . $version . PHP_EOL;

$file = __DIR__ . '/composer.json';
$content = file_get_contents($file);
$composer  = json_decode($content, TRUE);

$composer['require']['nette/application'] = $version;
$composer['require']['nette/di'] = $version;

if ($version === '~2.2.0') {
	$composer['require']['kdyby/doctrine'] = '2.3.1';
	$composer['require']['kdyby/events'] = '2.3.2';
}

$content = json_encode($composer);
file_put_contents($file, $content);
