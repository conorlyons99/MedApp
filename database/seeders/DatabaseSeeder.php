<?php
# @Date:   2020-11-16T14:46:15+00:00
# @Last modified time: 2021-01-05T12:45:31+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(DoctorSeeder::class);
    }
}
