<?php

header('Cache-Control: max-age=10, public');
header("ETag: some-value", false);

echo <<<body
<html>
<body>
<p>Page cached and revalidated with an ETag.</p>

<p><a href="5-etag-header.php">Visit this page again.</a></p>
</body>
</html>
body;
