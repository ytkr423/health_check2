<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //部屋番号カラム追加
            $table->string('room_no')->after('email_verified_at');
            //所属カラム追加
            $table->string('belong_to')->after('password');
            //電話番号カラム追加
            $table->string('phone_no')->after('belong_to');
            //住所カラム追加
            $table->string('address')->after('phone_no');
            //deleted_atカラム追加
            $table->softDeletes();
            
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //カラム削除
            $table->dropColumn('room_no');
            $table->dropColumn('belong_to');
            $table->dropColumn('phone_no');
            $table->dropColumn('address');
            $table->dropSoftDeletes();
            

        });
    }
}
