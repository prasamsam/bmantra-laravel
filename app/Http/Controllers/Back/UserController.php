<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\AdminSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Client;
use Illuminate\Support\Facades\Auth;


class UserController extends BackController
{
    protected $guard = 'web';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        try {
            $this->data('users', User::paginate(10));
            $this->data('title', $this->title('Users'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.users', $this->data);
        }
    }

    public function clientDetail(){

        try{
            $this->data('clients',Client::paginate(10));
            $this->data('title',$this->title('Client Info'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page .'.clients_detail',$this->data);
            
        }
    }

    public function addUser()
    {
        try {
            $this->data('title', $this->title('Add User'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.adduser', $this->data);
        }
    }

    public function addUserAction(Request $request)
    {

        $this->validate($request, [
            'Username' => 'required|unique:users,Username|min:3',
            'Email' => 'required|unique:users,Email|email',
            'FirstName' => 'required',
            'LastName' => 'required',
            'Password' => 'required|min:6|confirmed',
            'Address' => 'required',
            'City' => 'required',
            'Country' => 'required',
            'Postcode' => 'required'

        ]);

        $data['Username'] = $request->input('Username');
        $data['Email'] = $request->input('Email');
        $data['FirstName'] = $request->input('FirstName');
        $data['LastName'] = $request->input('LastName');
        $data['Password'] = bcrypt($request->input('Password'));
        $data['Address'] = $request->input('Address');
        $data['City'] = $request->input('City');
        $data['Country'] = $request->input('Country');
        $data['Postcode'] = $request->input('Postcode');

        if (User::create($data)) {
            return redirect()->route('admin-user')->with('success', 'User added successfully');
        }
        return redirect()->back()->with('error', 'There was a problem');

    }

    public function login()
    {
        try {
            $this->data('title', $this->title('Login'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.login', $this->data);
        }
    }

    public function loginAction(Request $request)
    {

        try {
            $username = $request->input('Username');
            $password = $request->input('Password');

            $remember = isset($request->remember) ? true : false;

            if (Auth::guard($this->guard)->attempt(['Username' => $username, 'password' => $password, 'status' => 1], $remember)) {
                return redirect()->route('admin');
            } else {
                return redirect()->back()->with('error', 'Username and Password did not match');
            }
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin-login');
    }

    public function adminSetting()
    {

        try {
            $user = Auth::user();

            $id = $user->id;

            $this->data('UserData',User::find($id));

            $this->data('title', $this->title('Setting'));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.adminsetting', $this->data);
        }
    }

    public function adminSettingAction(AdminSetting $request){

        try{

            $id = (int)$request->input('id');

            if(empty($id)) throw new \Exception('Id is not set');

            $data['Username'] = $request->input('Username');
            $data['Email'] = $request->input('Email');
            $data['FirstName'] = $request->input('FirstName');
            $data['LastName'] = $request->input('LastName');
            $data['Address'] = $request->input('Address');
            $data['City'] = $request->input('City');
            $data['Country'] = $request->input('Country');
            $data['Postcode'] = $request->input('Postcode');

            if(User::where('id',$id)->update($data)){
                return redirect()->route('admin-setting')->with('success','User Info Updated Successfully.');
            }
            return redirect()->back()->with('error','Oops! There is a problem.');

        }catch(\Exception $e){
            die($e->getMessage());
        }
    }

    public function updatePassword(Request $request){

        $oldpassword = $request->oldPassword;
        $id = (int)$request->id;

        $user  = Auth::user();
        $id = $user->id;
        $user = User::find($id);

        $oldUserPassword = $user->password;

        $this->validate($request,[
            'oldPassword' => 'required|old_password:'.$oldUserPassword,
            'password' => 'required|min:6|confirmed'
        ],
        [   'oldPassword.old_password' => 'Old password did not match'
            ]);

            $data['password'] = bcrypt($request->input('password'));

            if(User::where('id',$id)->update($data)){
                return redirect()->route('admin-setting')->with('success','Password reset complete.');
                }
                return redirect()->back()->with('error','Oops! There was a problem, Please try again.');
    }



}
