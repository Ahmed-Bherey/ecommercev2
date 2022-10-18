@extends('admin.layouts.includes.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- row --}}
                <div class="row ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header header-bg">
                                <h3 class="card-title  header-title"><i class="fas fa-plus  "></i> الاقسام الرئيسية</h3>
                            </div>
                            <!-- /.card-header -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <!-- form start -->
                            <form class="form-horizontal " action="{{ route('mainDepartments.update',$mainDepartment->id) }} "
                                  method="post">
                                @csrf
                                <div class="card-body">



                                    <div class="row clearfix">
                                        <div class="col-sm-6 mb-3 mt-3">
                                            <div class="form-floating input-group">
                                                <span class="input-group-text" id="">
                                                    <i class="fa-solid fa-user"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="اسم القسم"
                                                       name="name"
                                                       id="" value="{{$mainDepartment->name}}">
                                                <label for="ar-name" class="col-sm-4 col-form-label"> الاسم</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6 mb-3 mt-3">
                                            <div class="form-floating input-group">

                                                <input type="file" class="form-control" placeholder="صورة للقسم"
                                                       name="photo"
                                                       id="">
                                                <label for="ar-name" class="col-sm-4 col-form-label"> صورة القسم</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="reset" class="btn  bg-secondary float-start ml-3"><i
                                            class="fa-solid fa-arrows-rotate"></i></button>
                                    <button type="submit" class="btn bg-success-2 float-start "><i
                                            class="fa fa-check text-light" aria-hidden="true"></i></button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>



                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
