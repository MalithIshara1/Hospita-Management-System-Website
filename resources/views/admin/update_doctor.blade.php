<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <style>
        label {
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
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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



            <div class="container" style="padding: 100px" align="center">

                @if (@session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>

                    {{ session()->get('message') }}


                </div>

                @endif

                <form action="{{ url('editedoctor',$data->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 20px;">
                        <label for="">Doctor</label>
                        <input type="text" style="color: black"; name="name" value="{{ $data->name }}">
                    </div>

                    <div style="padding: 20px;">
                        <label for="">Doctor Phone No</label>
                        <input type="number" style="color: black"; name="phone" value="{{ $data->phone }}">
                    </div>

                    <div style="padding: 20px;">
                        <label for="">Doctor Speciality</label>
                        <input type="text" style="color: black"; name="specialty" value="{{ $data->specialty }}">
                    </div>

                    <div style="padding: 20px;">
                        <label for="">Doctor Room No</label>
                        <input type="text" style="color: black"; name="room" value="{{ $data->room }}">
                    </div>

                    <div style="padding: 20px;">
                        <label for="">Doctor Image</label>
                        <img height="150px" width="150px" src="doctorimage/{{ $data->image }}" alt="">
                    </div>

                    <div style="padding: 20px;">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 20px;">

                        <input type="submit"class='btn btn-primary'>
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
