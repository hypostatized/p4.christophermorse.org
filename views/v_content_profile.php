<div id="top">
	<div id="nav">
		<ul><li><a href="/content/profile">Your Profile</a></li><li><a href="/content/community">Community Statistics</a></li><li><a href="/content/functions">Cognitive Functions</a></li><li><a href="/accounts/logout">Sign Out</a></li></ul>
	</div>
</div>

<div id="badge">
<script>

<?php
	$functions = array
            (
            	array("Se", "#CFE958", "Extraverted Sensing", "notice sensory data in the environment", "trust your instincts and take action relevant to the moment and current context"),
            	array("Ne", "#3F099D", "Extraverted Intuition", "notice abstract patterns as they emerge", "shift a situation&#39;s dynamics and explore imaginative potential possibilities"),
            	array("Te", "#0793C9", "Extraverted Thinking", "follow steps, points and time tables", "create structure, reason by measures and evidence, and implement complex plans"),
            	array("Fe", "#8707A8", "Extraverted Feeling", "honor others&#39; needs and preferences", "connect with people by sharing values and taking on their needs as yours"),
            	array("Si", "#A7174A", "Introverted Sensing", "recall tangible data and experiences", "stabilize a situation by comparing it to what is expected, known and reliable"),
            	array("Ni", "#FABB41", "Introverted Intuition", "receive &#39;ah-ha&#39; insights and realizations", "persue a greater level of awareness to transform who you are and how you think"),
            	array("Ti", "#FD5126", "Introverted Thinking", "adhere to definitions and impersonal principles", "analyze a problem using a framework, and find an angle or leverage by which to solve it"),
            	array("Fi", "#FDFD62", "Introverted Feeling", "adhere to personal beliefs about what&#39;s important", "evalute situations and choose what you believe is congruent with your personal identity")
            );

	for ($row = 0; $row < 8; $row++)
	        {
	            if ($user->dominant == $functions[$row][0])
	            {
	            	$hexDominant = $functions[$row][1];
	            	$nameDominant = $functions[$row][2];
	            	$passiveDominant = $functions[$row][3];
	            	$activeDominant = $functions[$row][4];
	            }
	           	if ($user->auxiliary == $functions[$row][0])
	            {
	            	$hexAuxiliary = $functions[$row][1];
	            	$nameAuxiliary = $functions[$row][2];
	            	$passiveAuxiliary = $functions[$row][3];
	            	$activeAuxiliary = $functions[$row][4];
	            }
	           	if ($user->tertiary == $functions[$row][0])
	            {
	            	$hexTertiary = $functions[$row][1];
	            	$nameTertiary = $functions[$row][2];
	            	$passiveTertiary = $functions[$row][3];
	            	$activeTertiary = $functions[$row][4];
	            }
	           	if ($user->inferior == $functions[$row][0])
	            {
	            	$hexInferior = $functions[$row][1];
	            	$nameInferior = $functions[$row][2];
	            	$passiveInferior = $functions[$row][3];
	            	$activeInferior = $functions[$row][4];
	            }	            	            
	        }                    
?>


var paper = Raphael(100, 100, 500, 500);
var c = paper.rect(20, 20, 200, 100);
	c.attr("fill", "<?=$hexDominant;?>");
	c.attr("stroke", "<?=$hexDominant;?>")
var d = paper.rect(20, 120, 200, 10);
	d.attr("fill", "<?=$hexInferior;?>");
	d.attr("stroke", "<?=$hexInferior;?>")
var e = paper.rect(20, 130, 200, 30);
	e.attr("fill", "<?=$hexTertiary;?>");
	e.attr("stroke", "<?=$hexTertiary;?>")
var f = paper.rect(20, 160, 200, 60);
	f.attr("fill", "<?=$hexAuxiliary;?>");
	f.attr("stroke", "<?=$hexAuxiliary;?>")
</script>
</div>

<div id="info"><br/>
	<h1><?=$user->username;?> (<?=$user->typology;?>):</h1><br/>
	<table id="cog_table">
	<tr>
	<td class="dom"><h2 class="<?=$user->dominant;?>"><?=$user->dominant;?></h2></td>
	<td class="dom"><h3><?=$nameDominant;?><br/>(Dominant Function)</h3></td></tr><tr>
	<td class="aux"><h2 class="<?=$user->auxiliary;?>"><?=$user->auxiliary;?></h2></td>
	<td class="aux"><h3><?=$nameAuxiliary;?><br/>(Auxiliary Function)</h3></td></tr><tr>
	<td class="ter"><h2 class="<?=$user->tertiary;?>"><?=$user->tertiary;?></h2></td>
	<td class="ter"><h3><?=$nameTertiary;?><br/>(Tertiary Function)</h3></td></tr><tr>
	<td class="inf"><h2 class="<?=$user->inferior;?>"><?=$user->inferior;?></h2></td>
	<td class="inf"><h3><?=$nameInferior;?><br/>(Inferior Function)</h3></td></tr></table>
</div>


<script>

var clickDom = "<div><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$passiveDominant;?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$activeDominant;?>' + "</div>";
var clickAux = "<div><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$passiveAuxiliary;?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$activeAuxiliary;?>' + "</div>";
var clickTer = "<div><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$passiveTertiary;?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$activeTertiary;?>' + "</div>";
var clickInf = "<div><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$passiveInferior;?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$activeInferior;?>' + "</div>";

$(".dom").on('click', function() {
  $('#clickFunction').html(clickDom);
});
$(".aux").on('click', function() {
  $('#clickFunction').html(clickAux);
});
$(".ter").on('click', function() {
  $('#clickFunction').html(clickTer);
});
$(".inf").on('click', function() {
  $('#clickFunction').html(clickInf);
});
</script>

<div id="clickFunction">
<br/>
<h3>&larr; Please click each function to learn more about your personal cognitive processes.</h3>
<p>Each cognitive process can be engaged in a basic, unsophisticated way reflecting our natural human capabilities. Almost everyone can engage each process in some basic way. Beyond this, you will engage some cognitive processes in a more sophisticated, developed way. This is usually the result of innate preference plus lifelong growth and practice, which equals development.</p>
<p>Source: <a href="http://www.keys2cognition.com/cgjung.htm">Keys2Cognition</a></p>
</div>


<div id="border">
</div>












