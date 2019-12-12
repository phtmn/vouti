<?php

namespace App\Http\Controllers\Cabo\Session;

use App\Http\Controllers\Cabo\BaseController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use App\Notifications\CaboEmailForgot;
use App\Models\User;
use App\Enum\PapelEnum;

class ForgotPasswordController extends BaseController
{
  use SendsPasswordResetEmails;

  public function broker()
  {
    return Password::broker('cabos');
  }

  public function showLinkRequestForm()
  {
    // Return view
    return view('cabo.passwords.forgot');
  }

    public function sendResetLinkEmail(Request $request)
    {

        $validate = validator($request->all(),[
            'email' => 'required|email|max:100'
        ]);

        $user = User::where('email', $request->email)->where('papel_id', PapelEnum::CABO_ELEITORAL)->firstOrFail();

        $password = random_string('alnum', 7);

        $user->update([
            'password' => bcrypt($password),
        ]);

        $user->notify(new CaboEmailForgot($password));

        return redirect()->route('cabo.session.login')
                    ->with('msg', 'Nova Senha enviada para o email cadastrado');

    }
}
