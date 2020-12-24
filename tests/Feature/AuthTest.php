<?php
# @Date:   2020-12-01T09:32:09+00:00
# @Last modified time: 2020-12-01T10:52:34+00:00




namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class AuthTest extends TestCase
{
  public function testUserNeedsToBeLoggedInToSeeDashboard(){
    $response = $this->get('/home')->assertRedirect('/login');
  }

  public function testUserWithUserRoleCanAccessUserDashboard(){
    $user = User::factory()->create();
    $user->roles()->attach(Role::where('name','patient')->first());

    $this->actingAs($user);
    $response = $this->get('/patient/home')->assertOk();
  }

  public function testUserCannotAccessAdminDashboard(){
    $user = User::factory()->create();
    $user->roles()->attach(Role::where('name','user')->first());

    $this->actingAs($user);
    $response = $this->get('/admin/home')->assertRedirect('/home');
  }
}
