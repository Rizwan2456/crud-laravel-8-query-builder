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
        <form class="row g-3" action="/employee" method="post">
          @csrf
          <div class="col-12">
            <label class="form-label">Employee Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Employee Name" autofocus>
          </div>
         
          <div class="col-md-12">
            <label class="form-label">Salary:</label>
            <input type="Number" class="form-control" name="salary" placeholder="eg.90000">
          </div>
          <div class="col-md-12">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender">
              <option value="M" selected>Male</option>
              <option value="F">Female</option>
              <option value="O">Other</option>
            </select>
          </div>
       
          <div class="col-12">
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
          </div>
        </form>
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    

  </body>
</html>