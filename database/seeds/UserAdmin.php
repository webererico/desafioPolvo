<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Administrador',
            'email'=> 'admin@admin.com',
            'admin'=> true,
            'password'=> Hash::make('password'),
            'created_at'=> Carbon::now(),
        ]);
    }
}
