<!DOCTYPE html>
<html>
<head>
<style>
div {
  border: 1px solid gray;
  /* padding: 8px; */
}

.button-center {
  text-align: center;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeToggle(400);
    $("#div2").fadeToggle(800);
    $("#div3").fadeToggle(1200);
    $("#div4").fadeToggle(1600);
    $("#div5").fadeToggle(2000);
  });
});
</script>
</head>
<body>
<div> <h4>Menampilkan deret angka 1 sd 5 secara bergantian Menggunakan Fade in & Fade Out Jquery</h4></div>
<div class="button-center">
<br><br>
<button class="bnt btn-info">Urutkan</button><br><br>
<div>
<div id="div1"> 1 </div>
<br>
<div id="div2"> 2</div>
<br>
<div id="div3"> 3 </div>
<br>
<div id="div4"> 4</div>
<br>
<div id="div5"> 5</div>

</body>
</html>