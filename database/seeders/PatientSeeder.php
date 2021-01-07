<?php
# @Date:   2021-01-05T12:21:15+00:00
# @Last modified time: 2021-01-05T12:58:50+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Role;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_role = Role::where('name', 'user')->first();

      foreach ($user_role->users as $user) {
        $patient = new Patient();
        $patient->address = rand(1, 100) . " Main Street";
        $patient->phone = '0' . $this->random_str(3, '0123456789') . '-' . $this->random_str(7, '0123456789');
        $patient->user_id = $user->id;
        $patient->save();
      }
    }

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
      $pieces = [];
      $max = mb_strlen($keyspace, '8bit') - 1;
      for ($i = 0; $i < $length; ++$i){
        $pieces [] = $keyspace[random_int(0, $max)];
      }
      return implode('', $pieces);
    }
}
