<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
   *Seed the application's database.
   */
   public function run(): void
   {
      User::factory()->create([
         'name' => 'Admin',
         'email' => 'admin@admin.com',
         'account_type' => 'admin'
      ]);
      User::factory()->create([
         'name' => 'Editor',
         'email' => 'editor@edit.com',
         'account_type' => 'editor'
      ]);

      Post::factory(10)->create();
   }
}