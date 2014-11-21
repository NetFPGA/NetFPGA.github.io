<?php
function toAbsoluteURL($relative_url, $base) {
    if (!strpos($relative_url, '://'))
        return $base.'/'.$relative_url;
    else
        return $relative_url;
}
?>
