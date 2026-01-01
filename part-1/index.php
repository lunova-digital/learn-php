
<?php

// We will create a folder navigation system using scandir function
$data = scandir(__DIR__);

echo '<h2>Sub Folder Navigation System</h2>';
echo '<ul>';
foreach ($data as $item) {
    // Skip current and parent directory links
    if ($item === '.' || $item === '..') {
        continue;
    }
    // Create a link for each item
    echo '<li><a href="'.htmlspecialchars($item).'">'.htmlspecialchars($item).'</a></li>';
}
echo '</ul>';
