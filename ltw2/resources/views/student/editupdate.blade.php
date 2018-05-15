<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
  <h2 class="text-center">Update Student</h2>
  <form action="{{ URL::action('StudentController@updateStudent') }}" method="Post" >
      <input type="hidden" name="_token" value= "{{ csrf_token() }}">
      <input type="hidden" class="form-control" value="<?php echo $dataStudentById[0]->student_id ?>" name="id">
    <div class="form-group">
      <label for="usr">Student Name:</label>
      <input type="text" class="form-control" value="<?php echo $dataStudentById[0]->student_name ?>" name="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Student Email:</label>
      <input type="email" class="form-control" value="<?php echo $dataStudentById[0]->student_email ?>"  name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Student Phone:</label>
      <input type="phone" class="form-control" value="<?php echo $dataStudentById[0]->student_phone ?>" name="phone">
    </div>
    <div class="form-group">
      <label for="pwd">Student Info:</label>
      <textarea class="form-control" name="info" ><?php echo $dataStudentById[0]->student_info ?></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-danger form-control" value="Update" name="btnUpdate">
    </div>
  </form>
</div>

</body>
</html>
