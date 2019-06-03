<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'rememer_token'])->toArray());

        $user = User::find(1);
        $user->name = 'zera';
        $user->email = 'zera@example.com';
        $user->save();
    }
}