<?php

use Illuminate\Database\Seeder;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'supplier']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'client']);
        // $this->call(UsersTableSeeder::class);
    }
}
