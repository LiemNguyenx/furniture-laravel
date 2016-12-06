<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //action view list
    public function index()
    {
        $objUser  = new User();
        $allUsers = $objUser->all()->toArray();

        return view('user.list')->with('allUsers', $allUsers);
    }

    //action de hien thi form them moi user
    public function create()
    {
        //Goi trang view trong thu muc user, file create.blade.php
        return view('user.create');
    }

    //action de luu user moi khi form submit
    
    public function store(Request $rq){
        $allRequest = $rq->all();
        $userName = $allRequest['username'];
        $passWord = $allRequest['password'];
        $fullName = $allRequest['fullname'];
        $email    = $allRequest['email'];
        $phone    = $allRequest['phone'];
        $address  = $allRequest['address'];
        $created  = $allRequest['created'];
        
        $dataInsertToDatabase = array(
        'userName' => $userName,
        'passWord' => $passWord,
        'fullname' => $fullName,
        'email'    => $email,
        'phone'    => $phone,
        'address'  => $address,
        'created'  =>$created
        );
        $model = new User();
        $model->insert($dataInsertToDatabase);
    }

    public function edit($id)
    {
        $objUser     = new User();
        $getUserById = $objUser->find($id)->toArray();
        return view('user.edit')->with('getUserById', $getUserById);
    }

    public function update(Request $request)
    {
        $allRequest = $request->all();
        $userName   = $allRequest['username'];
        $sex        = $allRequest['sex'];
        $idUser     = $allRequest['id'];

        $objUser               = new User();
        $getUserById           = $objUser->find($idUser);
        $getUserById->username = $userName;
        $getUserById->sex      = $sex;
        $getUserById->save();

        return redirect()->action('UserController@index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->action('UserController@index');
    }
}

