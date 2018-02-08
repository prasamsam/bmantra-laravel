<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\AdminSetting;
use App\Model\Cases;
use App\Model\News;
use App\Model\Other;
use App\Model\ServicePackage;
use App\Model\Testimony;
use App\Model\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Client;
use App\Model\Slider;
use App\Model\Service;
use App\Model\Package;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Mockery\Exception;


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

    public function clientDetail()
    {

        try {
            $this->data('clients', Client::paginate(10));
            $this->data('title', $this->title('Client Info'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.clients_detail', $this->data);

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

            $this->data('UserData', User::find($id));

            $this->data('title', $this->title('Setting'));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.adminsetting', $this->data);
        }
    }

    public function adminSettingAction(AdminSetting $request)
    {

        try {

            $id = (int)$request->input('id');

            if (empty($id)) throw new \Exception('Id is not set');

            $data['Username'] = $request->input('Username');
            $data['Email'] = $request->input('Email');
            $data['FirstName'] = $request->input('FirstName');
            $data['LastName'] = $request->input('LastName');
            $data['Address'] = $request->input('Address');
            $data['City'] = $request->input('City');
            $data['Country'] = $request->input('Country');
            $data['Postcode'] = $request->input('Postcode');

            if (User::where('id', $id)->update($data)) {
                return redirect()->route('admin-setting')->with('success', 'User Info Updated Successfully.');
            }
            return redirect()->back()->with('error', 'Oops! There is a problem.');

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function updatePassword(Request $request)
    {

        $oldpassword = $request->oldPassword;
        $id = (int)$request->id;

        $user = Auth::user();
        $id = $user->id;
        $user = User::find($id);

        $oldUserPassword = $user->password;

        $this->validate($request, [
            'oldPassword' => 'required|old_password:' . $oldUserPassword,
            'password' => 'required|min:6|confirmed'
        ],
            ['oldPassword.old_password' => 'Old password did not match'
            ]);

        $data['password'] = bcrypt($request->input('password'));

        if (User::where('id', $id)->update($data)) {
            return redirect()->route('admin-setting')->with('success', 'Password reset complete.');
        }
        return redirect()->back()->with('error', 'Oops! There was a problem, Please try again.');
    }

    public function userStatus(Request $request)
    {

        $type = $request->type;
        $id = (int)$request->id;

        if ($type == 'disable') {
            User::where('id', $id)->update(['status' => 0]);

            return response()->json(['status' => 'success', 'type' => 'Disabled']);
        }
        if ($type == 'enable') {
            User::where('id', $id)->update(['status' => 1]);
            return response()->json(['status' => 'success', 'type' => 'Enabled']);
        }

    }

    public function managePage()
    {

        try {
            $this->data('others', Other::all());
            $this->data('abouts',About::all());
            $this->data('sliders', Slider::all());
            $this->data('title', $this->title('Manage Site'));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.manage', $this->data);
        }

    }

    public function manageHomePage()
    {
        try {
            $this->data('newses', News::all());
            $this->data('testimonials', Testimony::all());
            $this->data('cases', Cases::all());
            $this->data('packages', Package::all());
            $this->data('services', Service::all());
            $this->data('sliders', Slider::all());
            $this->data('title', $this->title('Manage Home Page'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.manageHome', $this->data);
        }

    }

    public function addHomeSlide()
    {
        try {
            $this->data('title', $this->title('Add Home Slide'));

        } catch (\Exception $e) {

        } finally {
            return view($this->page . '.addslide', $this->data);
        }
    }

    public function homeSlideAction(Request $request)
    {

        try {

            $this->validate($request, [
                'slide' => 'mimes:jpg,jpeg,bmp,png,gif|max:10000',
                'sliderdescription' => 'required|max:1000',
                'slidesummary' => 'required|max:1000'
            ]);


            $data['sliderimage'] = $request->file('slide');
            $data['sliderdescription'] = $request->sliderdescription;
            $data['slidesummary'] = $request->slidesummary;

            if ($request->hasfile('slide')) {
                $image = $request->file('slide');
                $uploadPath = public_path('images/slider');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['sliderimage'] = $imageName;
                }
            }

            if (Slider::create($data)) {
                return redirect()->route('manage-home')->with('success', 'Slide has been added successfully.');
            }
            return redirect()->route('manage-home')->with('error', 'Oops there seems to be a problem, please try again.');
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function editHomeSlideUpdate($id)
    {
        try {
            $this->data('slider', Slider::find($id));
            $this->data('title', $this->title('Edit Slide'));


        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.updateslide', $this->data);
        }

    }

    public function updateHomeSlideAction(Request $request, $id)
    {

        try {

            $this->validate($request, [
                'slide' => 'mimes:jpeg,jpg,bmp,png,gif|max:10000',
                'sliderdescription' => 'required|max:1000',
                'slidesummary' => 'required|max:1000'
            ]);


            $data['sliderimage'] = $request->file('slide');
            $data['sliderdescription'] = $request->sliderdescription;
            $data['slidesummary'] = $request->slidesummary;

            $slider = Slider::find($id);
            $prevImg = $slider->sliderimage;

            if ($request->hasfile('slide')) {
                $image = $request->file('slide');
                $uploadPath = public_path('images/slider');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);


                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/slider/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['sliderimage'] = $imageName;
                }
            }

            if (Slider::where('id', $id)->update($data)) {
                return redirect()->route('manage-home')->with('success', 'Slide updated successfully.');
            } else {
                return redirect()->route('manage-home')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteSlideAction($id)
    {


        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('manage-home')->with('success', 'Slide has been deleted successfully');


    }

    public function manageServices()
    {
        try {
            $this->data('title', $this->title('Add Service'));

        } catch (\Exception $e) {

        } finally {
            return view($this->page . '.addservice', $this->data);
        }
    }

    public function addServices(Request $request)
    {

        try {
            $this->validate($request, [
                'serviceimage' => 'mimes:jpg,jpeg,bmp,png,gif|max:10000',
                'servicename' => 'required|max:1000',
                'servicedetail' => 'required|max:1000',
                'serviceprice' => 'required'
            ]);


            $data['serviceimage'] = $request->file('serviceimage');
            $data['servicename'] = $request->servicename;
            $data['servicedetail'] = $request->servicedetail;
            $data['serviceprice'] = $request->serviceprice;

            if ($request->hasfile('serviceimage')) {
                $image = $request->file('serviceimage');
                $uploadPath = public_path('images/services');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['serviceimage'] = $imageName;
                }
            }

            if (Service::create($data)) {
                return redirect()->route('manage-home')->with('success', 'Service has been added successfully.');
            }
            return redirect()->route('manage-home')->with('error', 'Oops there seems to be a problem, please try again.');

        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    public function editServices($id)
    {

        try {
            $this->data('service', Service::find($id));
            $this->data('title', $this->title('Edit Services'));
        } catch (\Exception $e) {

        } finally {
            return view($this->page . '.editservice', $this->data);
        }
    }

    public function updateService(Request $request, $id)
    {

        try {
            $this->validate($request, [
                'serviceimage' => 'mimes:jpeg,jpg,bmp,png,gif|max:10000',
                'servicename' => 'required|max:1000',
                'servicedetail' => 'required|max:1000',
                'serviceprice' => 'required'
            ]);


            $data['serviceimage'] = $request->file('serviceimage');
            $data['servicename'] = $request->servicename;
            $data['servicedetail'] = $request->servicedetail;
            $data['serviceprice'] = $request->serviceprice;

            $service = Service::find($id);
            $prevImg = $service->serviceimage;

            if ($request->hasfile('serviceimage')) {
                $image = $request->file('serviceimage');
                $uploadPath = public_path('images/services');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);


                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/services/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['serviceimage'] = $imageName;
                }
            }

            if (Service::where('id', $id)->update($data)) {
                return redirect()->route('manage-home')->with('success', 'Service updated successfully.');
            } else {
                return redirect()->route('manage-home')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }


        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteService($id)
    {

        $service = Service::find($id);
        $service->delete();
        return redirect()->route('manage-home')->with('success', 'Service has been deleted successfully');

    }

    public function addPackage()
    {

        try {
            $this->data('title', $this->title('Add Service Package'));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.addservicepackage', $this->data);
        }
    }

    public function uploadPackage(Request $request)
    {

        try {
            $this->validate($request, [
                'packagename' => 'required',
                'packageservice1' => 'required|max:1000',
                'packageservice2' => 'required|max:1000',
                'packageservice3' => 'required|max:1000',
                'packageservice4' => 'required|max:1000',
                'packageservice5' => 'required|max:1000',
                'packageprice' => 'required'
            ]);


            $data['packagename'] = $request->packagename;
            $data['packageservice1'] = $request->packageservice1;
            $data['packageservice2'] = $request->packageservice2;
            $data['packageservice3'] = $request->packageservice3;
            $data['packageservice4'] = $request->packageservice4;
            $data['packageservice5'] = $request->packageservice5;
            $data['packageprice'] = $request->packageprice;

            if (Package::create($data)) {
                return redirect()->route('manage-home')->with('success', 'Package Added Successfully.');
            }
            return redirect()->route('manage-home')->with('error', 'Opps there seems to be a problem, Please try again.');

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function editPackage($id)
    {

        try {
            $this->data('package', Package::find($id));
            $this->data('title', $this->title('Edit Service Package'));

        } catch (\Exception $e) {

        }
        return view($this->page . '.editservicepackage', $this->data);
    }

    public function updatePackage(Request $request, $id)
    {

        try {
            $this->validate($request, [
                'packagename' => 'required',
                'packageservice1' => 'required|max:1000',
                'packageservice2' => 'required|max:1000',
                'packageservice3' => 'required|max:1000',
                'packageservice4' => 'required|max:1000',
                'packageservice5' => 'required|max:1000',
                'packageprice' => 'required'
            ]);


            $data['packagename'] = $request->packagename;
            $data['packageservice1'] = $request->packageservice1;
            $data['packageservice2'] = $request->packageservice2;
            $data['packageservice3'] = $request->packageservice3;
            $data['packageservice4'] = $request->packageservice4;
            $data['packageservice5'] = $request->packageservice5;
            $data['packageprice'] = $request->packageprice;

            if (Package::where('id', $id)->update($data)) {
                return redirect()->route('manage-home')->with('success', 'Package updated successfully.');
            } else {
                return redirect()->route('manage-home')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }


        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function deletePackage($id)
    {

        $package = Package::find($id);
        $package->delete();
        return redirect()->route('manage-home')->with('success', 'Package deleted successfully');
    }


    public function addCases()
    {

        try {
            $this->data('title', $this->title('Add Case'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.addcase', $this->data);
        }
    }

    public function uploadCases(Request $request)
    {

        try {
            $this->validate($request, [
                'caseimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'casename' => 'required|max:1000',
                'casecategory' => 'required|max:1000',
                'casedetail' => 'required|max:1000',
            ]);


            $data['caseimage'] = $request->file('caseimage');
            $data['casename'] = $request->casename;
            $data['casecategory'] = $request->casecategory;
            $data['casedetail'] = $request->casedetail;


            if ($request->hasfile('caseimage')) {
                $image = $request->file('caseimage');
                $uploadPath = public_path('images/cases');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['caseimage'] = $imageName;
                }
            }

            if (Cases::create($data)) {
                return redirect()->route('manage-home')->with('success', 'Case has been added successfully.');
            }
            return redirect()->route('manage-home')->with('error', 'Oops there seems to be a problem, please try again.');

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function editCases($id)
    {
        try {
            $this->data('case', Cases::find($id));
            $this->data('title', $this->title('Edit Case'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.editcase', $this->data);
        }
    }

    public function updateCases(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'caseimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'casename' => 'required|max:1000',
                'casecategory' => 'required|max:1000',
                'casedetail' => 'required|max:1000',
            ]);


            $data['caseimage'] = $request->file('caseimage');
            $data['casename'] = $request->casename;
            $data['casecategory'] = $request->casecategory;
            $data['casedetail'] = $request->casedetail;

            $case = Cases::find($id);
            $prevImg = $case->serviceimage;

            if ($request->hasfile('caseimage')) {
                $image = $request->file('caseimage');
                $uploadPath = public_path('images/cases');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/cases/' . $prevImg);
                        unlink($prevImg);
                    }

                    $data['caseimage'] = $imageName;
                }
            }
            if (Cases::where('id', $id)->update($data)) {
                return redirect()->route('manage-home')->with('success', 'Case updated successfully.');
            } else {
                return redirect()->route('manage-home')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }


        } catch (\Exception $e) {

        }
    }

    public function deleteCases($id)
    {

        $case = Cases::find($id);
        $case->delete();
        return redirect()->route('manage-home')->with('success', 'Case deleted successfully');

    }

    public function addTestimony()
    {
        try {
            $this->data('title', $this->title('Add Testimony'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.addtestimony', $this->data);
        }
    }

    public function uploadTestimony(Request $request)
    {

        try {
            $this->validate($request, [
                'testheroimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'testimony' => 'required|max:1000',
                'testowner' => 'required|max:1000',
                'testownerimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'clientcompanylogo' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'testownerinfo' => 'required|max:1000',
            ]);


            $data['testheroimage'] = $request->file('testheroimage');
            $data['testimony'] = $request->testimony;
            $data['testowner'] = $request->testowner;
            $data['testownerimage'] = $request->file('testownerimage');
            $data['clientcompanylogo'] = $request->file('clientcompanylogo');
            $data['testownerinfo'] = $request->testownerinfo;

            if ($request->hasfile('testheroimage')) {
                $image = $request->file('testheroimage');
                $uploadPath = public_path('images/testimonials');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['testheroimage'] = $imageName;
                }
            }

            if ($request->hasfile('testownerimage')) {
                $image = $request->file('testownerimage');
                $uploadPath = public_path('images/testimonials');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(200, 200, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['testownerimage'] = $imageName;
                }
            }

            if ($request->hasfile('clientcompanylogo')) {
                $image = $request->file('clientcompanylogo');
                $uploadPath = public_path('images/testimonials');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(300, 300, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['clientcompanylogo'] = $imageName;
                }
            }

            if (Testimony::create($data)) {
                return redirect()->route('manage-home')->with('success', 'Testimonial has been added successfully.');
            }
            return redirect()->route('manage-home')->with('error', 'Oops there seems to be a problem, please try again.');


        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function editTestimony($id)
    {

        try {
            $this->data('testimony', Testimony::find($id));
            $this->data('title', $this->title("Edit Testimony"));

        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '/edittestimony', $this->data);
        }
    }

    public function updateTestimony(Request $request, $id)
    {

        try {


            $this->validate($request, [
                'testheroimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'testimony' => 'required|max:1000',
                'testowner' => 'required|max:1000',
                'testownerimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'clientcompanylogo' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'testownerinfo' => 'required|max:1000',
            ]);


            $data['testheroimage'] = $request->file('testheroimage');
            $data['testimony'] = $request->testimony;
            $data['testowner'] = $request->testowner;
            $data['testownerimage'] = $request->file('testownerimage');
            $data['clientcompanylogo'] = $request->file('clientcompanylogo');
            $data['testownerinfo'] = $request->testownerinfo;

            $testimony = Testimony::find($id);
            $prevImg = $testimony->testheroimage;

            if ($request->hasfile('testheroimage')) {
                $image = $request->file('testheroimage');
                $uploadPath = public_path('images/testimonials');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/testimonials/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['testheroimage'] = $imageName;
                }
            }

            $prevImg1 = $testimony->testownerimage;

            if ($request->hasfile('testownerimage')) {
                $image = $request->file('testownerimage');
                $uploadPath = public_path('images/testimonials');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(200, 200, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg1)) {
                        $prevImg1 = public_path('images/testimonials/' . $prevImg1);
                        unlink($prevImg1);
                    }
                    $data['testownerimage'] = $imageName;
                }
            }

            $prevImg2 = $testimony->cliencompanylogo;

            if ($request->hasfile('clientcompanylogo')) {
                $image = $request->file('clientcompanylogo');
                $uploadPath = public_path('images/testimonials');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(300, 300, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg2)) {
                        $prevImg = public_path('images/testimonials/' . $prevImg2);
                        unlink($prevImg);
                    }
                    $data['clientcompanylogo'] = $imageName;
                }
            }
            if (Testimony::where('id', $id)->update($data)) {
                return redirect()->route('manage-home')->with('success', 'Testimony updated successfully.');
            } else {
                return redirect()->route('manage-home')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }


        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteTestimony($id)
    {

        $testimony = Testimony::find($id);
        $testimony->delete();
        return redirect()->route('manage-home')->with('success', 'Testimony deleted successfully.');
    }


    public function addNews()
    {

        try {
            $this->data('title', $this->title('Add News'));
        } catch (\Exception $e) {
            die($e->getMessage());
        } finally {
            return view($this->page . '.addnews', $this->data);
        }
    }

    public function uploadNews(Request $request)
    {

        try {
            $this->validate($request, [
                'newsimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'newsheading' => 'required|max:1000',
                'newsdetail' => 'required|max:1000',
                'newsauthorimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'newsauthor' => 'required|max:1000',
            ]);


            $data['newsimage'] = $request->file('newsimage');
            $data['newsheading'] = $request->newsheading;
            $data['newsdetail'] = $request->newsdetail;
            $data['newsauthorimage'] = $request->file('newsauthorimage');
            $data['newsauthor'] = $request->newsauthor;


            if ($request->hasfile('newsimage')) {
                $image = $request->file('newsimage');
                $uploadPath = public_path('images/news');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['newsimage'] = $imageName;
                }
            }

            if ($request->hasfile('newsauthorimage')) {
                $image = $request->file('newsauthorimage');
                $uploadPath = public_path('images/news');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(1819, 800, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {

                    $data['newsauthorimage'] = $imageName;
                }
            }
            if (News::create($data)) {
                return redirect()->route('manage-home')->with('success', 'News has been added successfully.');
            }
            return redirect()->route('manage-home')->with('error', 'Oops there seems to be a problem, please try again.');



        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function editNews($id){

        try{
            $this->data('news',News::find($id));
            $this->data('title',$this->title('Edit News'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.editnews',$this->data);
        }
    }

    public function updateNews(Request $request, $id){

        try{
            $this->validate($request, [
                'newsimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'newsheading' => 'required|max:1000',
                'newsdetail' => 'required|max:1000',
                'newsauthorimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'newsauthor' => 'required|max:1000',
            ]);


            $data['newsimage'] = $request->file('newsimage');
            $data['newsheading'] = $request->newsheading;
            $data['newsdetail'] = $request->newsdetail;
            $data['newsauthorimage'] = $request->file('newsauthorimage');
            $data['newsauthor'] = $request->newsauthor;

            $news = News::find($id);
            $prevImg = $news->newsimage;

            if ($request->hasfile('newsimage')) {
                $image = $request->file('newsimage');
                $uploadPath = public_path('images/news');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(400, 400, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/news/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['newsimage'] = $imageName;
                }
            }

                $prevImg1 = $news->newsauthorimage;
            if ($request->hasfile('newsimage')) {
                $image = $request->file('newsimage');
                $uploadPath = public_path('images/news');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(100, 100, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg1)) {
                        $prevImg1 = public_path('images/news/' . $prevImg1);
                        unlink($prevImg1);
                    }
                    $data['newsauthorimage'] = $imageName;
                }
            }
            if (News::where('id', $id)->update($data)) {
                return redirect()->route('manage-home')->with('success', 'News updated successfully.');
            } else {
                return redirect()->route('manage-home')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }

        }catch(\Exception $e){
            die($e->getMessage());
        }
    }

    public function deleteNews($id){

        $news = News::find($id);
        $news->delete();

        return redirect()->route('manage-home')->with('success','News deleted successfully');
    }

    public function manageAboutPage($id){

        try{
            $this->data('about',About::find($id));
            $this->data('title',$this->title('Update About Page'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.manageabout',$this->data);
        }
    }

    public function updateAboutPage(Request $request ,$id){

        try{
            $this->validate($request, [
                'firstimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'companyoverview' => 'required|max:1000',
                'ourmission' => 'required|max:1000',
                'secondimage' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'bannerinfo' => 'required|max:1000',
                'bloquote' => 'required|max:1000'

            ]);


            $data['firstimage'] = $request->file('firstimage');
            $data['companyoverview'] = $request->companyoverview;
            $data['ourmission'] = $request->ourmission;
            $data['secondimage'] = $request->file('secondimage');
            $data['bannerinfo'] = $request->bannerinfo;
            $data['bloquote'] = $request->bloquote;

            $about = About::find($id);
            $prevImg = $about->firstimage;

            if ($request->hasfile('firstimage')) {
                $image = $request->file('firstimage');
                $uploadPath = public_path('images/about');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(500, 500, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/about/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['firstimage'] = $imageName;
                }
            }

            $prevImg1 = $about->secondimage;
            if ($request->hasfile('secondimage')) {
                $image = $request->file('secondimage');
                $uploadPath = public_path('images/about');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(500, 500, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg1)) {
                        $prevImg1 = public_path('images/about/' . $prevImg1);
                        unlink($prevImg1);
                    }
                    $data['secondimage'] = $imageName;
                }
            }
            if (About::where('id',$id)->update($data)) {
                return redirect()->route('manage-page')->with('success', 'About Information updated successfully.');
            } else {
                return redirect()->route('manage-page')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }


        }catch(\Exception $e){
            die($e->getMessage());
        }
    }

    public function editOtherInfo($id){

        try{
            $this->data('other', Other::find($id));
            $this->data('title',$this->title('Update Other Information'));
        }catch(\Exception $e){
            die($e->getMessage());
        }finally{
            return view($this->page.'.updateotherinfo',$this->data);
        }
    }

    public function updateOtherInfo(Request $request, $id){

        try{

            $this->validate($request, [
                'companylogo' => 'required|mimes:jpeg,jpg,png,bmp,gif',
                'companyaddress' => 'required|max:1000',
                'openinghour' => 'required|max:1000',
                'closinghour' => 'required|max:1000',
                'openingdayfrom' => 'required|max:1000',
                'closingdayto' => 'required|max:1000',
                'companynumber' => 'required|max:1000',
                'companyemail' => 'required|max:1000',
                'companyfax' => 'required|max:1000'

            ]);


            $data['companylogo'] = $request->file('companylogo');
            $data['companyaddress'] = $request->companyaddress;
            $data['openinghour'] = $request->openinghour;
            $data['closinghour'] = $request->closinghour;
            $data['openingdayfrom'] = $request->opeingdayform;
            $data['companynumber'] = $request->companynumber;
            $data['companyemail'] = $request->companyemail;
            $data['companyfax'] = $request->companyfax;


            $other = Other::find($id);
            $prevImg = $other->companylogo;

            if ($request->hasfile('companylogo')) {
                $image = $request->file('companylogo');
                $uploadPath = public_path('images/other');
                $ext = $image->getClientOriginalExtension();
                $imageName = str_random() . '.' . $ext;
                $make = Image::make($image);
                $save = $make->resize(500, 500, function ($ar) {
                    $ar->aspectratio();
                })->save($uploadPath . '/' . $imageName);

                if ($save) {
                    if (!empty ($prevImg)) {
                        $prevImg = public_path('images/other/' . $prevImg);
                        unlink($prevImg);
                    }
                    $data['companylogo'] = $imageName;
                }
            }

            if (Other::where('id',$id)->update($data)) {
                return redirect()->route('manage-page')->with('success', 'Other Information updated successfully.');
            } else {
                return redirect()->route('manage-page')->with('error', 'Opps! There seems to be a problem, Please try again.');
            }

        }catch(\Exception $e){
            die($e->getMessage());
        }
    }
}
