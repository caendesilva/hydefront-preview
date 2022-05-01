<?php

$time_start = microtime(true);

echo 'Compiling hydefront preview', PHP_EOL, PHP_EOL;

// Get the sha from the command line arguments
$sha = $argv[1];

echo 'SHA: ', $sha, PHP_EOL;

if (! $sha || ! preg_match('/^[a-f0-9]{40}$/', $sha)) {
	echo 'Error: Invalid SHA', PHP_EOL;
	exit(400);
}

if (! file_exists('hydefront-preview.html')) {
	echo 'Error: hydefront-preview.html not found', PHP_EOL;
	exit(404);
}

echo 'Transforming HTML', PHP_EOL, PHP_EOL;

$stream = file_get_contents('hydefront-preview.html');

$stream = str_replace('https://cdn.jsdelivr.net/gh/hydephp/hydefront@master/dist/', 'https://cdn.jsdelivr.net/gh/hydephp/hydefront@' . $sha . '/dist/', $stream);
$stream = str_replace('{{ %% COMMIT_SHA %% }}', $sha, $stream);

file_put_contents('hydefront-preview-output.html', $stream);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo 'Done. Finished in ' . round($time * 1000, 2) . ' ms', PHP_EOL;

exit(0);