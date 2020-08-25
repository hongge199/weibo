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
        factory(User::class)->times(50)->create();
        $user = user::find(1);
        $user->name ='zhangsan';
        $user->email ='123456@qq.com';
        $user->save();
    }
}
