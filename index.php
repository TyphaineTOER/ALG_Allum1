<?php
Function Allum()
{
	$line = readline("$ ./ allum1 :");
	$Allumette = $line;

	$allum = $Allumette;
	while ( $allum > 0) 
	{
		echo "|";
		$allum --;


	}
	echo"\n";
	echo"a ton tour :";
	echo "\n";
	$suprimer = readline("Allumettes : ");
	echo "Player removed " . $suprimer . " allumettes ";
	echo "\n";

	$Allumette = $Allumette - $suprimer; 


	while ( $Allumette > 0) 
	{
		$allum = $Allumette;


		while ( $allum > 0) {
			echo "|";
			$allum --;

		}
		echo "\n";
		echo "Au tour de l'IA...";
		echo "\n";

		if ($Allumette > 0) 
		{
			$allum = $Allumette;
			$nbr = $Allumette % 4;
			switch ($nbr) {
				case 3:
				$Allumette = $Allumette -2;

				echo "AI a enlever 2 allumettes \n";
				break;
				case 2:
				$Allumette = $Allumette -1;
				echo "AI a enlever 1 allumette \n";
				break;
				case 1:
				$Allumette = $Allumette -1;
				echo "AI a enlever une allumette \n";
				break;
				case 0:
				$Allumette = $Allumette -3;
				echo "AI a enlever 3 allumettes \n";
				break;
			}

			$allum = $Allumette;
			while ( $allum > 0) 
			{

				echo "|";

				$allum --;

			}
			echo "\n";
		}

		
		$suprimer = readline("a ton tour : Allumettes : ");
		$Allumette = $Allumette - $suprimer;
		echo "Player removed " . $suprimer . " Allumettes ";
		echo "\n";

		
	}

}
Allum();
?>