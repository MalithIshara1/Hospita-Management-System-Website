<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">



            <div class="container" align="center" style="padding-top:100px ">

                @if (@session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{ session()->get('message') }}


                </div>

                @endif

                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black; " name="name" placeholder="Write the name" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Phone NO</label>
                        <input type="number" style="color:black; " name="number" placeholder="Write the number" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Speciality</label>
                        <select name="speciality" id="" style="color:black ;width: 200px">
                            <option value="">--select--</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="Eyes">Eyes</option>
                            <option value="Body">Body</option>
                        </select>
                    </div>

                    <div style="padding: 15px">
                        <label>Room NO</label>
                        <input type="text" style="color:black; " name="room" placeholder="Write the Room No" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Doctor Image</label>
                        <input type="file"  " name="file" required>
                    </div>


                    <div style="padding: 15px">

                        <input type="submit"  " name="file" class="btn btn-success">
                    </div>

                </form>
            </div>

        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->

      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>


