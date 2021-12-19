
        <main class="main">
            <?php
            echo 'Sardor';
            echo "<br>";

            
            ?>
            <br>
            <?
            $name = "Sardor";
            echo 'Hello ' . $name;

            ?>
            <br>
            <?
            
            $num = 4;
            if($num > 6) {
                echo "$num > 6";
            } elseif($num <4) {
                echo "$num < 4";
            }else {
                echo "404 ERROR";
            }
            
            $asd = 'Hello';
            $hash = password_hash($asd, PASSWORD_DEFAULT);
            echo '<br>' . htmlspecialchars($asd) . '<br>'
            
            ?>
        </main>