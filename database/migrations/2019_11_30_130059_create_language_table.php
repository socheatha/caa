<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language_en');
            $table->string('language_kh');
            $table->string('language_my');
            $table->string('language_sa');
            $table->string('nationality');
            $table->text('detail');
            $table->integer('index')->default(0);
            $table->integer('status')->default(1);
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

            
        // Insert some languages
        $languages = [
            ['language' => 'English', 'nationality' => 'en', 'index' => '1', 'status'=>'1', 'detail' => 'English'],
            ['language' => 'Khmer', 'nationality' => 'kh', 'index' => '2', 'status'=>'1', 'detail' => 'Khmer'],
            ['language' => 'Malay', 'nationality' => 'my', 'index' => '3', 'status'=>'1', 'detail' => 'Malay'],
            ['language' => 'Arab', 'nationality' => 'sa', 'index' => '4', 'status'=>'1', 'detail' => 'Arab'],
        ];

        DB::table('language')->insert($languages);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language');
    }
}
