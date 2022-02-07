<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
          [
              'name' => 'Admin',
              'email' => 'admin@blog.com',
              'password' => 'admin123',
              'is_admin' => true,
              'created_at' => date('Y-m-d H:i:s', time()),
              'updated_at' => date('Y-m-d H:i:s', time()),
          ],
          [
              'name' => 'User',
              'email' => 'user@blog.com',
              'password' => 'user123',
              'is_admin' => false,
              'created_at' => date('Y-m-d H:i:s', time()),
              'updated_at' => date('Y-m-d H:i:s', time()),
          ]
        ];

        User::insert($users);
    }
}
