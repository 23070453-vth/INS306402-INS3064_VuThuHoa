<?php
function add(int $a, int $b): int {
    return $a + $b;
}

// Test
$result = add(3, 4);
// không echo trong function
echo $result;
?>
