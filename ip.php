
<?php
$REMOTE_ADDR = getenv('REMOTE_ADDR');
$body_content="$REMOTE_ADDR";
$file_name="file.txt";
$fp = fopen ($file_name, "w");
fwrite ($fp,$body_content);
fclose ($fp);
?>