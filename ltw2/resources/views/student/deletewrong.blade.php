
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://localhost:82/ltw2/public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="http://localhost:82/ltw2/public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="http://localhost:82/ltw2/public/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
  <h2>Sai ID, Vui lòng thêm mới!</h2>
  <h2 class="text-center">Insert Student</h2>
  <form action="http://localhost:82/ltw2/public/insertstudent" method="Post" >
    <input type="hidden" name="_token" value= "53mH38j76oX6xW5DupVvGEkUAaAVMnwJkD0rW6pt">
    <div class="form-group">
      <label for="usr">Student Name:</label>
      <input type="text" class="form-control" value="" name="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Student Email:</label>
      <input type="email" class="form-control"  name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Student Phone:</label>
      <input type="phone" class="form-control"  name="phone">
    </div>
    <div class="form-group">
      <label for="pwd">Student Info:</label>
      <textarea class="form-control" name="info" ></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success form-control" value="Submit" name="btnUpdate">
    </div>
  </form>
</div>

