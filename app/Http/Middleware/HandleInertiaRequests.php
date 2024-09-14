<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
   /**
   * The root template that's loaded on the first page visit.
   */
   protected $rootView = 'layouts.app';

   /**
   * Determines the current asset version.
   */
   public function version(Request $request): ?string
   {
      return parent::version($request);
   }

   /**
   * Define the props that are shared by default.
   */
   public function share(Request $request): array
   {
      return array_merge(parent::share($request),[
         'flash' => [
            'message' => fn() => $request->session()->get('message')
         ],
         'user' => [
            'name' => $request->user()?->name,
            'email' => $request->user()?->email,
         ],
         'permissions' => auth()->user()?->permissions,
      ]);
   }
}