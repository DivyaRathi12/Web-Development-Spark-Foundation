<?php
    //header('Content-Type: text/event-stream');
    // recommended to prevent caching of event data.
    header('Cache-Control: no-cache'); 

    //long_process.php
    for($i=1;$i<=3;$i++){
        //do something
        echo '<br>processing...';

        ob_flush();
        flush();
        sleep(1);
    }

    echo 'CLOSE', 'Process complete';
    ?>