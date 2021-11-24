<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Form</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto mt-5">
        <form class="row g-3" action="{{url('/employees',$employee->employee_id)}}" method="post">
          @csrf
          @method('put')
          <div class="col-12">
              <input type="hidden" name="id" value="{{$employee->employee_id}}">
            <label class="form-label">Employee Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Employee Name" value="{{$employee->name}}" autofocus>
          </div>
         
          <div class="col-md-12">
            <label class="form-label">Salary:</label>
            <input type="Number" class="form-control" name="salary" value="{{$employee->salary}}" placeholder="eg.90000">
          </div>
          <div class="col-md-12">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" value="f">
              <option value="M" @if($employee->gender=='M') {{'selected'}} @endif>Male</option>
              <option value="F" @if($employee->gender=='F') {{'selected'}} @endif>Female</option>
              <option value="O" @if($employee->gender=='O') {{'selected'}} @endif>Other</option>
            </select>
          </div>
       
          <div class="col-12">
            <input type="submit" class="btn btn-primary" name="submit" value="Edit">
          </div>
        </form>
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    

  </body>
</html>