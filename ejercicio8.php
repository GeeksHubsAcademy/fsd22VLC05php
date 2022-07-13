<?php
for ($i = 1; $i <= 10; $i++) {
    if($i === 2) {
        continue;
    }

    if($i === 7) {
        break;
    }

    echo $i;
}
?>