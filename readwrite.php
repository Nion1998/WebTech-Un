
<html>
<body>

<?php
$myfile = fopen("mycv.txt", "w") or die("Unable to open file!");
$txt = "MY Home Town :";
fwrite($myfile, $txt);
$txt = " Rajshahi\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php
$file = fopen("mycv.txt","r");
echo fgets($file);
fclose($file);
?>


</body>
</html>