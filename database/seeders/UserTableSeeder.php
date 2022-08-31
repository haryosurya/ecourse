<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        

        $user = new User();
        $user->id=1;
        $user->name= 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('password');
        $user->role_id = 1;
        $user->save();
        
        $user->admin()->create([
            'admin_role_id'=>1,
             'notify'=>1,
         ]);
    }
}
