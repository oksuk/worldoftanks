<?php
if (is_array($data)){
    echo "<h3>Користувач: {$data[0]->user->name}</h3><br>";
    echo "<h3>Твітти:</h3><br><br>";

    foreach ($data as $tweets){
        echo "<p>$tweets->text</p><br>";
    }
}
else {
    echo "<p>$data</p>";
}
