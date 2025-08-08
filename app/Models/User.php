<?php

namespace App\Models;

use Illuminate\Support\Arr;

class User {
  public static function all(): array {
    return [
      [
        'id' => '1',
        'name' => "Caio"
      ],
      [
        'id' => '2',
        'name' => "Yasmim"
      ],
      [
        'id' => '3',
        'name' => "Carine"
      ],
      [
        'id' => '4',
        'name' => "Ana Claudia"
      ],
      [
        'id' => '5',
        'name' => 'Nilson'
      ],
      [
        'id' => '6',
        'name' => 'Henrique'
      ]
    ];
  }

  public static function find(int $id): array {
    $user = Arr::first(static::all(), fn($user) => $user['id'] == $id);

    if (!$user) {
      abort(404);
    }

    return $user;
  }
}
