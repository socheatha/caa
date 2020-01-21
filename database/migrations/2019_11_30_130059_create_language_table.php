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
            ['language_en' => 'English', 'language_kh' => 'អង់គ្លេស', 'language_my' => 'Bahasa Inggeris', 'language_sa' => 'الإنجليزية', 'nationality' => 'en', 'index' => '1', 'status'=>'1', 'detail' => 'English'],
            ['language_en' => 'Khmer', 'language_kh' => 'ខ្មែរ', 'language_my' => 'Khmer', 'language_sa' => 'الخمير', 'nationality' => 'kh', 'index' => '2', 'status'=>'1', 'detail' => 'Khmer'],
            ['language_en' => 'Malay', 'language_kh' => 'ម៉ាឡេស៊ី', 'language_my' => 'Melayu', 'language_sa' => 'لغة الملايو', 'nationality' => 'my', 'index' => '3', 'status'=>'1', 'detail' => 'Malay'],
            ['language_en' => 'Arab', 'language_kh' => 'អារ៉ាប់', 'language_my' => 'Arab', 'language_sa' => 'عرب', 'nationality' => 'sa', 'index' => '4', 'status'=>'1', 'detail' => 'Arab'],
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
