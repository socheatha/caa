<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('title_en', 255)->nullable();
            $table->string('title_kh', 255)->nullable();
            $table->string('title_my', 255)->nullable();
            $table->string('title_sa', 255)->nullable();
            $table->string('keyword', 255)->nullable();
            $table->string('description_en', 255)->nullable();
            $table->string('description_kh', 255)->nullable();
            $table->string('description_my', 255)->nullable();
            $table->string('description_sa', 255)->nullable();
            
            $table->string('header_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('menu_active_color')->nullable();
            $table->string('body_color')->nullable();
            $table->string('footer_color')->nullable();
            
            $table->string('email', 255)->nullable();
            $table->string('fb_url', 255)->nullable();
            $table->string('instagram_url', 255)->nullable(); 
            $table->string('tw_url', 255)->nullable();
            $table->string('linkedin_url', 255)->nullable();
            $table->text('map_location')->nullable();

            $table->text('welcome_message_en')->nullable();
            $table->text('welcome_message_kh')->nullable();
            $table->text('welcome_message_my')->nullable();
            $table->text('welcome_message_sa')->nullable();

            $table->string('phone_en')->nullable();
            $table->string('phone_kh')->nullable();
            $table->string('phone_my')->nullable();
            $table->string('phone_sa')->nullable();

            $table->string('address_en', 255)->nullable();
            $table->string('address_kh', 255)->nullable();
            $table->string('address_my', 255)->nullable();
            $table->string('address_sa', 255)->nullable();

            $table->string('copyright_en', 255)->nullable();
            $table->string('copyright_kh', 255)->nullable();
            $table->string('copyright_my', 255)->nullable();
            $table->string('copyright_sa', 255)->nullable();

            $table->text('sidebar_right')->nullable();

            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
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

    // protected $fillable = ['logo','email','phone','address','copyright','social','fb_url','map_location','welcome_message','header_color','footer_color','body_color','menu_active_color','text_color','created_by','updated_by'];
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config');
    }
}
