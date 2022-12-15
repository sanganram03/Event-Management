
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
        <div class="container-fluid py-4">

            <div class="row mt-6">
<div class="col-lg-11 mb-lg-0 mb-4">
<div class="card ">
  <div class="card-header pb-0 p-3">
    <div class="d-flex justify-content-between">
      <h6 class="mb-2">Users</h6>
    </div>
  </div>
  <div class="table-responsive">
    <form action="{{url('api/adduser')}}" method="POST" enctype="multipart/form-data">
    <table class="table align-items-center ">
      <tbody>
        <tr>


            <td>
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Name</p>
                  <input type="text" name="name" required>
                </div>
              </td></tr>
              <tr>
              <td>
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Email</p>
                  <input type="email" name="email" required>
                </div>
              </td></tr>
              <tr>
              <td class="align-middle text-sm">
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Phone</p>
                  <input type="number" name="phone" minlength ="10" maxlength ="10" irequired>
                </div>
              </td></tr>
              <tr>
                <td class="">
                  <div class="">
                    <p class="text-xs font-weight-bold mb-0">Gender</p>
                    <select name="gender" required autocomplete="off">
                      <option value="">gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="transgender">Transgender</option>
                  </select>
                  </div>
                </td>
          </tr>

              <tr>
              <td class="">
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">User Type</p>
                  <select name="usertype" required autocomplete="off">
                    <option value="">User Type</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
                </select>
                </div>
              </td>
        </tr>
        <tr>
            <td>
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Password</p>
                  <input type="password" name="password" required>
                </div>
              </td></tr>
        <tr>
            <td class="">
              <div class="">
                <input type="submit" name="submit" required>
              </div>
            </td>
      </tr></tbody></table></div></div></div></div></div>

      @include('admin.footer')
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    @include('admin.configure')
  <!--   Core JS Files   -->
  @include('admin.script')
</body>
<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
</style>
</html>
