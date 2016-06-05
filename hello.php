<html>
    <head>
        <title>Hello PHP!</title>
    </head>
    <body>
        <p>Server variables are as follows:</p>
        <ol>
            <?php 
                foreach($_SERVER as $srvar=>$srval) {
                    echo "<li>$srvar => $srval</li>";
                }
            ?>
        </ol>
    </body>
</html>