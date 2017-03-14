<?php

$random = mt_rand(1, 100);
 
fwrite(STDOUT, 'Guess a number between 1 and 100' . PHP_EOL);

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