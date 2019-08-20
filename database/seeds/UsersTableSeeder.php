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
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'huxiaoyu';
        $user->email = '498797574@qq.com';
        $user->password = '$2y$10$IHiQ.PiA16WkpPF1n.F2duUPqU0DO7nqqkRxzRxjXhr67uTtX7f.6';
        $user->is_admin = true;
        $user->save();
    }
}
