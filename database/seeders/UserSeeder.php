<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = Uuid::uuid4()->toString();
        $user->name = 'Admin';
        $user->email = 'admin@a.com';
        $user->password = bcrypt('1234');

        $user->save();
        $user = new User();
        $user->id = Uuid::uuid4()->toString();
        $user->name = 'konejo';
        $user->email = 'kone@a.com';
        $user->password = bcrypt('1234');

        $user->save();

    }
}