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
            $table->string('logo', 255);
            $table->string('email');
            $table->longText('social');
            $table->string('fb_url', 255);
            $table->string('map_location', 255);
            $table->text('header_color', 255);
            $table->text('footer_color', 255);
            $table->text('body_color', 255);
            $table->text('menu_active_color', 255);
            $table->text('text_color', 255);
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
