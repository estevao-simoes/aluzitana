<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $ban = Bouncer::ability()->firstOrCreate([
            'name' => 'manage-users',
            'title' => 'Manage Users',
        ]);

        $user = factory(App\User::class, 1)->create();

        return $user->assign('admin');

    }
}
