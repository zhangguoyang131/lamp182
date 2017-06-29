<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     * 加载登录页面
     */
   public function getLogin(){
        /**
         * 加载模版
         */
        return view('admin.login.login');
   }

   /**
   *验证登录
    */
    public function postDologin(Request $request)
    {
        // 验证码
        $code = session('code');

        $code2= $request -> input('code');

        if($code != $code2){
            return back() -> with('error','验证码错误');
            exit;
        }
        // echo '处理登录';
        // 
        // 1. 处理登录
        $data = $request -> except('_token','code');

        //查询
        $res = DB::table('user')->where('username',$data['username'])->first();

        if(!$res){
            return back() -> with('error','用户名不存在');
        }else{
            // 用户名存在 检测密码
            // $res['password']; //用户的密码   加密
            // $data['password']; //输入密码
            if(Hash::check($data['password'],$res['password'])){
                session(['user_admin'=>$res]);
                // 2.跳转到后台主页面
                return redirect('/admin/index/index');
            }else{
                 return back() -> with('error','用户名或密码错误');
            }

        }
        
    }

   /**
    * 用户添加
    */
   public function getAdd(){
        //加载注册页面
        return view('admin.login.register');
   }

   public function postInsert(Request $request){
        //自动验证
        $this ->validate($request,[

            'username' => 'required',
            'password' => 'required',
            'repassword' => 'required|same:password',
            'phone' => 'required',
            'email' => 'required|email',
        ],[

            'username.required' => '用户名必填',
            'password.required' => '密码必填',
            'repassword.required' => '确认密码必填',
            'repassword.same' => '确认密码不一致',
            'phone.required' => '手机号必填',
            'email.required' => '邮箱必填',
            'email.email' => '邮箱格式不正确',

        ]);

         // 接收用户提交的值
        $data = $request -> except('_token','repassword');
        $data['password'] = Hash::make($data['password']);
        // 注册时间
        $data['ctime'] = time();
        // token
        $data['token'] = str_random(50); //随机一个长度为50位字符串  

        // 将结果存在数据库
        $res = DB::table('user') -> insert($data);

        if($res){
            return redirect('/admin/login/login') -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败');
        }
    

   }

}
