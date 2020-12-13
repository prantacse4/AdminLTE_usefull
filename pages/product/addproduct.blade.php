@extends('admin.layouts.productlayout')

@section('pagename')
    Product
@endsection

@section('extracsscdn')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('productsidebar')
@include('admin.sidebar.productsidebar')
@endsection


@section('admincontent')





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Product</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.product') }}">Product</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->




                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->



                                <div class="container-fluid">
                                    <!-- main body start from here -->

                                    <!-- Horizontal Form -->
                                        <div class="card card-info ">
                                        <div class="card-header">
                                            <h3 class="card-title">Product Information</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form id="product" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                            <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-6">
                                                <input id="pro_name" type="text" name="pro_name" class="form-control" placeholder="Enter Product Name" required="">
                                                </div><p id="error_pro_name" style="margin-top: 5px; color: red; display: none;"></p>
                                            </div>



                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Product Code</label>
                                                <div class="col-sm-6">
                                                <input id="pro_code" type="text" name="pro_code" class="form-control" placeholder="Product code" required="">
                                                </div><p id="error_pro_code" style="margin-top: 5px; color: red; display: none;"></p>
                                            </div>



                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                                                            <option value="" selected="">Select Category</option>
                                                            <option value="22">Smartphone</option>
                                                            <option value="23">Camera</option>
                                                            <option value="24">Audio Music</option>
                                                            <option value="25">Mobile Lens</option>
                                                            <option value="26">Smart Home</option>
                                                            <option value="27">Bike and Car</option>
                                                        </select>
                                                    </div>


                                                </div>
                                            </div>




                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Company Name</label>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <select class="form-control select2 select2-info"
                                                        data-dropdown-css-class="select2-info" style="width: 100%;">
                                                        <option value="" selected="">Select Company</option>
                                                            <option value="4">Samsung</option>
                                                            <option value="5">Nokia</option>
                                                            <option value="6">Canon</option>
                                                            <option value="7">Nikon</option>
                                                            <option value="8">Awei</option>
                                                            <option value="9">Apexel</option>
                                                            <option value="10">Apple</option>
                                                            <option value="11">Hyndai</option>
                                                            <option value="12">Tata</option>
                                                            <option value="13">New Company</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>




                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity Type</label>

                                                <div class="col-sm-6">


                                                    <div class="form-group">
                                                        <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
                                                            <option selected="selected">Kg</option>
                                                            <option>Piece</option>
                                                        </select>
                                                    </div>



                                                </div>
                                            </div>





                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-6">
                                                <input id="pro_qty" type="number" name="pro_qty" class="form-control" placeholder="Quantity" required="">
                                                </div><p id="error_pro_qty" style="margin-top: 5px; color: red; display: none;"></p>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Purchasing Price</label>
                                                <div class="col-sm-6">
                                                <input type="text" name="pro_pprice" class="form-control" placeholder="Total price" required="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">MRP Price</label>
                                                <div class="col-sm-6">
                                                <input type="text" name="pro_mrp" class="form-control" placeholder="MRP price" required="">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Wholesale Price</label>
                                                <div class="col-sm-6">
                                                <input type="text" name="pro_wholesale" class="form-control" placeholder="Wholesale price" required="">
                                                </div>
                                            </div>







                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Location</label>
                                                <div class="col-sm-6">
                                                <input type="text" name="pro_location" class="form-control" placeholder="Location" required="">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-6">
                                                <input type="text" name="pro_notes" class="form-control" placeholder="Description about product" required="">
                                                </div>
                                            </div>




                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-4">
                                                <button type="submit" name="submit2" class="btn btn-success btn-2">Submit</button>
                                                <button type="reset" class="btn btn-danger btn-2">Reset</button>
                                                <a class="btn btn-info " href="{{ route('admin.product') }}">Go Back</a>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </form>
                                        </div>
                                        <!-- /.card -->


                                </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->















        </div>



        @endsection



@section('extrajscdn')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
            //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>

@endsection




