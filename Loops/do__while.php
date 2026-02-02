<?php
// Collection of compact real-world do/while examples.
// Each example is a function; calls at the bottom are commented out.

function example_input_validation()
{
	// Repeat until a valid non-negative integer is entered (CLI)
	$age = null;
	do {
		$age = trim(readline("Enter your age: "));
	} while (!is_numeric($age) || (int)$age < 0);
	echo "Validated age: " . (int)$age . PHP_EOL;
}

function example_menu_cli()
{
	// Simple menu that runs at least once
	$choice = null;
	do {
		echo "\nMenu:\n1) Send\n2) Receive\n0) Exit\n";
		$choice = (int)trim(readline("Choice: "));
		if ($choice === 1) echo "Sending...\n";
		elseif ($choice === 2) echo "Receiving...\n";
	} while ($choice !== 0);
}

function example_retry_api()
{
	// Retry an unreliable operation up to $max attempts
	$max = 5;
	$attempt = 0;
	$success = false;
	do {
		$attempt++;
		// simulate call (50% success)
		$success = (mt_rand(0, 1) === 1);
		echo "Attempt {$attempt}: " . ($success ? "OK" : "FAIL") . PHP_EOL;
		if (!$success) usleep(200000);
	} while (!$success && $attempt < $max);
	echo $success ? "API call succeeded\n" : "API call failed after {$attempt} attempts\n";
}

function example_stream_read()
{
	// Read a string in chunks (stand-in for file/stream reads)
	$data = str_repeat("abcdefghijklmnopqrstuvwxyz", 100);
	$pos = 0;
	$len = strlen($data);
	do {
		$chunk = substr($data, $pos, 1024);
		$pos += strlen($chunk);
		// process chunk
		echo "Read chunk (size=" . strlen($chunk) . ")\n";
	} while ($pos < $len && strlen($chunk) > 0);
}

function example_pagination()
{
	// Simulate fetching pages until no 'next' token is returned
	$allItems = [];
	$next = 1; // page number
	do {
		$page = fetch_page_sim($next);
		$allItems = array_merge($allItems, $page['items']);
		$next = $page['next'];
		echo "Fetched page, items so far: " . count($allItems) . PHP_EOL;
	} while ($next !== null);
	echo "Total items fetched: " . count($allItems) . PHP_EOL;
}

function fetch_page_sim($page)
{
	// returns ['items'=>[], 'next'=>int|null]
	$perPage = 3;
	$source = range(1, 10);
	$offset = ($page - 1) * $perPage;
	$items = array_slice($source, $offset, $perPage);
	$next = ($offset + count($items) < count($source)) ? $page + 1 : null;
	return ['items' => $items, 'next' => $next];
}

function example_game_loop()
{
	// Minimal loop that always runs once (state update + render)
	$ticks = 0;
	$quit = false;
	do {
		$ticks++;
		// update
		$state = "tick {$ticks}";
		// render
		echo "State: {$state}\n";
		// check exit after 3 ticks
		if ($ticks >= 3) $quit = true;
	} while (!$quit);
}

// Example calls (uncomment to run the examples you want):
// example_input_validation();
// example_menu_cli();
// example_retry_api();
// example_stream_read();
// example_pagination();
// example_game_loop();

<?php


