<?php 
if (!file_exists('hello_there.php')) {
    $myfile = fopen('hello_there.php', 'w');
    
    $txt = 
    "<?php\n// This is a comment\n\necho 'This is a test page!';\necho 'Exam number two!';\n\n// This is the end of a comment";
    fwrite($myfile, $txt);
    fclose($myfile);
} else {
    echo "file already exists";
}
?>