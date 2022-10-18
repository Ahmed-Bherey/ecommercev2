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
                            <form class="form-horizontal " action="{{ route('subDepartments.update',$subDepartment->id) }} "
                                  method="post">
                                @csrf
                                <div class="card-body">


                                    <div class="col-sm-4 form-floating">
                                        <select type="text" class="form-control" id="date" name="mainDepartment_id" required>
                                            <option value="">اختر القسم الرئيسي</option>
                                            @foreach($mainDepartments as $mainDepartment)
                                                <option value="{{$mainDepartment->id}}" @if($subDepartment->mainDepartment_id == $mainDepartment->id )selected @endif>{{$mainDepartment->name}} </option>
                                            @endforeach
                                        </select>
                                        <label for="namestore" class="col-form-label n_ro3ya"> اختر القسم الرئيسي
                                        </label>
                                    </div>

                                    <div class="col-sm-4 form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="الاسم" name="name" value="{{$subDepartment->name}}"
                                               required>
                                        <label for="store" class="col-form-label"> القسم الفرعي </label>
                                    </div>
                                    <div class="col-sm-4 form-floating mb-3">
                                        <input type="file" class="form-control" placeholder="صورة القسم" name="photo"
                                               >
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



                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
