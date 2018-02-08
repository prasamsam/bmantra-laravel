<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\ClientUpdate;
use App\Model\About;
use App\Model\News;
use App\Model\Package;
use App\Model\Service;
use App\Model\Cases;
use App\Model\Testimony;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\Slider;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AppController extends FrontController
{
    protected $guard = 'client';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        try {
            $this->data('SlideData', Slider::all());
            $this->data('ServiceData', Service::all());
            $this->data('PackageData', Package::all());
            $this->data('CaseData', Cases::all());
            $this->data('TestimonyData', Testimony::all());
            $this->data('newses', News::orderBy('id', 'desc')->take(2)->get());
            $this->data('title', $this->title('Welcome'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Home.home', $this->data);
        }
    }

    public function contact()
    {
        try {
            $this->data('title', $this->title('Contact'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Contact.contact', $this->data);
        }
    }

    public function about()
    {
        try {
            $this->data('AboutData', About::all());
            $this->data('TestimonyData', Testimony::orderBy('id', 'desc')->take(1)->get());
            $this->data('title', $this->title('About'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.About.about', $this->data);
        }
    }

    public function services()
    {
        try {
            $this->data('title', $this->title('Services'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Services.services', $this->data);
        }
    }

    public function cases()
    {
        try {
            $this->data('title', $this->title('Cases'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Cases.cases', $this->data);
        }
    }

    public function news(){

        try{
            $this->data('NewsData', News::orderBy('id', 'desc')->get());
            $this->data('TestimonyData', Testimony::orderBy('id', 'desc')->take(1)->get());
            $this->data('title',$this->title('All News'));

        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.News.news',$this->data);
        }
    }

    public function singleNews($id){

        try{
            $this->data('news',News::find($id));
            $this->data('TestimonyData', Testimony::orderBy('id', 'desc')->take(1)->get());
            $this->data('title',$this->title('News'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.News.singlenews',$this->data);
        }
    }

    public function ClientLogIn()
    {
        try {
            $this->data('title', $this->title('Log In'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Client.login', $this->data);
        }
    }

    public function ClientSignUpAction(Request $request)
    {

        $this->validate($request, [

            'Firstname' => 'required',
            'Lastname' => 'required',
            'Email' => 'required|unique:clients,email|email',
            'password' => 'required|min:6|confirmed'

        ]);

        $data['Firstname'] = $request->input('Firstname');
        $data['Middlename'] = $request->input('Middlename');
        $data['Lastname'] = $request->input('Lastname');
        $data['Email'] = $request->input('Email');
        $data['password'] = bcrypt($request->input('password'));

        if (Client::create($data)) {
            return redirect()->route('user-login')->with('success', 'Account created successfully, please login');
        }
        return redirect()->back()->with('error', 'Oops there seems to be a problem, please try again');
    }

    public function ClientLogInAction(Request $request)
    {

        try {
            $email = $request->input('email');
            $password = $request->input('password');

            $remember = isset($request->remember) ? true : false;

            if (Auth::guard($this->guard)->attempt(['email' => $email, 'password' => $password], $remember)) {
                return redirect()->route('userportal');
            }
            return redirect()->back()->with('error', 'Please Enter Valid Email and Password');

        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user-login');
    }

    public function ClientSignUp()
    {
        try {
            $this->data('title', $this->title('Sign Up'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Client.signup', $this->data);
        }
    }

    public function UserPortal()
    {
        try {
            $this->data('ServiceData', Service::all());
            $this->data('TestimonyData', Testimony::orderBy('id', 'desc')->take(1)->get());
            $this->data('PackageData',Package::all());
            $client = Auth::guard('client')->user();
            $id = (int)$client->id;
            $this->data('ClientData', Client::find($id));
            $this->data('title', $this->title('Welcome'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Client.client_portal', $this->data);
        }
    }

    public function ClientSetting()
    {
        try {
            $client = Auth::guard('client')->user();

            $id = $client->id;

            $this->data('ClientData', Client::find($id));

            $this->data('title', $this->title('Settings'));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.Client.ClientSetting', $this->data);
        }
    }

    public function ClientSettingAction(Request $request)
    {
        try {

            $id = (int)$request->id;

            if (empty($id)) throw new \Exception('ID is not set.');

            $data['Firstname'] = $request->input('Firstname');
            $data['Middlename'] = $request->input('Middlename');
            $data['Lastname'] = $request->input('Lastname');
            $data['Email'] = $request->input('Email');

            if (Client::where('id', $id)->update($data)) {
                return redirect()->route('client-setting')->with('success', 'User Info updated successfully.');
            }
            return redirect()->back()->with('error', 'Oops! There was a problem.');

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function ClientUpdatePassword(Request $request)
    {

        $oldpassword = $request->OldPassword;
        $id = (int)$request->id;

        $client = Auth::guard('client')->user();

        $id = $client->id;

        $client = Client::find($id);

        $OldUserPassword = $client->password;


        $this->validate($request, [
            'OldPassword' => 'required|Old_Password:' . $OldUserPassword,
            'password' => 'required|min:6|confirmed'
        ]);

        $data['password'] = bcrypt($request->input('password'));

        if (Client::where('id', $id)->update($data)) {
            return redirect()->route('client-setting')->with('success', 'Password reset completed successfully');
        }
        return redirect()->back()->with('error', 'Oops! There was a problem, Please try again.');

    }

    public function UploadPicture(Request $request)
    {

        try {
            $this->validate($request, [
                'userImage' => 'mimes:jpeg,png,bmp,gif|max:1000'
            ]);
            $id = (int)$request->id;
            if (empty($id)) throw new \Exception('No ID was set');

            $data['image'] = $request->file('userImage');

            $client = Client::find($id);
            $prevImg = $client->image;

            if ($request->hasfile('userImage')) {
                $image = $request->file('userImage');
                $uploadPath = public_path('images/clients');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(100, null, function ($ar) {
                    $ar->aspectratio();
                })->crop(50, 50)->save($uploadPath . '/' . $imageName);


                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/clients/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['image'] = $imageName;
                }
            }

            if (Client::where('id', $id)->update($data)) {
                return redirect()->route('userportal')->with('success', 'Image Uploaded Successfully.');
            }
            return redirect()->route('userportal')->with('error', 'Opps there seems to be a problem, please try again');
        } catch (\Exception $e) {

            die($e->getMessage());
        }
    }


}
