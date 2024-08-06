<?php
    echo"<center>
            <h1>PRINTING 10 EVEN NUMBERS</h1>
        </center>";

        for ($i=2; $i <= 20 ; $i+=2) { 
            echo"<P>$i</P>";
        }

    
    echo"<center>
        <h1>COUNTDOWN</h1>
    </center>";

    $countdown=10;
    while ($countdown > 0) {
        
        echo"<p>$countdown</p>";
        $countdown -=1;
    }
    echo"<h2>BLAST OFF!!</h2>";

    echo"<center>
    <h1>DAYS OF THE WEEK</h1>
</center>";

$daysOfWeek= array (
    'Monday',
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday"
);

foreach ($daysOfWeek as $key => $day) {
    echo"<P>$day</P>";
}


echo"<center>
            <h1>SKIPING MULTIPLES OF 3</h1>
        </center>";

        for ($i=2; $i <= 20 ; $i++) { 
            if ($i % 3 == 0) {
                continue;
            }
            echo"<P>$i</P>";

        }



?>