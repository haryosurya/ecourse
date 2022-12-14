<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnrollmentMessageToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
            $setting = new Setting();
            $setting->fill([
            'key'=>'regis_enroll_mail',
            'type'=>'textarea',
            'class'=>'rte',
            ]);
            $setting->save();
        });
        Schema::table('settings', function (Blueprint $table) {
            $name = $table->getTable();
            $prefix = \Illuminate\Support\Facades\DB::getTablePrefix();
            $name = $prefix.$name;

            $values = [
                'menu_show_blog','menu_show_contact','menu_show_articles','menu_show_attended'
            ];

            foreach ($values as $value) {
                \Illuminate\Support\Facades\DB::statement("DELETE FROM {$name} WHERE {$name}.key='{$value}'");
            }



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
