<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->nullable()->constrained('roles');
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->string('address');
            $table->date('birthday')->nullable();
            $table->enum('gender',['Nam', 'Nữ']);
            $table->integer('identity_card')->nullable();
            $table->date('day_issue')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
