<?php

namespace App\Http\Controllers\Cabo\Dashboard;

use App\Http\Controllers\Cabo\BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
  /**
   * Return index
   **/
  public function index()
  {
    // Return view
    return view('cabo.dashboard.index');
  }
}
