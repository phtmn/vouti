<?php

namespace App\Http\Controllers\Cabo\Session;

use App\Http\Controllers\Cabo\BaseController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ResetPasswordController extends BaseController
{
  use SEOToolsTrait;
  use ResetsPasswords;

  protected $redirectTo = '/cabo-eleitoral';

  public function guard()
  {
    return Auth::guard('agent');
  }

  public function broker()
  {
    return Password::broker('agents');
  }

  public function showResetForm(Request $request, $token = null)
  {
    // Set meta tags
    $this->seo()->setTitle('Cadastrar nova senha | Área do Corretor');

    // Set opengraph tags
    $this->seo()->opengraph()->setTitle('Cadastrar nova senha')
                ->addImage(asset('/assets/images/facebook.jpg'));

    // Return view
    return view('agent.passwords.reset')->with(
      ['token' => $token, 'email' => $request->email]
    );
  }

  /**
   * Reset the given user's password.
   */
  public function reset(Request $request)
  {
    $validate = validator($request->all(),[
      'token' => 'required',
      'email' => 'required|email|max:100',
      'password' => 'required|min:8|confirmed',
      'password_confirmation' => 'required_with:password'
    ]);

    // If fails validate
    if($validate->fails()):
      // Return error response
      return response()->json([
        'success' => false,
        'data' => $validate->getMessageBag()
      ], 400);
    endif;

    $response = $this->broker()->reset(
      $this->credentials($request), function ($user, $password) {
        $this->resetPassword($user, $password);
      }
    );

    if ($response == Password::PASSWORD_RESET):
      // Return success response
      return response()->json([
        'success' => true,
        'redirect' => route('agent.dashboard.index')
      ], 200);
    else:
      // Return error response
      return response()->json([
        'success' => false,
        'data' => [
          'email' => trans($response)
        ]
      ], 400);
    endif;
  }
}
