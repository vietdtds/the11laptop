<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Customer;
use App\Models\Social;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Socialite;


use App\Models\User;
use Session;
use Validator;
use flash;


class TaiKhoan_Controller extends Controller
{
    public function login_google(){
        return Socialite::driver('google')->redirect();
    }
    public function callback_google(){
        $users = Socialite::driver('google')->stateless()->user();
        // return $users->id;
        $authUser = $this->findOrCreateUser($users,'google');
        // dd($authUser->user);
        if (Session::get('user_name_login')) {

            $account_name = Account::where('id',Session::get('user_id_login'))->first();
        }else{
            $account_name = Account::where('id',$authUser->user)->first();
            Session::put('user_name_login',$account_name->full_name);
            Session::put('user_id_login',$account_name->id);
        }

        if(Session::get('locale') == 'vi' || Session::get('locale') == null){
            $resuft_tb = trans('home.hi', [], 'vi');
        }else{
            $resuft_tb = trans('home.hi', [], 'en');
        }


        return redirect()->route('trang-chu')->with('thongbao', ''.$resuft_tb.', '.$account_name->full_name.' ');;


    }
    public function findOrCreateUser($users,$provider){
        $authUser = Social::where('provider_user_id', $users->id)->first();
        if($authUser){

            return $authUser;
        }

        $soal = new Social([
            'provider_user_id' => $users->id,
            'provider' => strtoupper($provider)
        ]);

        $orang = Account::where('email',$users->email)->first();

            if(!$orang){
                $orang = Account::create([
                    'full_name' => $users->name,
                    'email' => $users->email,
                    'password' => '',

                    'phone' => '',
                    'address' => '',
                    'level' => 2
                ]);
            }
        $soal->login()->associate($orang);
        $soal->save();

        $account_name = Account::where('id',$soal->user)->first();
        Session::put('user_name_login',$account_name->full_name);
        Session::put('user_id_login',$account_name->id);

        if(Session::get('locale') == 'vi' || Session::get('locale') == null){
            $resuft_tb = trans('home.hi', [], 'vi');
        }else{
            $resuft_tb = trans('home.hi', [], 'en');
        }

        return redirect()->route('trang-chu')->with('thongbao', ''.$resuft_tb.', '.$account_name->full_name.' ');;


    }

    public function getDangNhap(Request $req){
        $meta_desc = '';
        $url_canonical = $req->url();
        $image_og = '';

        return view('FrontEnd.SignIn', compact('meta_desc','url_canonical','image_og'));
    }
    public function postDangNhap(Request $req){

        if(Session::get('locale') == 'vi' || Session::get('locale') == null){
            $resuft_tb = trans('home.hi', [], 'vi');
            $resuft_tb_1 = trans('home.Notification_error', [], 'vi');

        }else{
            $resuft_tb = trans('home.hi', [], 'en');
            $resuft_tb_1 = trans('home.Notification_error', [], 'en');
        }
        if(Session::get('locale') == 'vi' || Session::get('locale') == null){
            $this->validate($req,
        		[
        			'email'=>'required|email',
        			'password'=>'required|min:6|max:20'

        		],
        		[
        			'email.required'=>'Vui lòng nhập email!',
        			'email.email'=>'Email không đúng định dạng!',

        			'password.required'=>'Vui lòng nhập mật khẩu!',
        			'password.min'=>'Mật khẩu ít nhất 6 ký tự!',
        			'password.max'=>'Mật khẩu không quá 20 ký tự!'
        		]);
        }else{
            $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'

            ]);
        }



    	Session::get('user_id_login');
    	$credentials = array('email'=>$req->email, 'password'=>$req->password);
        if(Auth::attempt($credentials)){

            if (Auth::user()->level == 1) {

                Session::put('user_id_login', Auth::user()->id);
                $name = Auth::user()->full_name;
                return redirect()->route('trang-chu-admin')->with('thongbao', ''.$resuft_tb.', '.$name.' ');
            }else{

                Session::put('user_id_login', Auth::user()->id);
                $name = Auth::user()->full_name;
                return redirect()->route('trang-chu')->with('thongbao', ''.$resuft_tb.', '.$name.' ');
            }
        }else{
            return redirect()->back()->with('thongbaoloi', ''.$resuft_tb_1.'');
        }

    }
    public function getDangKy(Request $req){
        $meta_desc = '';
        $url_canonical = $req->url();
        $image_og = '';
        return view('FrontEnd.SignOut', compact('meta_desc','url_canonical','image_og'));
    }
    public function postDangKy(Request $req){
        if(Session::get('locale') == 'vi' || Session::get('locale') == null){
    	$this->validate($req,
    		[
    			'email'=>'required|email|unique:users,email',
    			'password'=>'required|min:6|max:20',
    			'fullname'=>'required',
    			're_password'=>'required|same:password'

    		],
    		[
                'fullname.required'=>'Vui lòng nhập họ và tên',
    			'email.required'=>'Vui lòng nhập email',
    			'email.email'=>'Email không đúng định dạng',
    			'email.unique'=>'Email đã được sử dụng',

    			'password.required'=>'Vui lòng nhập mật khẩu',
    			'password.min'=>'Mật khẩu ít nhất 6 ký tự',
    			'password.max'=>'Mật khẩu không quá 20 ký tự',

    			're_password.required'=>'Vui lòng nhập lại mật khẩu',
    			're_password.same'=>'Mật khẩu không giống nhau'

    		]);
        }else{
            $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'

            ]);
        }
    	$user = new User();
    	$user->full_name = $req->fullname;
    	$user->email = $req->email;
    	$user->password = Hash::make($req->password);
		$user->phone = $req->phone;
		$user->address = $req->adress;
		$user->level = $req= 2;
		$user->save();
		return redirect()->route('dangnhap');
    }

    public function postDangXuat(){
    	Auth::logout();
        Session::forget('cart');
        Session::forget('coupon');
        Session::forget('user_id_login');
        Session::forget('user_name_login');
    	return redirect()->route('trang-chu');
    }


    public function userUpdate1(Request $req)
    {
        if (Auth::check()) {
            if(Session::get('locale') == 'vi' || Session::get('locale') == null){
                $this->validate($req,
                [
                    'email'=>'required|email',
                    'password'=>'required|min:6|max:20',
                    'name'=>'required',
                    're_password'=>'required|same:password'

                ],
                [
                    'name.required'=>'Vui lòng nhập fullname',

                    'email.required'=>'Vui lòng nhập email',
                    'email.email'=>'Email không đúng định dạng',

                    'password.required'=>'Vui lòng nhập mật khẩu',
                    'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                    'password.max'=>'Mật khẩu không quá 20 ký tự',

                    're_password.required'=>'Vui lòng nhập lại mật khẩu',
                    're_password.same'=>'Mật khẩu không giống nhau'

                ]);
            }else{
                $this->validate($req,
                [
                    'email'=>'required|email',
                    'password'=>'required|min:6|max:20',
                    'name'=>'required',
                    're_password'=>'required|same:password'

                ]);
            }
            $userUpdate =  User::find(Auth::user()->id );

            $userUpdate->full_name = $req->name;
            $userUpdate->address = $req->adress;
            $userUpdate->email = $req->email;
            $userUpdate->phone = $req->phone;
            // if ($req->password != null) {
            //     $userUpdate->password = Hash::make($req->password);
            // }
            $userUpdate->password = Hash::make($req->password);

            $userUpdate->save();
            return redirect()->back()->with('thongbaoupdate', 'Update Successful');
        }
        else{
            return redirect()->back();

        }
    }

    public function getThongTinCaNhan(){
        if (!Auth::check()){
            return redirect()->route('trang-chu');
        }
        $meta_desc = '';
        $image_og = '';
        $donhang = Bill::where('id_user','=',auth()->user()->id)->join('customer', 'customer.id', '=', 'bills.id_customer')->orderby('id_bill', 'DESC')->get();
        return view('FrontEnd.ThongTinCaNhan', compact('meta_desc','image_og', 'donhang'));
    }

    public function getChiTietDonHang($idBill){
        $billdetaill =DB::select("SELECT bt.id_bill_detail, bt.id_bill, bt.id_product, bt.id_post_bill_detail, bt.order_code, bt.quantity,
        bt.unit_price,p.image,p.date_sale, p.product_quantity ,p.id_post, post.sp_vi as sp_vi,  post.sp_en as sp_en
        FROM bill_detail bt, products p
        INNER JOIN post ON p.id_post = post.id_post
         WHERE bt.id_product=p.id AND id_bill=$idBill ");
        $thongtin_kh = Bill::join('customer', 'customer.id', '=', 'bills.id_customer')->where('id_bill',$idBill)->get();
        $meta_desc = '';
        $image_og = '';
        return view('FrontEnd.ChiTietDonHang', compact('billdetaill', 'thongtin_kh','meta_desc','image_og'));
    }

    public function postThayMatKhau(Request $request){
        $this->validate($request, [
            'old_password'=>'required',
            'new_password'=>'required|min:6|max:20',
            're_new_password'=>'required|same:new_password'
        ]);

        $user = auth()->user();
        if (!Hash::check($request->old_password,$user->password)){
            return redirect()->back()->with('thongbaoloi', 'Mật khẩu cũ không đúng');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('thongbao', 'Thay mật khẩu thành công');
    }

}
