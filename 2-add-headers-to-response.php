<?php

header('foo: bar');
//header('foo2: bar2', false);

echo <<<body
<html>
<body>
<p>Some page.</p>

<p><a href="2-add-headers-to-response.php">Visit this page again.</a></p>
</body>
</html>
body;

