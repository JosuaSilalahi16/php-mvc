<?php
// app/Http/Controllers/Auth/LoginController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function showLoginForm()
  {
    return view('auth.login');
  }
  public function login(Request $request)
  {
    $credentials = $request->only('email', 'password');
    // Check credentials without encryption
    $user = DB::table('users')
      ->where('email', $credentials['email'])
      ->where('password', $credentials['password'])
      ->first();
    if ($user) {
      Auth::loginUsingId($user->UserID);
      $request->session()->regenerate();
      return redirect()->intended('/admin/dashboard');
    }
    return back()->with('error', 'Login details are not valid');
    
  }
  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
  }
}