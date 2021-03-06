<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('seo_keywords');
            $table->string('seo_description');

            $table->text('detail_en')->nullable();
            $table->text('detail_kh')->nullable();
            $table->text('detail_my')->nullable();
            $table->text('detail_sa')->nullable();

            $table->timestamps();
        });

        // Insert some donation
        $donation = [
            ['seo_keywords' => 'Donation', 'seo_description' => 'Donation', 'detail_en' => 'Donation', 'detail_kh'=>'Donation', 'detail_my' => 'Donation', 'detail_sa' => 'Donation'],
        ];

        DB::table('donations')->insert($donation);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
