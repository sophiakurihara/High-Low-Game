<?php

if(!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	$random = mt_rand(1, 100);
 
	fwrite(STDOUT, "Guess a number between 1 and 100:" . PHP_EOL);

} else {
	fwrite(STDOUT, "If you would like to set the min & max, please enter 2 valid integers as arguments");
	
	$random = mt_rand($argv[1], $argv[2]);
 
	fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]}" . PHP_EOL);
}

$user_guess = trim(fgets(STDIN));

do {
	if ($user_guess < $random) {
		echo "HIGHER" .PHP_EOL;
		$user_guess = trim(fgets(STDIN)) . PHP_EOL;
	} else {
		echo "LOWER" . PHP_EOL;
		$user_guess = trim(fgets(STDIN)) . PHP_EOL;
	}
} while ($user_guess != $random);

echo "GOOD GUESS!" . PHP_EOL;
exit(0);