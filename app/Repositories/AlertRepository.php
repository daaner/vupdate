<?php

namespace App\Repositories;

use App\Models\Info as Model;

use Cache;

class AlertRepository
{

  protected $user_id = 0;

  public function __construct() {
    if (auth()->user()) {
      $this->user_id = auth()->user()->id;
    }
  }

  public function getAlerts() {
    //нет пользователя
    if ($this->user_id == 0) {
      return collect();
    }

    $columns = [
      'id',
      'title',
      'text',
      'updated_at',
    ];

    $result = Model::select($columns)
      ->orderBy('updated_at', 'desc')
      ->take(5)
      ->get();

    return $result;

  }


  public function getCacheAlerts() {
    $cache_name = 'alerts_' . $this->user_id;

    if (Cache::has($cache_name) && !empty(Cache::get($cache_name))) {
      $data_cache = Cache::get($cache_name);
    } else {
      $data_cache = Cache::remember($cache_name, 600, function () {
        return $this->getAlerts();
      });
    }

    return $data_cache;
  }

}
