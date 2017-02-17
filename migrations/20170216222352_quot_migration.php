<?php

use \BryKYC\Migration\Migration;

class QuotMigration extends Migration
{
    public function up()
    {
          $this->schema->create('quotations', function(Illuminate\Database\Schema\Blueprint $table){
           // Auto-increment id
           $table->increments('id');
           $table->string('email');
           $table->string('phonenumber');
           $table->string('subject');
           $table->longText('message');
           // Required for Eloquent's created_at and updated_at columns
           $table->timestamps();
         });
   }
  public function down()
  {
     $this->schema->drop('quotations');
  }
}
