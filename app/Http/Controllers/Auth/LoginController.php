<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
   public function store(LoginRequest $request)
   {
      $request->authenticate();
      $request->session()->regenerate();

      return redirect()->intended(route('posts.index'));
   }

   public function destroy(Request $request)
   {
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect()->route('login');
   }
}