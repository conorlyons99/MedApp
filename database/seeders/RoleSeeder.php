<?php
# @Date:   2020-11-16T22:05:26+00:00
# @Last modified time: 2021-01-05T13:03:32+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An Admin';
        $role_admin->save();

        $role_doctor = new Role();
        $role_doctor->name = 'doctor';
        $role_doctor->description = 'A Doctor';
        $role_doctor->save();

        $role_patient = new Role();
        $role_patient->name = 'user';
        $role_patient->description = 'A Hospital User';
        $role_patient->save();
    }
}
