<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->delete();
        

        // $user = new User();
        // $user->id=1;
        // $user->name= 'Admin';
        // $user->email = 'admin@admin.com';
        // $user->password = bcrypt('password');
        // $user->role_id = 1;
        // $user->save();
        
        // $user->admins()->create([
        //     'admin_role_id'=>1,
        //      'notify'=>1,
        //  ]);
        DB::table('indonesia_villages')->delete(); 
        DB::table('indonesia_districts')->delete();
        DB::table('indonesia_cities')->delete();
        DB::table('indonesia_provinces')->delete();
        $this->call([
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
            VillagesSeeder::class,
        ]);
        $this->call(UserTableSeeder::class);
        // User::factory(10)->create();
    }
}
