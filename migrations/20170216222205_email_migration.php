<?php

use \BryKYC\Migration\Migration;

class EmailMigration extends Migration
{
    public function up()
    {
        $this->schema->create('emails', function(Illuminate\Database\Schema\Blueprint $table){
         // Auto-increment id
         $table->increments('id');
         $table->string('email');
         $table->string('subject');
         $table->longText('message');
         // Required for Eloquent's created_at and updated_at columns
         $table->timestamps();
     });
   }
   public function down()
   {
     $this->schema->drop('emails');
   }
}
