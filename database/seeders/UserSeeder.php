<?php
# @Date:   2020-11-16T22:05:53+00:00
# @Last modified time: 2021-01-10T13:31:07+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
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
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Conor Lyons';
        $admin->email = 'admin@test.info';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $patient = new User();
        $patient->name = 'Johnny Dogs';
        $patient->email = 'jdogs@test.info';
        $patient->password = Hash::make('secret');
        $patient->save();
        $patient->roles()->attach($role_user);

        // $patient = new Patient();
        // $patient->address = '21 Fake Ln, Dublin 4';
        // $patient->phone = '012345678'
        // $patient->user_id = $user->id;
        // $patient->save();

        $patient = new User();
        $patient->name = 'Chris Kamara';
        $patient->email = 'ckam@test.info';
        $patient->password = Hash::make('secret');
        $patient->save();
        $patient->roles()->attach($role_user);

        $patient = new User();
        $patient->name = 'Peter Hansen';
        $patient->email = 'phansen@test.info';
        $patient->password = Hash::make('secret');
        $patient->save();
        $patient->roles()->attach($role_user);

        $patient = new User();
        $patient->name = 'Ellen Dunne';
        $patient->email = 'edunne@test.info';
        $patient->password = Hash::make('secret');
        $patient->save();
        $patient->roles()->attach($role_user);
    }
}
