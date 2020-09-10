<!php
session_start();
session_destroy();
echo 'You have benn logged out. <a href="/index.php">Go back</a>';