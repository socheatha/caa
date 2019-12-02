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
            $table->string('logo');
            $table->string('email');
            $table->string('social'); 
            $table->string('fb_url');
            $table->string('map_location');
            $table->string('header_color');
            $table->string('footer_color');
            $table->string('body_color');
            $table->string('menu_active_color');
            $table->string('text_color');

            $table->string('phone_en');
            $table->string('phone_kh');
            $table->string('phone_my');
            $table->string('phone_sa');

            $table->string('address_en');
            $table->string('address_kh');
            $table->string('address_my');
            $table->string('address_sa');

            $table->string('copyright_en');
            $table->string('copyright_kh');
            $table->string('copyright_my');
            $table->string('copyright_sa');

            $table->text('welcome_message_en');
            $table->text('welcome_message_kh');
            $table->text('welcome_message_my');
            $table->text('welcome_message_sa');

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
