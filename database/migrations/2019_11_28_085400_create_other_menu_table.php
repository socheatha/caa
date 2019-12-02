<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_menu', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name_en');
            $table->string('name_kh');
            $table->string('name_my');
            $table->string('name_sa');

            $table->text('detail_en');
            $table->text('detail_kh');
            $table->text('detail_my');
            $table->text('detail_sa');

            $table->integer('index')->default(0);
            $table->string('url', 255);
            $table->integer('status')->default(1);
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

	// protected $fillable = ['name','url','index','status','created_by','updated_by'];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_menu');
    }
}
