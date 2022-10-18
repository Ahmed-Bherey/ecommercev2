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
                            <form class="form-horizontal " action="{{ route('mainDepartments.store') }} "
                                  method="post">
                                @csrf
                                <div class="card-body">



                                    <div class="row clearfix">
                                        <div class="col-sm-6 mb-3 mt-3">
                                            <div class="form-floating input-group">

                                                <input type="text" class="form-control" placeholder="اسم القسم"
                                                       name="name"
                                                       id="">
                                                <label for="ar-name" class="col-sm-4 col-form-label"> الاسم</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6 mb-3 mt-3">
                                            <div class="form-floating input-group">

                                                <input type="file" class="form-control" placeholder="صورة للقسم"
                                                       name="photo"
                                                       id="" required>
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

                    {{-- row --}}
                    {{-- start card --}}
                    <div class="row mt-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example1"
                                                       class="table table-bordered table-striped dataTable dtr-inline"
                                                       aria-describedby="example1_info">
                                                    <thead>
                                                    <tr>
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="example1" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="Rendering engine: activate to sort column descending">
                                                            #
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Browser: activate to sort column ascending">
                                                            الاسم
                                                        </th>

                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Engine version: activate to sort column ascending">
                                                            عمليات
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($mainDepartments as $key=> $mainDepartment)
                                                        <tr class="odd">
                                                            <td>{{ $key=+1 }}</td>
                                                            <td>{{ $mainDepartment->name}}</td>

                                                            <td>
                                                                <a type="submit" class="btn bg-success"
                                                                   href="{{ route('mainDepartments.edit', $mainDepartment->id) }}">
                                                                    <i class="far fa-edit " aria-hidden="true"></i>
                                                                </a>
                                                                <a type="submit" class="btn bg-danger"
                                                                   href="{{ route('mainDepartments.delete', $mainDepartment->id) }}"
                                                                   onclick="return confirm('Are you sure?')">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}


                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
