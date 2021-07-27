<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    // テーブルを生成するときに実行される
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');           // 自動で割り振られる番号
            $table->string('name');             // ユーザー名
            $table->string('email')->unique();  // メールアドレス
            $table->string('password');         // ログインパスワード
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  // 生成を戻すときに実行される
    {
        Schema::dropIfExists('users');
    }
}
