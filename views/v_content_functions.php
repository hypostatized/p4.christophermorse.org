<div id="top">
  <div id="nav">
    <ul>
      <li>
        <a href="/content/profile">
          Your Profile
        </a>
      </li>
      <li>
        <a href="/content/community">
          Community Statistics
        </a>
      </li>
      <li>
        <a href="/content/functions">
          Cognitive Functions
        </a>
      </li>
      <li>
        <a href="/accounts/logout">
          Sign Out
        </a>
      </li>
    </ul>
  </div>
</div>

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

?>




<div id="functionsChart">
  <br/>
  <h1>
    All Cognitive Functions
  </h1>
  <br/>
  <table id="cog_table2">
	<tr>
      <td id="aSe">
        <h2 class="Se">
          <?=$functions[0][0];?>
        </h2>
      </td>
      <td id="aNe">
        <h2 class="Ne">
          <?=$functions[1][0];?>
        </h2>
      </td>
      <td id="aTe">
        <h2 class="Te">
          <?=$functions[2][0];?>
        </h2>
      </td>
      <td id="aFe">
        <h2 class="Fe">
          <?=$functions[3][0];?>
        </h2>
      </td>
      </tr>
      <tr>
        <td id="aSi">
          <h2 class="Si">
            <?=$functions[4][0];?>
          </h2>
        </td>
        <td id="aNi">
          <h2 class="Ni">
            <?=$functions[5][0];?>
          </h2>
        </td>
        <td id="aTi">
          <h2 class="Ti">
            <?=$functions[6][0];?>
          </h2>
        </td>
        <td id="aFi">
          <h2 class="Fi">
            <?=$functions[7][0];?>
          </h2>
        </td>
        
      </tr>
      </table>
  </div>
  
  <div id="functionDesc">
    <br/>
    <h3>
      &larr; Please click each function to learn more about your personal cognitive processes.
    </h3>
    <p>
      Each cognitive process can be engaged in a basic, unsophisticated way reflecting our natural human capabilities. Almost everyone can engage each process in some basic way. Beyond this, you will engage some cognitive processes in a more sophisticated, developed way. This is usually the result of innate preference plus lifelong growth and practice, which equals development.
    </p>
    <p>
      Source: 
      <a href="http://www.keys2cognition.com/cgjung.htm">
        Keys2Cognition
      </a>
    </p>
  </div>
  
  <script>
    
    var clickSe = "<div><h1><?=$functions[0][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[0][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[0][4];?>' + "</div>";
    var clickNe = "<div><h1><?=$functions[1][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[1][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[1][4];?>' + "</div>";
    var clickTe = "<div><h1><?=$functions[2][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[2][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[2][4];?>' + "</div>";
    var clickFe = "<div><h1><?=$functions[3][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[3][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[3][4];?>' + "</div>";
    var clickSi = "<div><h1><?=$functions[4][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[4][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[4][4];?>' + "</div>";
    var clickNi = "<div><h1><?=$functions[5][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[5][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[5][4];?>' + "</div>";
    var clickTi = "<div><h1><?=$functions[6][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[6][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[6][4];?>' + "</div>";
    var clickFi = "<div><h1><?=$functions[7][2];?></h1><h2>Basic (Passive) Use</h2><br/><p>" + '<?=$functions[7][3];?>'  + "</p><br/><h2>Developed (Active) Use</h2><br/>" + '<?=$functions[7][4];?>' + "</div>";
    
    
    $("#aSe").on('click', function() {
      $('#functionDesc').html(clickSe);
    }
                );
    $("#aNe").on('click', function() {
      $('#functionDesc').html(clickNe);
    }
                );
    $("#aTe").on('click', function() {
      $('#functionDesc').html(clickTe);
    }
                );
    $("#aFe").on('click', function() {
      $('#functionDesc').html(clickFe);
    }
                );
    $("#aSi").on('click', function() {
      $('#functionDesc').html(clickSi);
    }
                );
    $("#aNi").on('click', function() {
      $('#functionDesc').html(clickNi);
    }
                );
    $("#aTi").on('click', function() {
      $('#functionDesc').html(clickTi);
    }
                );
    $("#aFi").on('click', function() {
      $('#functionDesc').html(clickFi);
    }
                );
    
    
  </script>
  
  <div id="border">
  </div>