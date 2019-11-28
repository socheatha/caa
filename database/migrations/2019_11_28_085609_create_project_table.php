<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name');
            $table->longText('detail');
            $table->longText('short_descript');
            $table->string('thumbnail');
            $table->integer('view');
            $table->integer('index');
            $table->integer('status')->default(1);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('project_category')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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

    // protected $fillable = ['name','detail','short_descript','thumbnail','view','index','status','category_id','created_by','updated_by'];
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
