<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = "Ryan Freeman";
        $admin->email = "r-freeman@bookstorev1.loc";
        $admin->password = bcrypt('secret');
        $admin->save();

        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = "John Jones";
        $user->email = "johnj@bookstorev1.loc";
        $user->password = bcrypt('secret');
        $user->save();

        $user->roles()->attach($role_user);
    }
}
