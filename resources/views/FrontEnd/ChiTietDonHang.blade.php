@extends('Layout')
@section('title')
    Chi Tiết Đơn Hàng
@endsection

@section('content-layout')
<div class="container">
    <div class="">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <h3 style="text-align: center;font-weight: bold;">Thông Tin Khách Hàng</h3>
                    <table class="table table-striped mt-3">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Khách Hàng</th>
                            <th scope="col">Địa Chỉ</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col">Ghi Chú</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($thongtin_kh as $key => $dh_ct)
                            <tr>
                                <th scope="row">{{$key++}}</th>
                                <td>{{$dh_ct->name}}</td>
                                <td>{{$dh_ct->address}}</td>
                                <td>{{$dh_ct->phone_number}}</td>
                                <td>{{$dh_ct->note}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--     <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h3 style="text-align: center;font-weight: bold;">Thông Tin Vận Chuyển</h3>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tên Người Vận Chuyển</th>
                      <th scope="col">Địa Chỉ</th>
                      <th scope="col">Product Price</th>
                      <th scope="col">Product Amount </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($billdetaill as $key => $bd)
            <tr>
              <th scope="row">{{$key++}}</th>
                      <td>
                        @if(config('app.locale') != 'vi')
                {{$bd->sp_en}}
            @else
                {{$bd->sp_vi}}
            @endif
            </td>
            <td><img height="50px" width="100px" src="{{ asset('source/image/product/'.$bd->image) }}" alt=""></td>
                      <td>{{$bd->unit_price}}</td>
                      <td>{{$bd->quantity}}</td>
                    </tr>

    @endforeach
        </tbody>
      </table>
    </div>
    </div>
    </div> -->

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <h3 style="text-align: center;font-weight: bold;">Thông Tin Đơn Hàng</h3>

                    <table class="table table-striped mt-3">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Giá Tiền</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Tổng Tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($billdetaill as $key => $bd)
                            <tr class="color_qty_{{$bd->id_product}}">
                                <th scope="row">{{$key++}}</th>
                                <td>
                                    @if(config('app.locale') != 'vi')
                                        {{$bd->sp_en}}
                                    @else
                                        {{$bd->sp_vi}}
                                    @endif
                                </td>
                                <td><img height="50px" width="100px" src="{{ asset('source/image/product/'.$bd->image) }}"
                                         alt=""></td>
                                <td>{{number_format($bd->unit_price,0,',','.')}} VNĐ</td>
                                <td>{{$bd->quantity}}</td>
                                <td>{{number_format($bd->quantity*$bd->unit_price,0,',','.')}} VNĐ</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="space40">&nbsp;</div>


                <div class="modal-footer">
                    <div class="form-group" style="font-weight: bold; color: #000">
                        <label style="font-weight: bold; color: #000">Tổng Cộng:
                            <span style="font-weight: normal;">{{number_format($dh_ct->total,0,',','.')}} VNĐ</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
