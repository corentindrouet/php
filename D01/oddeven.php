#!/usr/bin/php
<?php
echo "Entrez un nombre: ";
while (($line = fgets(STDIN)) !== FALSE)
{
	$line = trim($line);
	if (is_numeric($line))
	{
		if (($line % 2) == 0)
			echo "Le chiffre ".$line." est Pair\n";
		else
			echo "Le chiffre ".$line." est Impair\n";
	}
	else
		echo "'".$line."' n'est pas un chiffre\n";
	echo "Entrez un nombre: ";
}
echo "^D\n";
?>
