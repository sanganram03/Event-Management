
<!DOCTYPE html>
<html lang="en">
    <base href="/public">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
  <title>
    Matrimony Admin Panel
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="admin/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
@include('admin.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')

    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Events</h6>
            </div>
            <div class="card-body p-3">
<p>
<a href="http://192.168.1.13:8000/admin/events/create" class="btn btn-success">Add new</a>

</p>

<div class="panel panel-default">
<div class="panel-heading">
List        </div>

<div class="panel-body table-responsive">
<table class="table table-bordered table-striped   dt-select ">
<thead>
<tr>
                                <th style="text-align:center;"><input type="checkbox" id="select-all"></th>

    <th>Title</th>
    <th>Description</th>
    <th>Start time</th>
    <th>Venue</th>
    <th>&nbsp;</th>
</tr>
</thead>

<tbody>
                        <tr>
        <td colspan="8">No entries in table</td>
    </tr>
                </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@include('admin.footer')
</div>
</main>
<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
  <i class="fa fa-cog py-2"> </i>
</a>
@include('admin.configure')
@include('admin.script')
</body>

</html>
