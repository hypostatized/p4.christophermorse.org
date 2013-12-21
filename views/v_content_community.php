<div id="top">
	<div id="nav">
		<ul><li><a href="/content/profile">Your Profile</a></li><li><a href="/content/community">Community Statistics</a></li><li><a href="/content/functions">Cognitive Functions</a></li><li><a href="/accounts/logout">Sign Out</a></li></ul>
	</div>
</div>

<? 

	$countSe = 0;
	$countNe = 0;
	$countTe = 0;
	$countFe = 0;
	$countSi = 0;
	$countNi = 0;
	$countTi = 0;
	$countFi = 0;
	$count = 0;

	foreach ($community as $com)
	{
		if ($com['dominant'] == 'Se')
		{
			$Se += 50;
		}
		if ($com['dominant'] == 'Ne')
		{
			$Ne += 50;
		}
		if ($com['dominant'] == 'Te')
		{
			$Te += 50;
		}		
		if ($com['dominant'] == 'Fe')
		{
			$Fe += 50;
		}
		if ($com['dominant'] == 'Si')
		{
			$Si += 50;
		}
		if ($com['dominant'] == 'Ni')
		{
			$Ni += 50;
		}
		if ($com['dominant'] == 'Ti')
		{
			$Ti += 50;
		}
		if ($com['dominant'] == 'Fi')
		{
			$Fi += 50;
		}

		if ($com['auxiliary'] == 'Se')
		{
			$Se += 30;
		}
		if ($com['auxiliary'] == 'Ne')
		{
			$Ne += 30;
		}
		if ($com['auxiliary'] == 'Te')
		{
			$Te += 30;
		}		
		if ($com['auxiliary'] == 'Fe')
		{
			$Fe += 30;
		}
		if ($com['auxiliary'] == 'Si')
		{
			$Si += 30;
		}
		if ($com['auxiliary'] == 'Ni')
		{
			$Ni += 30;
		}
		if ($com['auxiliary'] == 'Ti')
		{
			$Ti += 30;
		}
		if ($com['auxiliary'] == 'Fi')
		{
			$Fi += 30;
		}		

		if ($com['tertiary'] == 'Se')
		{
			$Se += 15;
		}
		if ($com['tertiary'] == 'Ne')
		{
			$Ne += 15;
		}
		if ($com['tertiary'] == 'Te')
		{
			$Te += 15;
		}		
		if ($com['tertiary'] == 'Fe')
		{
			$Fe += 15;
		}
		if ($com['tertiary'] == 'Si')
		{
			$Si += 15;
		}
		if ($com['tertiary'] == 'Ni')
		{
			$Ni += 15;
		}
		if ($com['tertiary'] == 'Ti')
		{
			$Ti += 15;
		}
		if ($com['tertiary'] == 'Fi')
		{
			$Fi += 15;
		}				

		if ($com['inferior'] == 'Se')
		{
			$Se += 5;
		}
		if ($com['inferior'] == 'Ne')
		{
			$Ne += 5;
		}
		if ($com['inferior'] == 'Te')
		{
			$Te += 5;
		}		
		if ($com['inferior'] == 'Fe')
		{
			$Fe += 5;
		}
		if ($com['inferior'] == 'Si')
		{
			$Si += 5;
		}
		if ($com['inferior'] == 'Ni')
		{
			$Ni += 5;
		}
		if ($com['inferior'] == 'Ti')
		{
			$Ti += 5;
		}
		if ($com['inferior'] == 'Fi')
		{
			$Fi += 5;
		}		

		$count += 1;

	}

    	// get the proportion of each cognitive
    	// function compared to the total
		$computed = array( 
				array("value"=>($Se / $count), "name"=>"Se", "hex"=>"#CFE958"), 
				array("value"=>($Ne / $count), "name"=>"Ne", "hex"=>"#3F099D"), 
				array("value"=>($Te / $count), "name"=>"Te", "hex"=>"#0793C9"), 
				array("value"=>($Fe / $count), "name"=>"Fe", "hex"=>"#8707A8"),
				array("value"=>($Si / $count), "name"=>"Si", "hex"=>"#A7174A"),
				array("value"=>($Ni / $count), "name"=>"Ni", "hex"=>"#FABB41"),
				array("value"=>($Ti / $count), "name"=>"Ti", "hex"=>"#FD5126"),
				array("value"=>($Fi / $count), "name"=>"Fi", "hex"=>"#FDFD62")
				);


		// sort associative array to display most
		// prominent cognitive function based on
		// total users on the website
		foreach ($computed as $key => $row)
		{
			$value[$key] = $row['value'];
			$name[$key] = $row['name'];
			$hex[$key] = $row['hex'];			
		}

		array_multisort($value, SORT_DESC, $computed);



?>
<div id="visualizeCommunity">
<table>
	<tr>
		<td width="<?=$computed[0]["value"];?>%" style="background-color:<?=$computed[0]["hex"];?>"><h2><?=$computed[0]["name"];?></h2></td>
		<td width="<?=$computed[1]["value"];?>%" style="background-color:<?=$computed[1]["hex"];?>"><h2><?=$computed[1]["name"];?></h2></td>
		<td width="<?=$computed[2]["value"];?>%" style="background-color:<?=$computed[2]["hex"];?>"><h2><?=$computed[2]["name"];?></h2></td>
		<td width="<?=$computed[3]["value"];?>%" style="background-color:<?=$computed[3]["hex"];?>"><h2><?=$computed[3]["name"];?></h2></td>
		<td width="<?=$computed[4]["value"];?>%" style="background-color:<?=$computed[4]["hex"];?>"><h2><?=$computed[4]["name"];?></h2></td>
		<td width="<?=$computed[5]["value"];?>%" style="background-color:<?=$computed[5]["hex"];?>"><h2><?=$computed[5]["name"];?></h2></td>
		<td width="<?=$computed[6]["value"];?>%" style="background-color:<?=$computed[6]["hex"];?>"><h2><?=$computed[6]["name"];?></h2></td>
		<td width="<?=$computed[7]["value"];?>%" style="background-color:<?=$computed[7]["hex"];?>"><h2><?=$computed[7]["name"];?></h2></td>
	</tr>
</table>
</div>


<div id="border">
</div>