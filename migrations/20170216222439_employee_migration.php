<?php

use \BryKYC\Migration\Migration;

class EmployeeMigration extends Migration
{
    public function up()
    {
         $this->schema->create('employees', function(Illuminate\Database\Schema\Blueprint $table){
          // Auto-increment id
          $table->increments('id');
          $table->string('name');
          $table->string('job');
          $table->string('description');
          // Required for Eloquent's created_at and updated_at columns
          $table->timestamps();
      });
    }
    public function down()
    {
      $this->schema->drop('employees');
    }
}
