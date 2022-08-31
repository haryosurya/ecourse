<?php

use App\Models\AdminRole;
use App\Models\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Exists;

class AddDefaultAdminRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('admin_roles')->delete(); 
        $adminRole = new AdminRole();
        $adminRole->id = 1;
        $adminRole->name = 'Super Administrator';
        $adminRole->save();

        $adminRole = new AdminRole();
        $adminRole->id = 2;
        $adminRole->name = 'Administrator';
        $adminRole->save(); 
        //create seeder for super administrator
        $permissions = Permission::get();

        $adminRole = AdminRole::find(1);
        $permissionList = [];
        foreach($permissions as $permission){
            $permissionList[] = $permission->id;
        }

        $adminRole->permissions()->sync($permissionList);


        //create seeder for administrator
        $permissions = Permission::where('permission_group_id','!=',9)->get();

        $adminRole = AdminRole::find(2);
        $permissionList = [];
        foreach($permissions as $permission){
            $permissionList[] = $permission->id;
        }

        $adminRole->permissions()->sync($permissionList);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
