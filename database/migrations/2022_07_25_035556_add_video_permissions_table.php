<?php

use App\Models\AdminRole;
use App\Models\Permission;
use App\Models\PermissionGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        PermissionGroup::insert([[
            'id'=>'18',
            'name'=>'video',
            'sort_order'=>'18'
        ]]);

        Permission::insert(
            [
                [
                    'name'=>'view_videos',
                    'permission_group_id'=>18
                ],
                [
                    'name'=>'add_video',
                    'permission_group_id'=>18
                ],
                [
                    'name'=>'edit_video',
                    'permission_group_id'=>18
                ],
                [
                    'name'=>'delete_video',
                    'permission_group_id'=>18
                ],
                [
                    'name'=>'play_video',
                    'permission_group_id'=>18
                ],
                [
                    'name'=>'view_video_space',
                    'permission_group_id'=>18
                ]
        ]);


        //create seeder for super administrator
        $permissions = Permission::get();

        $adminRole = AdminRole::find(1);
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
