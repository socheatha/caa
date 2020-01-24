<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_menu', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name_en');
            $table->string('name_kh');
            $table->string('name_my');
            $table->string('name_sa');
            
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
            
            // Insert some main_menus
            $main_menus = [
                ['name_en' => 'Home', 'name_kh' => 'ផ្ទាំងដើម', 'name_my' => 'BahaRumah', 'name_sa' => 'الصفحة الرئيسية', 'index' => '1', 'url' => 'http://charity-website.bsssolution.com/', 'status'=>'1', 'created_by' => '1', 'updated_by' => '1'],
                ['name_en' => 'About Us', 'name_kh' => 'អំពីយើងខ្ញុំ', 'name_my' => 'Tentang kita', 'name_sa' => 'معلومات عنا', 'index' => '2', 'url' => 'http://charity-website.bsssolution.com/about-us', 'status'=>'1', 'created_by' => '1', 'updated_by' => '1'],
                ['name_en' => 'Contact Us', 'name_kh' => 'ទាក់ទងយើងខ្ញុំ', 'name_my' => 'Hubungi Kami', 'name_sa' => 'اتصل بنا', 'index' => '3', 'url' => 'http://charity-website.bsssolution.com/contact-us', 'status'=>'1', 'created_by' => '1', 'updated_by' => '1'],
                ['name_en' => 'Donation', 'name_kh' => 'ការបរិច្ចាក', 'name_my' => 'Derma', 'name_sa' => 'هبة', 'index' => '4', 'url' => 'http://charity-website.bsssolution.com/donation', 'status'=>'1', 'created_by' => '1', 'updated_by' => '1'],
                ['name_en' => 'Projects', 'name_kh' => 'គម្រោង', 'name_my' => 'Projek', 'name_sa' => 'مشروع', 'index' => '4', 'url' => 'http://charity-website.bsssolution.com/donation', 'status'=>'1', 'created_by' => '1', 'updated_by' => '1'],
                ['name_en' => 'Activities', 'name_kh' => 'សកម្មភាព', 'name_my' => 'Aktiviti', 'name_sa' => 'نشاط', 'index' => '4', 'url' => 'http://charity-website.bsssolution.com/donation', 'status'=>'1', 'created_by' => '1', 'updated_by' => '1'],
            ];
    
            DB::table('main_menu')->insert($main_menus);
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
        Schema::dropIfExists('main_menu');
    }
}
