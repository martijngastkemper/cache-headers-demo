<?php

header('Cache-Control: max-age=10, public');

$body = <<<body
<html>
<body>
<p>Page cached and revalidated with an ETag.</p>

<p><a href="6-etag-header-changing-content.php">Visit this page again.</a></p>
</body>
</html>
body;

$etag = md5($body);
header("ETag: $etag", false);

$ifNoneMatchHeader = $_SERVER['HTTP_IF_NONE_MATCH'] ?? false;

if ($ifNoneMatchHeader === $etag) {
    http_response_code(304);
} else {
    echo $body;
}
