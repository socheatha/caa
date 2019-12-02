<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_show', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->integer('index')->default(0);

            $table->string('seo_keywords');
            $table->string('seo_description');
            
            $table->string('name_en');
            $table->string('name_kh');
            $table->string('name_my');
            $table->string('name_sa');

            $table->string('short_desc_en');
            $table->string('short_desc_kh');
            $table->string('short_desc_my');
            $table->string('short_desc_sa');

            $table->text('detail_en');
            $table->text('detail_kh');
            $table->text('detail_my');
            $table->text('detail_sa');

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

    // protected $fillable = ['name','short_desc','detail','image','index','created_by','updated_by'];
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_show');
    }
}
