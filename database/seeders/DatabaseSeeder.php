<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    \App\Models\User::factory()->create([
      'name' => 'Super User',
      'email' => 'su@test.com',
    ]);
    \App\Models\User::factory()->create([
      'name' => 'Mr. Admin',
      'email' => 'admin@test.com',
    ]);
    \App\Models\User::factory()->create([
      'name' => 'Normal User',
      'email' => 'user@test.com',
    ]);
  }
}
