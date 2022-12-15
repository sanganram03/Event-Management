
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
<div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Anniversary</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <tbody>
            <a href="{{ url('api/anniversarysadd') }}" class="btn btn-success">Add New</a>

            <tr>

                <td>
                    <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">S.No</p>
                    </div>
                </td>
                <td class="w-30">
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Name</p>
                    </div>
                  </td>
                  <td class="w-30">
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Anniversary</p>
                    </div>
                  </td>
                  <td class="w-30">
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Date</p>
                    </div>
                  </td>
                  <td class="w-30">
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Email</p>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Phone</p>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Address</p>
                    </div>
                  </td>

                  <td class="align-middle text-sm">
                    <div class="col text-center">
                      <p class="text-xs font-weight-bold mb-0">Action</p>
                    </div>
                  </td>
            </tr>
            @foreach ($anniversary as $anniversary)
            <tr>
              <td>
                <div class="d-flex px-2 py-1 align-items-center">

                  <div class="ms-4">
                    <h6 class="text-sm mb-0">{{$anniversary->id}}</h6>
                  </div>
                </div>
              </td>
              <td class="w-30">
                <div class="text-center">
                  <h6 class="text-sm mb-0">{{$anniversary->name}}</h6>
                </div>
              </td>
              <td class="w-30">
                <div class="text-center">
                  <h6 class="text-sm mb-0">{{$anniversary->anniversary}}</h6>
                </div>
              </td>
              <td class="w-30">
                <div class="text-center">
                  <h6 class="text-sm mb-0">{{$anniversary->dateofanni}}</h6>
                </div>
              </td>
              <td class="align-middle text-sm w-30">
                <div class="col text-center">
                  <h6 class="text-sm mb-0">{{$anniversary->phone}}</h6>
                </div>
              </td>
              <td class="align-middle text-sm w-30">
                <div class="col text-center">
                  <h6 class="text-sm mb-0">{{$anniversary->email}}</h6>
                </div>
              </td>
              <td class="align-middle text-sm w-30">
                <div class="col text-center">
                  <h6 class="text-sm mb-0">{{$anniversary->address}}</h6>
                </div>
              </td>

              <td class="align-middle text-sm w-30">
                <div class="col text-center">
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="{{url('api/viewanni',$anniversary->id)}}" class="btn btn-success"  onclick="return confirm('are you sure to View this Anniversary?')">View</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{url('api/editanni',$anniversary->id)}}" class="btn btn-primary"  onclick="return confirm('are you sure to Edit this Anniversary?')">Edit</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="{{url('api/deleteanni',$anniversary->id)}}" class="btn btn-danger"  onclick="return confirm('are you sure to Delete this Anniversary?')">Delete</a>
                        </li>
                    </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


      @include('admin.footer')
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    @include('admin.configure')
  <!--   Core JS Files   -->
  @include('admin.script')
</body>

</html>
