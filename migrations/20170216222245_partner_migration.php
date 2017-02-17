<?php

use \BryKYC\Migration\Migration;

class PartnerMigration extends Migration
{
    public function up()
    {
        $this->schema->create('partners', function(Illuminate\Database\Schema\Blueprint $table){
         // Auto-increment id
         $table->increments('id');
         $table->string('name');
         $table->longText('quote');
         $table->string('logo');
         // Required for Eloquent's created_at and updated_at columns
         $table->timestamps();
       });
     }
   public function down()
   {
     $this->schema->drop('partners');
   }
}
