<?php

$expires = (new DateTime())->modify("+20 seconds")->format('r');

header('Cache-Control: public');
header("Expires: $expires", false);

echo <<<body
<html>
<body>
<p>Page cached and revalidated after 20 seconds.</p>

<p><a href="4-expires-header.php">Visit this page again.</a></p>
</body>
</html>
body;

