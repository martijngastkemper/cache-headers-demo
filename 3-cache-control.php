<?php

header('Cache-Control: public');

echo <<<body
<html>
<body>
<p>Some page with Cache-Control public.</p>

<p><a href="3-cache-control.php">Visit this page again.</a></p>
</body>
</html>
body;

