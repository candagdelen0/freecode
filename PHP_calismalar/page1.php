<?php

function ucgen($param)
{
    for($i=1;$i<$param;$i++)
    {
        $say=0;
        while($say<$i)
        {
            echo "*";
            $say++;
        }
        echo "<br>";
    }
}

ucgen(15);


?>