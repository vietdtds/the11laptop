 @extends('admin/Admin')
 @section('title-ad')
    {{ trans('home_ad.ql_sp') }}
@endsection
 @section('content-ad')
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ trans('home_ad.ql_sp') }}</h6>
        </div>

        <div style="margin-top: 25px; margin-bottom: 1px; margin-left: 22px">
            <table>
                <tr>
                    <button class="btn btn-outline-primary" data-toggle="modal"  data-target="#spAdd" type="button">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{ trans('home_ad.add') }}
                    </button>
                </tr>
{{--                <tr>--}}
{{--                    <button style="margin-left: 10px" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ExcelProduct"><i class="fas fa-file-excel"></i>--}}
{{--                        {{ trans('home_ad.import') }} / {{ trans('home_ad.export') }} Excel--}}
{{--                    </button>--}}
{{--                </tr>--}}
            </table>
        </div>
        <div class="card-body">
            <div class="table-responsive class-product">

                <div class="scroll-table">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: center;">
                        <tr style="vertical-align: middle !important;">
                            <th>STT</th>
                            <th>{{ trans('Ql_sp.tensp') }}</th>
                            <th>{{ trans('Ql_sp.soluong') }}</th>
                            <th>{{ trans('Ql_sp.mota') }}</th>
                            <th>{{ trans('Ql_sp.gia') }}</th>
                            <th>{{ trans('Ql_sp.giauudai') }}</th>
                            <th>{{ trans('Ql_sp.hinhanh') }}</th>
                            <th>{{ trans('Ql_sp.hieusp') }}</th>
                            <th>{{ trans('Ql_sp.new_top') }}</th>
                            <th>{{ trans('Ql_sp.sua_xoa') }}</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>{{ trans('Ql_sp.tensp') }}</th>
                            <th>{{ trans('Ql_sp.soluong') }}</th>
                            <th>{{ trans('Ql_sp.mota') }}</th>
                            <th>{{ trans('Ql_sp.gia') }}</th>
                            <th>{{ trans('Ql_sp.giauudai') }}</th>
                            <th>{{ trans('Ql_sp.hinhanh') }}</th>
                            <th>{{ trans('Ql_sp.hieusp') }}</th>
                            <th>{{ trans('Ql_sp.new_top') }}</th>
                            <th>{{ trans('Ql_sp.sua_xoa') }}</th>
                        </tr>
                    </tfoot>
                    <tbody style="text-align: center;">
                    @foreach($sanpham1 as $key => $sp)
                       <tr>
                            <td>{{$key+=1}}</td>
                            <td>
                                @if(config('app.locale') != 'vi')
                                    {{$sp->sp_en}}
                                @else
                                    {{$sp->sp_vi}}
                                @endif
                            </td>
                            <td>{{$sp->product_quantity}}</td>
                            <td class="hiden-text">
                                <p>
                                    @if(config('app.locale') != 'vi')
                                        {!! $sp->description_en !!}
                                    @else
                                        {!! $sp->description_vi !!}
                                    @endif
                                </p>
                            </td>
                            <td>{{number_format($sp->unit_price,0,',','.')}}</td>
                            <td>{{number_format($sp->promotion_price,0,',','.')}}</td>
                            <td><img src="source/image/product/{{$sp->image}}" alt="" width="100px"></td>

                            <td>{{$sp-> loai}}</td>

                            <td>
<!--                                 @if($sp->new == 1)
                                    {{"New"}}
                                @else
                                    {{"Not New"}}
                                @endif -->
                                <?php
                                   if($sp->new==1){
                                    ?>
                                    <a href="{{url('/active-sp/'.$sp->id)}}"><span class="far fa-thumbs-up"></span></a>
                                    <?php
                                     }else{
                                    ?>
                                     <a href="{{url('/unactive-sp/'.$sp->id)}}"><span style="color: #e74a3b;" class="far fa-thumbs-down"></span></a>
                                    <?php
                                   }
                                  ?>

                            </td>

                            <td style="width: 100px">
                                <!-- <a href="{{route('update_sp', $sp->id)}}"> -->
                                    <button class="btn btn-outline-primary edit" data-toggle="modal" data-target="#spUpdate_{{$sp->id}}" type="button"><i class="fas fa-pencil-alt"></i></button>
                                <!-- </a><br><br> -->
                                <!-- <a href="{{route('deletensp', $sp->id )}}"> -->
                                <button class="btn btn-outline-danger delete" data-toggle="modal" data-target="#spDel_{{$sp->id}}" type="button"><i class="fas fa-trash-alt"></i></button>
                                <!-- </a> -->
                            </td>

                            <!-- Modal Del -->
                            <div class="modal fade" id="spDel_{{$sp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Bạn muốn xóa?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Chọn "Delete" bên dưới nếu bạn đã chắc chắn muốn xóa.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ bỏ</button>

                                            <form method="" action="{{ route('deletensp', $sp->id)}}">

                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal Update-->
                            <div class="modal fade" id="spUpdate_{{$sp->id}}" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-write">
                                            <h4 class="modal-title">{{ trans('home.up_date') }}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="ti-close">&times;</i></span>
                                            </button>
                                        </div>
                                        <form action="{{route('update_sp', $sp->id)}}" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="update_product_id" value="{{$sp->id}}">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.tensp') }} Vi</label>
                                                    <input type="text" id="sp_vi_{{$sp->id}}" name="sp_vi" class="form-control" value="{{$sp->sp_vi}}" onkeyup="ChangeToSlug();"/>
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.tensp') }} En</label>
                                                    <input type="text" id="sp_en_{{$sp->id}}" name="sp_en" class="form-control" value="{{$sp->sp_en}}" />
                                                    <input type="hidden" id="slug_{{$sp->id}}" name="slug" class="form-control" value="{{$sp->product_slug}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.mota') }} vi</label>
                                                    <textarea class="form-control" id="e_descriptionvi_{{$sp->id}}" name="description_vi" rows="5" cols="33">{!! $sp->description_vi!!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.mota') }} en</label>
                                                    <textarea class="form-control" id="e_descriptionen_{{$sp->id}}" name="description_en" rows="5" cols="33">{!! $sp->description_en !!}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.soluong') }}</label>
                                                    <input type="text" id="quantity_{{$sp->id}}" name="quantity" class="form-control"  value="{{$sp->product_quantity}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.soluongdaban') }}</label>
                                                    <input type="text" id="product_soid_{{$sp->id}}" name="product_soid" class="form-control"  value="{{$sp->product_soid}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.gia') }}</label>
                                                    <input type="text" id="e_unit_price_{{$sp->id}}" name="unit_price" class="form-control"  value="{{$sp->unit_price}}" />


                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.giauudai') }}</label>
                                                    <input type="text" id="e_promotion_price_{{$sp->id}}" name="promotion_price" class="form-control"  value="{{$sp->promotion_price}}" />
                                                </div>
{{--                                                <div class="form-group">--}}
{{--                                                    <label style="font-weight: bold; color: #000" >Date Sale</label>--}}
{{--                                                    <input type="text" id="date_sale_product_{{$sp->id}}" name="date_sale" class="form-control"  value="{{$sp->date_sale}}"/>--}}
{{--                                                </div>--}}

                                                 <div class="form-group" style="font-weight: bold; color: #000">
                                                    <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.new_top') }}</label>
                                                    <select name="new" class="form-control">
                                                        <option value="1" <?php if($sp->new==1)echo 'selected' ?> >New</option>
                                                        <option value="0" <?php if($sp->new==0)echo 'selected' ?> >Not New</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="font-weight: bold; color: #000">
                                                    <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.hieusp') }}</label>
                                                    <select name="type" class="form-control">
                                                        @foreach($type as $key => $tpe)
                                                            @if($tpe->id == $sp->id_type)
                                                                <option selected value="{{$tpe->id}}">{{$tpe->name_type}}</option>
                                                            @else
                                                                <option value="{{$tpe->id}}">{{$tpe->name_type}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.hinhanh') }}</label>
                                                    <input type="file" name="image" class="form-control update_image" multiple accept="image/*"/><br>
                                                    <div class="update_displayimg" style="width: 200px">
                                                        <img src="source/image/product/{{$sp->image}}" alt="" width="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="font-weight: bold; color: #000">Ảnh chi tiết</label>
                                                    <input type="file" name="detail_images[]" class="form-control update_detail_images" multiple accept="image/*"/><br>
                                                    <div class="update_display_detail_images">
                                                        @foreach(json_decode($sp->detail_images ?? '[]', 1) as $image)
                                                            <img src="source/image/product/{{$image}}" alt="" width="200px">
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>

                                                <button type="submit"  class="btn btn-primary"><i class="icofont icofont-check-circled"></i>{{ trans('home.up_date') }}</button>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </tr>
                    @endforeach

                    </tbody>

                </table>
                </div>

        </div>


    </div>

     <!-- Import Export Excel -->
    <div class="modal" id="ExcelProduct">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">{{ trans('home_ad.import') }} / {{ trans('home_ad.export') }} Excel</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div style="margin-top: 15px; margin-bottom: 10px; margin-left: 22px">
                    <table>
        <!--                 <tr>
                            <form action="{{url('/import-excel-product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" id="file" accept=".xlsx" required><br><br>
                                <input type="submit" value="{{ trans('home_ad.imexport') }} Excel" name="import_product" class="btn btn-primary" style="margin-right: 10px;">
                            </form>
                        </tr> -->
                        <tr>
                            <form action="{{url('/export-excel-product')}}" method="POST">
                                @csrf
                                <!-- <input type="submit" value="{{ trans('home_ad.export') }} Excel" name="export_product" class="btn btn-success"> -->
                                <button class="btn btn-outline-success" type="submit" name="export_product">
                                    <i class="fas fa-file-export" aria-hidden="true"></i> {{ trans('home_ad.export') }} Excel
                                </button>
                            </form>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
    </div>


    <!-- Modal Add-->
    <div class="modal fade" id="spAdd" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-write">
                    <h4 class="modal-title">{{ trans('home_ad.add') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ti-close">&times;</i></span>
                    </button>
                </div>
                <form action="{{route('addnewsp')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.tensp') }} Vi</label>
                            <input type="text" id="sp_vi" name="sp_vi" class="form-control"  onkeyup="ChangeToSlug();"/>

                            <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.tensp') }} En</label>
                            <input type="text" id="sp_en" name="sp_en" class="form-control"  />

                            <input type="hidden" id="slug" name="slug" class="form-control"  />
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.mota') }} vi</label>
                            <textarea id="e_description1" class="form-control" name="description_vi" rows="5" cols="33"></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.mota') }} en</label>
                            <textarea id="e_description2" class="form-control" name="description_en" rows="5" cols="33"></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.soluong') }}</label>
                            <input type="text" id="quantity" name="quantity" class="form-control"  />


                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.gia') }}</label>
                            <input type="text" id="e_unit_price" name="unit_price" class="form-control"  />


                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold; color: #000" >{{ trans('Ql_sp.giauudai') }}</label>
                            <input type="text" id="e_promotion_price" name="promotion_price" class="form-control"  />
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label style="font-weight: bold; color: #000" >Date Sale</label>--}}
{{--                            <input type="text" id="date_sale_product" name="date_sale" class="form-control"  />--}}
{{--                        </div>--}}

                         <div class="form-group" style="font-weight: bold; color: #000">
                            <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.new_top') }}</label>
                            <select name="new" class="form-control">
                                <option value="1">New</option>
                                <option value="0">Not New</option>
                            </select>
                        </div>
                        <div class="form-group" style="font-weight: bold; color: #000">
                            <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.hieusp') }}</label>
                            <select name="type" class="form-control">
                                @foreach($type as $key=> $tpe)
                                    <option value="{{$tpe->id}}">{{$tpe->name_type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label style="font-weight: bold; color: #000">{{ trans('Ql_sp.hinhanh') }}</label>
                            <input type="file" id="e_image" name="image_file" class="form-control" onchange="ImageFileUrl()"/>
                            <div id="displayimg"></div>
                        </div>

                        <div class="form-group">
                            <label style="font-weight: bold; color: #000">Ảnh chi tiết</label>
                            <input type="file" id="detail_images" name="detail_images[]" class="form-control" multiple onchange="onChangeDetailImages()" accept="image/*"/>
                            <div id="display_detail_images"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                        <button type="reset" class="btn btn-primary" id="reset">Reset</button>
                        <button type="submit"  class="btn btn-primary"  onclick="incrementValue()"><i class="icofont icofont-check-circled"></i>Add</button>


                    </div>
                </form>
            </div>
        </div>
    </div>

<style type="text/css">
    .col-md-4{
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #6e707e;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d1d3e2;
        border-radius: .35rem;
        transition: border-color .15s;
        margin-bottom: 1rem;
    }
    #displayimg img{
        margin-top: 10px;
        width: 200px;
    }

    #display_detail_images img{
        margin: 10px;
        width: 200px;
    }

    .update_display_detail_images img{
        margin: 10px;
        width: 200px;
    }

    .update_displayimg img{
        width: 200px;
    }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script>
    $("#reset").on( "click", function() {
        CKEDITOR.instances['e_description1'].setData('');
        CKEDITOR.instances['e_description2'].setData('');
        document.getElementById('displayimg').innerHTML = '';
        document.getElementById('display_detail_images').innerHTML = '';
    } );

    function onChangeDetailImages(){
        document.getElementById('display_detail_images').innerHTML = '';
        var fileSelected = document.getElementById('detail_images').files;

        if (fileSelected.length > 0) {
            Object.keys(fileSelected).forEach(function(key) {
                let fileToLoad = fileSelected[key];
                var fileReader  = new FileReader();
                fileReader.onload = function(fileLoadEvent){
                    var srcData = fileLoadEvent.target.result;
                    var newImage = document.createElement('img');
                    newImage.src =srcData;
                    document.getElementById('display_detail_images').insertAdjacentHTML('beforeend',newImage.outerHTML);
                }
                fileReader.readAsDataURL(fileToLoad);
            });
        }
    }

    $('.update_image').on('change', function() {
        // Sử dụng $(this) để tham chiếu đến thẻ input
        var files = $(this).prop('files');

        var previewDiv = $(this).parents('.form-group').find('.update_displayimg');
        previewDiv.empty();

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageUrl = URL.createObjectURL(file);
            var img = $('<img>').attr('src', imageUrl);
            previewDiv.append(img);
        }
    });

    $('.update_detail_images').on('change', function() {
        // Sử dụng $(this) để tham chiếu đến thẻ input
        var files = $(this).prop('files');

        var previewDiv = $(this).parents('.form-group').find('.update_display_detail_images');
        previewDiv.empty();

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageUrl = URL.createObjectURL(file);
            var img = $('<img>').attr('src', imageUrl);
            previewDiv.append(img);
        }
    });
</script>
@endsection
