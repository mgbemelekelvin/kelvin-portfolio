<?php

namespace App\Http\Controllers;

use App\Exports\SubscribersExport;
use App\Models\CompanyInfo;
use App\Models\Feedback;
use App\Models\Subscriber;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function adminDashboard()
    {
        $title = 'Admin Dashboard';
        $nav = 'admin_dashboard';
        return view('auth.dashboard', compact('title', 'nav'));
    }

    public function feedbacks()
    {
        $title = 'Feedbacks';
        $nav = 'feedback';
        $feedbacks = Feedback::orderByDesc('created_at')->get();
        return view('auth.feedbacks', compact('title', 'nav','feedbacks'));
    }

    public function changePassword()
    {
        $title = 'Change Password';
        $nav = 'change_password';
        return view('auth.change_password', compact('title', 'nav'));
    }

    public function changePasswordPost(Request $request)
    {
        $validator_1 = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => ['required', 'confirmed', Password::min(6)->letters()->mixedCase()->numbers()->symbols()->uncompromised(3)],
        ]);
        if ($validator_1->fails()) {
            return back()->with('failed', $validator_1->messages()->all());
        }
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->with('failed','You have entered an incorrect Old Password');
        }
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        return back()->with('success','Password Changed Successfully');
    }
}
