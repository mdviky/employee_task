<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Employee Task
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body class="">

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-normal">
                Admin
            </a>
        </div>
        <div class="sidebar-wrapper">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
        </div>
    </div>
    <div class="main-panel">
        <div class="content" style="margin-top: 0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        
<!--                             <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong> {{ Session::get('message') }}</strong>
                            </div> -->
                        
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Employees</h4>
                                <p class="card-category"> List</p>

                            </div>
                            <div class="card-body">
                            @if(empty($check_exists))
                                {{__('No records')}}
                            @else
                            

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                            <th>
                                                S.No.
                                            </th>
                                            <th>
                                                First Name
                                            </th>
                                            <th>
                                                Last Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Gender
                                            </th>
                                            <th>
                                                Mobile
                                            </th>
                                            <th>Date Updated</th>

                                            <th>
                                                Edit
                                            </th>
                                            <th>Delete</th>
                                            </thead>
                                            <tbody>
                                 {{ $i }}
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $employee->fname }}</td>
                                                    <td>{{ $employee->lname }}</td>
                                                    <td>{{ $employee->email }}</td>
                                                    <td>{{ $employee->gender }}</td>
                                                    <td>{{ $employee->mobile }}</td>
                                                    <td>{{ date_format($employee->updated_at, 'jS M Y') }}</td>
                                                    <td>
                                                        <a href="{{ route('employees.edit', $employee->id) }}">
                                                            <i class="fas fa-edit  fa-lg"></i>

                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" id="delFrm">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="javascript:void(0)" onclick="triggerSub()">
                                                                <i class="fas fa-trash fa-lg text-danger"></i>
                                                            </a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $employees->links() }}
                                    </div>

                            @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

            </div>
        </footer>
    </div>
</div>

<!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>
<script src="js/core/popper.min.js"></script>
<script src="js/core/bootstrap-material-design.min.js"></script>
<script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="js/plugins/bootstrap-selectpicker.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="js/plugins/jasny-bootstrap.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="js/plugins/arrive.min.js"></script>

<script>
    function triggerSub() {
        if(confirm('Delete ?')) document.getElementById("delFrm").submit();
    }
</script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

</script>
</body>

</html>