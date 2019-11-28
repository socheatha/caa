<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name');
            $table->longText('detail');
            $table->string('soft', 255);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('updated_by')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    // protected $fillable = ['name','soft','detail','created_by','updated_by'];
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document');
    }
}
