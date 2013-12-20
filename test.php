<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php

    $INFP = 'INFP';
    $cognitive = array
        (

            array("INTJ","Ni","Te","Fi","Se"),
            array("INFJ","Ni","Fe","Ti","Se"),
            array("ISTJ","Si","Te","Fi","Ne"),
            array("ISFJ","Si","Fe","Ti","Ne"),
            array("INTP","Ti","Ne","Si","Fe"),
            array("INFP","Fi","Ne","Si","Te"),
            array("ISTP","Ti","Se","Ni","Fe"),
            array("ISFP","Fi","Se","Ni","Te"),
            array("ENTP","Ne","Ti","Fe","Si"),
            array("ENFP","Ne","Fi","Te","Si"),
            array("ESTP","Se","Ti","Fe","Ni"),
            array("ESFP","Se","Fi","Te","Ni"),
            array("ENTJ","Te","Ni","Se","Fi"),
            array("ENFJ","Fe","Ni","Se","Ti"),
            array("ESTJ","Te","Si","Ne","Fi"),
            array("ESFJ","Fe","Si","Ne","Ti"),
        );

    for ($row = 0; $row < 16; $row++)
    {
        if ($INFP == $cognitive[$row][0])
        {
            echo $cognitive[$row][1].$cognitive[$row][2].$cognitive[$row][3].$cognitive[$row][4];
        }
    }


?>
</body>
</html>