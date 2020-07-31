<?php

$flatfile = 'moedit.txt';


//number of rows in the text file
$numberofrows = count(file($flatfile));



// Open and read file
$datastuff = file_get_contents($flatfile);


//$heightrows = 10000;
$heightrows = 30;
// Height of the rows adjusted for a 40-column textarea (minus the number of lines that only contain newlines) (plus 15 more rows for good measure)
//$heightrows = ($numberofrows + (intval(strlen($datastuff) / 40)) - ((intval(strlen($datastuff) / 40)) - $numberofrows) + 15);



if (isset($_POST["megatext"])) {

    if($_POST["megatext"] != ''){
        
        // Change the content, etc.
            //$datastuff = $_POST["megatext"] . "\n";        
            $datastuff = $_POST["megatext"]; 
        }
}


// Write file
file_put_contents($flatfile, $datastuff);


?>


<html>
<head>
<meta charset="UTF-8">
<title>Moedit Mega Text Editor</title>
</head>
<body>
(<?php echo ($numberofrows); ?> lines) (Textarea height is <?php echo ($heightrows); ?> rows.)<br>

<form action="" method="POST">

<p><input type="submit" name="submit" value="Save"></p>

<textarea id="megatext" class="text" cols="40" rows ="<?php echo ($heightrows); ?>" name="megatext" style="border:solid 1px"><?php echo $datastuff ?></textarea>


</form>



</form>


</body>
</html>
