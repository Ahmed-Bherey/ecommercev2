@extends('admin.layouts.includes.master')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/qma1617ni7kv2ktd4fbrwcucqbxdwxvoadoibp2zo59ssdql/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
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
                                <h3 class="card-title  header-title"><i class="fas fa-plus  "></i>تعديل المنتج</h3>
                            </div>
                            <!-- /.card-header -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <!-- form start -->
                            <form class="form-horizontal " action="{{ route('products.update',$product->id) }} "
                                  method="post">
                                @csrf
                                <div class="card-body">


                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating">
                                            <select type="text" class="form-control" id="mainDepartment_id"
                                                    name="mainDepartment_id" required>
                                                <option value="">اختر القسم الرئيسي</option>
                                                @foreach($mainDepartments as $mainDepartment)
                                                    <option value="{{$mainDepartment->id}}" @if($product->mainDepartment_id == $mainDepartment->id) selected @endif>{{$mainDepartment->name}} </option>

                                                @endforeach
                                            </select>
                                            <label for="type" class="col-form-label">اختر القسم الرئيسي</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating">
                                            <select required class="form-control " name="subDepartment_id"
                                                    id="subDepartment_id">
                                                <option
                                                    value="{{$product->subDepartment_id}}">{{$product->sub_departments->name}}</option>

                                            </select>
                                            <label for="type" class="col-form-label">اختر القسم الفرعي</label>
                                        </div>

                                        <div class="col-md-4 col-sm-6 form-floating ">
                                            <input class="form-control" readonly id="note" placeholder="سبب الغياب ..."
                                                   name="Product_Name" value="{{$product->Product_Name}}">
                                            <label for="note" class="col-form-label ">Product_Name</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Product_NameAr">{{$product->Product_Name}}</textarea>
                                            <label for="note" class="col-form-label ">Product_Name_ar</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="editor"
                                                  name="Long_Description">{{$product->Long_Description}}</textarea>
                                            <label for="note" class="col-form-label ">Long_Description</label>
                                        </div>
                                       <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="editor2"
                                                  name="Short_Description">{{$product->Short_Description}}</textarea>
                                            <label for="note" class="col-form-label ">Short_Description</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Supplier_Source">{{$product->Supplier_Source}}</textarea>
                                            <label for="note" class="col-form-label ">Supplier_Source</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Variation_Name1">{{$product->Variation_Name1}}</textarea>
                                            <label for="note" class="col-form-label ">Variation Name1</label>
                                        </div>
                                       <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Option_for_Variation1">{{$product->Option_for_Variation1}}</textarea>
                                            <label for="note" class="col-form-label ">Option_for_Variation1</label>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Variation_Name2">{{$product->Variation_Name2}}</textarea>
                                            <label for="note" class="col-form-label ">Variation_Name2</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Option_for_Variation2">{{$product->Option_for_Variation2}}</textarea>
                                            <label for="note" class="col-form-label ">Option_for_Variation2</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Variation_Name3">{{$product->Variation_Name3}}</textarea>
                                            <label for="note" class="col-form-label ">Variation_Name3</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Option_for_Variation3">{{$product->Option_for_Variation3}}</textarea>
                                            <label for="note" class="col-form-label ">Option_for_Variation3</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Price">{{$product->Price}}</textarea>
                                            <label for="note" class="col-form-label ">Price</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Currency">{{$product->Currency}}</textarea>
                                            <label for="note" class="col-form-label ">Currency</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Stock">{{$product->Stock}}</textarea>
                                            <label for="note" class="col-form-label ">Stock</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="SKU">{{$product->SKU}}</textarea>
                                            <label for="note" class="col-form-label ">SKU</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Weight">{{$product->Weight}}</textarea>
                                            <label for="note" class="col-form-label ">Weight</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Length">{{$product->Length}}</textarea>
                                            <label for="note" class="col-form-label ">Length</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Width">{{$product->Width}}</textarea>
                                            <label for="note" class="col-form-label ">Width</label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 form-floating ">
                                        <textarea class="form-control" rows="5" style=" height: auto;" id="note"
                                                  name="Height">{{$product->Height}}</textarea>
                                            <label for="note" class="col-form-label ">Height</label>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                        <input type="text" class="form-control" id="note"
                                                  name="Item_image1" value="{{$product->Item_image1}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image1</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                        <img src="{{$product->Item_image1}}" width="200"  height="200">
                                        </div>
                                         <div class="col-md-2 col-sm-6 form-floating ">
                                        <input type="text" class="form-control" id="note"
                                                  name="Item_image2" value="{{$product->Item_image2}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image2</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                        <img src="{{$product->Item_image2}}" width="200"  height="200">
                                        </div>
                                         <div class="col-md-2 col-sm-6 form-floating ">
                                        <input type="text" class="form-control" id="note"
                                                  name="Item_image3" value="{{$product->Item_image3}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image3</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                        <img src="{{$product->Item_image3}}" width="200"  height="200">
                                        </div>


                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <input type="text" class="form-control" id="note"
                                                   name="Item_image4" value="{{$product->Item_image4}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image4</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <img src="{{$product->Item_image4}}" width="200"  height="200">
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <input type="text" class="form-control" id="note"
                                                   name="Item_image5" value="{{$product->Item_image5}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image5</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <img src="{{$product->Item_image5}}" width="200"  height="200">
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <input type="text" class="form-control" id="note"
                                                   name="Item_image6" value="{{$product->Item_image6}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image6</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <img src="{{$product->Item_image6}}" width="200"  height="200">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <input type="text" class="form-control" id="note"
                                                   name="Item_image7" value="{{$product->Item_image7}}" accept="image/*">
                                            <label for="note" class="col-form-label ">Item_image7</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <img src="{{$product->Item_image7}}" width="200"  height="200">
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <input type="text" class="form-control" id="note" accept="image/*"
                                                   name="Item_image8" value="{{$product->Item_image8}}">
                                            <label for="note" class="col-form-label ">Item_image8</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <img src="{{$product->Item_image8}}" width="200"  height="200">
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <input type="text" class="form-control" id="note" accept="image/*"
                                                   name="Item_image9" value="{{$product->Item_image9}}">
                                            <label for="note" class="col-form-label ">Item_image9</label>
                                        </div>
                                        <div class="col-md-2 col-sm-6 form-floating ">
                                            <img src="{{$product->Item_image9}}" width="200"  height="200">
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('select[name="mainDepartment_id"]').on('change', function () {
                var stateID = $(this).val();
                var csrf = $('meta[name="csrf-token"]').attr('content');

                var route = '{{route('products.mainDepartment.subDepartment.ajax',['id' => ':id' ])}}';
                route = route.replace(':id', stateID);
                if (stateID) {
                    $.ajax({
                        beforeSend: function (x) {
                            return x.setRequestHeader('X-CSRF-TOKEN', csrf);
                        },
                        url: route,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#subDepartment_id').empty();
                            $.each(data, function (key, value) {
                                $('#subDepartment_id').append($('<option>', {
                                    value: value.id,
                                    text: value.name
                                }));
                            });
                            $('#subDepartment_id').trigger('change');

                        }
                    });
                } else {
                    $('select[name="subDepartment_id"]').empty();
                }
            });
        });
    </script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 h3 bold italic fontselect fontsizeselect lineheight strikethrough blockquote bullist numlist backcolor | undo redo | styleselect |   link image media | ',
            menubar: true,
        });

    </script>
    <script>
        tinymce.init({
            selector: 'textarea#editor2',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 h3 bold italic fontselect fontsizeselect lineheight strikethrough blockquote bullist numlist backcolor | undo redo | styleselect |   link image media | ',
            menubar: true,
        });

    </script>
@endsection
