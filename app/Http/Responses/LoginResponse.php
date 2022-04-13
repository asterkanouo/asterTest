<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        if(auth()->user()->is_admin){
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route(route: 'admin_dashboard');
        } else if(auth()->user()->is_vendeur){
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route(route: 'vendeur_dashboard');
        } 
        return $request->wantsJson()
        ? response()->json(['two_factor' => false])
        : redirect()->intended(Fortify::redirects('login'));
    }
}
