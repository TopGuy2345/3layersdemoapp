<?php ?>


<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<style>
.center-div
{
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 200px;
  height: 200px;

  border-radius: 3px;
}


.btn {
    margin: 35px;
</style>
</head>
<body>
  <div class="container">
  <h2 style="margin: 100px"> Select the query you like to display</h2>
    <div class="col-lg-4 col-lg-offset-4 center-div">

     <div class="form-group row">
 <div class="form-group">
<form action="/Buinesslayer.php" method="post" >

  <select name="Selection" class="form-control">
  <option value="1">Customer data</option>
  <option value="2">Customer num</option>
</select>

  <input type="submit" value="Submit" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
</body>
</html>
