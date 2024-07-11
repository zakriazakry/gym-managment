<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{

    public function login(Request $request)
    {
        if ($request->username != 'admin' || $request->password != 'admin' ) {
            return redirect()
                ->back()
                ->withInput($request->except('key'))
                ->withErrors([
                    'error' =>'اسم المستخدم او كلمة السر غير صحيحة'
                ]);
        }
        return redirect()->route('dashboardHome');
    }

}
