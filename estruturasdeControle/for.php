<?php
// for($i = 0; $i <= 50; $i += 5) {
//     echo $i. "<br>";
// }

echo "<select>";
for($i = date("Y"); $i >= date("Y") - 100; $i--) {
    echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>"
?>