<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AlertRepository;

class AlertController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * getList Information
  */
  public function getInfo(Request $request)
  {
    $error = 'Нет записей';
    $count = 0;

    $alert = new AlertRepository;
    $lists = $alert->getAlerts();
    if (!$lists->isEmpty()) {
      $error = '';
      $count = $lists->count();
    }
    if ($request->isRead) {
      //прочитанная инфо
    }


    $data = [
      'success' => true,
      'error' => $error,
      'count' => $count,
      'lists' => $lists,
    ];

    return $data;
  }
}
