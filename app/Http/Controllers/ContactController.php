<?php

namespace App\Http\Controllers;

use App\Rules\Recaptcha;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      
  }

  public function submit(Request $request)
  {
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'message' => 'required|string',
        'Token'   => ['required', new Recaptcha], // 👈 validate reCAPTCHA token here
    ]);

    // Proceed safely
    // ...
  }
}
