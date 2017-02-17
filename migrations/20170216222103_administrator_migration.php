<?php

use \BryKYC\Migration\Migration;

class AdministratorMigration extends Migration
{
    public function up()
    {
      $this->schema->create('administrators', function(Illuminate\Database\Schema\Blueprint $table){
       // Auto-increment id
       $table->increments('id');
       $table->string('email');
       $table->string('password');
       $table->string('full_name');
       // Required for Eloquent's created_at and updated_at columns
       $table->timestamps();
      });
    }
    public function down()
    {
      $this->schema->drop('administrators');
    }
}
