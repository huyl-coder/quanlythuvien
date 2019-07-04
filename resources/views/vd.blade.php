<html>
    <div>
        <?php
            for($i=0; $i<10; $i++){
                echo $i;
            }
            foreach($users as $user){
                echo $user->name;
            }
            $j=1;
            while($j<=10){
                echo $j;
                $j++;
            }
        ?>
    </div>
</html>