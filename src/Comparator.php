<?php
function existAllElements(array $basket, array $userBasket)
{
	$coincidence = 0;
	foreach($basket as $value1)
	{
		foreach ($userBasket as $value2)
		{
			if ((int)$value1 === (int)$value2)
			{
				$coincidence++;
			}
		}
	}
	
	if ($coincidence===count($basket))
		return 1;
	else
		return 0;
}
	
function existSingleElement(array $basket, array $userBasket)
{
	$count = 0;
	foreach($basket as $value1)
	{
		foreach ($userBasket as $value2)
		{
			if ((int)$value1 === (int)$value2)
			{
				$count++;
				if ($count>1)
				{
					return 0;
				}
			}
		}
	}
	if ($count === 0)
		return 0;
	return 1;
}

?>