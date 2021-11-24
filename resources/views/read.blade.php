<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>READ</title>
  </head>
  <body>

    <div class="container mt-4">
        <div class="row">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <div class="col-6">
                <h1>Employees Data</h1>
            </div>
            <div class="col-6">
                <a href="employees/create" class="btn btn-primary float-end">Add Employee</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <table class="table table-hover">
                <thead>
                  <tr> 
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($employee as $emp)              
                        <tr>
                            <th scope="row">{{$emp->employee_id}}</th>
                            <td>{{$emp->name}}</td>
                            <td>
                                @if ($emp->gender=='M')
                                    Male
                                @elseif($emp->gender=='F')
                                    Female
                                @else
                                    Other
                                @endif
                            </td>
                            <td>{{$emp->salary}}</td>
                            <td>
                                <a href="/employees/{{$emp->employee_id}}/edit" class="btn btn-primary">Edit</a>
                                <form method="post" action="/employees/{{$emp->employee_id}}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                            </form>

                            </td>
                        </tr>
                    @endforeach

                  
                </tbody>
              </table>
            </div>
        </div>
    </div>

 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    

  </body>
</html>