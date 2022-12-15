
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
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Events</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Edit Event</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                  </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                  <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                  </li>
                  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                      <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0">
                      <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                  </li>
                  <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                      <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                          <div class="d-flex py-1">
                            <div class="my-auto">
                              <img src="admin/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">New message</span> from Laur
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                13 minutes ago
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                          <div class="d-flex py-1">
                            <div class="my-auto">
                              <img src="admin/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">New album</span> by Travis Scott
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                1 day
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                          <div class="d-flex py-1">
                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                      <g transform="translate(453.000000, 454.000000)">
                                        <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                Payment successfully completed
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                2 days
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <div class="container-fluid py-4">

            <div class="row mt-6">
<div class="col-lg-11 mb-lg-0 mb-4">
<div class="card ">
  <div class="card-header pb-0 p-3">
    <div class="d-flex justify-content-between">
      <h6 class="mb-2">Events</h6>
    </div>
  </div>
  <div class="table-responsive">
    <form action="{{url('api/editevent',$events->id)}}" method="POST" enctype="multipart/form-data">
    <table class="table align-items-center ">
      <tbody>
        <tr>
            <td>
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Title</p>
                  <input type="text" name="title" value="{{$events->title}}" required>
                </div>
              </td></tr>
              <tr>
              <td>
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Description</p>
                  <input type="text" name="description" value="{{$events->description}}" style="height:200px"required>

                </div>
              </td></tr>
              <tr>
              <td class="align-middle text-sm">
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Start time</p>
                  <input type="datetime-local" name="start" value="{{$events->start}}" required>
                </div>
              </td></tr>
              <td class="align-middle text-sm">
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">End time</p>
                  <input type="datetime-local" name="end" value="{{$events->end}}" required>
                </div>
              </td></tr>
              <tr>
              <td class="">
                <div class="">
                  <p class="text-xs font-weight-bold mb-0">Venue</p>
                  <input type="text" name="venue" value="{{$events->venue}}" required>
                </div>
              </td>
        </tr>
        <tr>
            <td class="">
              <div class="">
                <input type="submit" name="submit" required>
              </div>
            </td>
      </tr></tbody>
</table></div></div></div></div></div>

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
input[type=datetime-local], select, textarea {
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
</style>
</html>
