@extends('Layout')
@section('title')
    Thông tin cá nhân
@endsection
@section('content-layout')

    <div class="log-in ptb-20 ptb-sm-20" style="font-size: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header p-3">
                            <h5 class="m-0 font-weight-bold text-primary">Thông tin cá nhân</h5>
                        </div>
                        <div class="card-body">
                            <div class="mt-3">
                                <div class="mt-2"><b>Tên: </b>{{ auth()->user()->full_name }}</div>
                                <div class="mt-2"><b>Email: </b>{{ auth()->user()->email }}</div>
                                <div class="mt-2"><b>SĐT: </b>{{ auth()->user()->phone }}</div>
                                <div class="mt-2"><b>Địa chỉ: </b>{{ auth()->user()->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mtb-20">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header p-3">
                            <h5 class="m-0 font-weight-bold text-primary">Thay mật khẩu</h5>
                        </div>
                        <div class="card-body">
                            <div class="mt-3">
                                <form class="" action="{{route('thaymatkhau')}}" method="post">
                                    @csrf
                                    <div>
                                        Mật khẩu cũ: <input type="password" name="old_password"
                                                            class="form-control mt-2" required>
                                    </div>
                                    <div class="mt-3">
                                        Mật khẩu mới: <input type="password" name="new_password"
                                                             class="form-control mt-2" required>
                                    </div>
                                    <div class="mt-3">
                                        Nhập lại mật khẩu mới: <input type="password" name="re_new_password"
                                                                      class="form-control mt-2" required>
                                    </div>
                                    <div class="text-center mt-2">
                                        <input type="submit" value="Thay mật khẩu" class="btn-primary btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mtb-20">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header p-3">
                            <h5 class="m-0 font-weight-bold text-primary">{{ trans('home_ad.ql_dh') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive class-product">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                       style="text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>{{ trans('Ql_sp.tenkh') }}</th>
                                        <th>Email</th>
                                        <th>{{ trans('Ql_sp.pay') }}</th>
                                        <th>Mã đơn hàng</th>
                                        <th>{{ trans('Ql_sp.trangthai') }}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($donhang as $key => $dh)
                                        <tr>
                                            <td>{{$key+=1}}</td>
                                            <td>{{$dh->name}}</td>
                                            <td>{{$dh->email}}</td>
                                            <td>{{$dh->payment}}</td>
                                            <td>{{$dh->order_code}}</td>
                                            <td>
                                                <?php
                                                if($dh->status_bill == 1){
                                                ?>
                                                <span class="btn btn-info">Đang vận chuyển</span>
                                                <?php
                                                }elseif($dh->status_bill == 0){
                                                ?>
                                                <span class="btn btn-primary">Đang xử lý</span>
                                                <?php
                                                }else{
                                                ?>
                                                <span class="btn btn-danger">Hủy đơn</span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="{{route('chitietdonhang', $dh->id_bill)}}">
                                                    <button class="btn btn-outline-primary" type="button">&nbsp;<i
                                                            class="fas fa-info">&nbsp;</i></button>
                                                </a>
                                            </td>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
@endsection
