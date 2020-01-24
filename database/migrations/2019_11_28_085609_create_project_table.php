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
            $table->string('thumbnail');

            $table->string('seo_keywords');
            $table->string('seo_description');

            $table->string('name_en');
            $table->string('name_kh');
            $table->string('name_my');
            $table->string('name_sa');

            $table->text('short_descript_en');
            $table->text('short_descript_kh');
            $table->text('short_descript_my');
            $table->text('short_descript_sa');

            $table->text('detail_en');
            $table->text('detail_kh');
            $table->text('detail_my');
            $table->text('detail_sa');

            $table->integer('view')->default(0);
            $table->integer('index')->default(0);
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
