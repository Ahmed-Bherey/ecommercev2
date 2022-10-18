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
                                <h3 class="card-title  header-title"><i class="fas fa-plus  "></i> الاقسام الفرعية</h3>
                            </div>
                            <!-- /.card-header -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <!-- form start -->
                            <form class="form-horizontal " action="{{ route('subDepartments.store') }} "
                                  method="post">
                                @csrf
                                <div class="card-body">


                                    <div class="col-sm-4 form-floating">
                                        <select type="text" class="form-control" id="date" name="mainDepartment_id" required>
                                            <option value="">اختر القسم الرئيسي</option>
                                            @foreach($mainDepartments as $mainDepartment)
                                                <option value="{{$mainDepartment->id}}">{{$mainDepartment->name}} </option>
                                            @endforeach
                                        </select>
                                        <label for="namestore" class="col-form-label n_ro3ya"> اختر القسم الرئيسي
                                        </label>
                                    </div>
                                    <div class="col-sm-4 form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="الاسم" name="name"
                                               required>
                                        <label for="store" class="col-form-label"> القسم الفرعي </label>
                                    </div>
                                 <div class="col-sm-4 form-floating mb-3">
                                        <input type="file" class="form-control" placeholder="صورة القسم" name="photo"
                                               required>
                                        <label for="store" class="col-form-label"> صورة القسم</label>
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
                                                            القسم الرئيسي
                                                        </th><th class="sorting" tabindex="0" aria-controls="example1"
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
                                                    @foreach ($subDepartments as $key=> $subDepartment)
                                                        <tr class="odd">
                                                            <td>{{ $key=+1 }}</td>
                                                            <td>{{ $subDepartment->main_departments->name}}</td>
                                                            <td>{{ $subDepartment->name}}</td>

                                                            <td>
                                                                <a type="submit" class="btn bg-success"
                                                                   href="{{ route('subDepartments.edit', $subDepartment->id) }}">
                                                                    <i class="far fa-edit " aria-hidden="true"></i>
                                                                </a>
                                                                <a type="submit" class="btn bg-danger"
                                                                   href="{{ route('subDepartments.delete', $subDepartment->id) }}"
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
