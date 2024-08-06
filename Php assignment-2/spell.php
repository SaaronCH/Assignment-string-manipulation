<?php
$spell="   ABRACADABRA   ";
$trimedSpell=trim($spell);
$lowerCase=strtolower($trimedSpell);
echo"The trimed and lowercase is:".$lowerCase."<br>";
if($lowerCase=="abracadabra")
{
	echo "spell is correct";
}
else
{
	echo"the wizarding world is still at risk!";
}

?>