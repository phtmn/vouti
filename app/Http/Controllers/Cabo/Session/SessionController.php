<?php

namespace App\Http\Controllers\Cabo\Session;

use App\Http\Controllers\Cabo\BaseController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Enum\PapelEnum;
use Auth;

class SessionController extends BaseController
{
    protected $redirectTo = '/painel/cabo-eleitoral';
    protected $guard = 'cabo';

    use AuthenticatesUsers;

    public function showLoginForm(Request $request)
    {
        // Return view
        return view('cabo.session.login');
    }

    public function authenticate(Request $request)
    {
        $validate = validator($request->all(),[
            'email'    => 'required|email|max:100',
            'password' => 'required',
        ]);

        // If fails validate
        if($validate->fails()):
            // Redirect same page with errors messages
            return redirect()->back()->withInput()->withErrors($validate->getMessageBag());
        endif;

        // Merge with active
        $request->merge(['papel_id' => PapelEnum::CABO_ELEITORAL]);

        // Authenticate user
        if (Auth::guard('cabo')->attempt($request->only('email', 'password', 'papel_id'))):
            return redirect()->route('cabo.dashboard.index');
        else:
            return redirect()->back()->withErrors(['email' => 'Email ou senha incorretos']);
        endif;
    }

    public function logout(Request $request)
    {
        $this->guard('cabo')->logout();

        $request->session()->invalidate();

        return redirect()->route('cabo.session.login');
    }
}
