<?php
# @Date:   2021-01-04T12:04:35+00:00
# @Last modified time: 2021-01-04T12:07:37+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = new Doctor();
        $doctor->firstName="John";
        $doctor->lastName="Moss";
        $doctor->email="jmoss@email.info";
        $doctor->save();

        $doctor = new Doctor();
        $doctor->firstName="Ciara";
        $doctor->lastName="O'Reilly";
        $doctor->email="creilly@email.info";
        $doctor->save();

        $doctor = new Doctor();
        $doctor->firstName="Peter";
        $doctor->lastName="Hanley";
        $doctor->email="phanley@test.info";
        $doctor->save();

        $doctor = new Doctor();
        $doctor->firstName="Rebecca";
        $doctor->lastName="Moran";
        $doctor->email="rmoran@test.info";
        $doctor->save();

    }
}
