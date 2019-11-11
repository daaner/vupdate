<?php

use Illuminate\Database\Seeder;
use App\User as Seedmodel;

class UsersTableSeeder extends Seeder
{
  public function run() {
    $datas = [
      [
        'name'     => 'Admin',
        'email'    => 'admin@site.com',
        'password' => '123456789',
      ],
      [
        'name'     => 'User',
        'email'    => 'user@site.com',
        'password' => '123456789',
      ],
    ];


    foreach ($datas as $data) {
      $newData = Seedmodel::where('email', '=', $data['email'])->first();
      if ($newData === null) {
        $newData = Seedmodel::create(array(
          'name'      => $data['name'],
          'email'     => $data['email'],
          'password'  =>  bcrypt ($data['password']),
        ));
      }
    }

  }
}
