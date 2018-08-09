<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Kaffekapslen</title>
</head>
<body>
<header><img src="images/header.jpg" alt=""></header>
<section class="container">


<label for=""><select class="" name=""><option disabled selected>Styrke</option></select></label>
<label for=""><select class="" name=""><option disabled selected>Størrelse</option></select></label>
<label for=""><select class="" name=""><option disabled selected>Kvalitet</option></select></label>
<label for=""><select class="" name=""><option disabled selected>Type</option></select></label>
<label for=""><select class="" name=""><option disabled selected>Sortering</option></select></label>
<div class="container__checkboxes">
<label><input type="checkbox"/> Økologisk</label>
<label><input type="checkbox"/> Frugtig</label>
<label><input type="checkbox"/> Mørkristet</label>

<label><input type="checkbox"/> Aromatisk Arabica</label>
<label><input type="checkbox"/> Chokolade</label>
<label><input type="checkbox"/> Lakrids</label>

<label><input type="checkbox"/> Koffeinfri</label>
<label><input type="checkbox"/> Karamel</label>
<label><input type="checkbox"/> The</label>

<!-- <input type="checkbox"> <label for="">Syrlighed</label> -->
</div>
<input type="submit" value="Søg" class="container__checkboxes__submit">


<hr>
<p id="results">Resultater:</p>

<article>

<p id="demo"></p>
<p id="description"></p>
<img src="" alt="" class="image" id="image">

</article>
</section>
<!-- <script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    }
};
xhttp.open("GET", "GoogleShoppingDK.xml", true);
xhttp.send();
</script> -->
<article class="">


<?php
$xml = simplexml_load_file("GoogleShoppingDK.xml") or die("Error: Cannot create object");
echo "<ul>n";
foreach($xml as $details) {
  $title=$details->title;
  $description=$details->description;

echo '<li><div class="title">",$title,"</div><div class="description">",$description,"</div>';
endforeach;
 echo "</ul>";




}
?>

</article>



</body>
</html>
