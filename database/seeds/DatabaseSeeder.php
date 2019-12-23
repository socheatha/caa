<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('config')->insert([
            'logo' => 'BSS Solution',
            'title_en' => 'BSS Solution',
            'title_kh' => 'BSS Solution',
            'title_my' => 'BSS Solution',
            'title_sa' => 'BSS Solution',
            'keyword' => 'BSS Solution',
            'description_en' => 'BSS Solution',
            'description_kh' => 'BSS Solution',
            'description_my' => 'BSS Solution',
            'description_sa' => 'BSS Solution',
            'email'=> Str::random(10).'@gmail.com',
            'instagram_url' => 'https://www.instagram.com',
            'fb_url' => 'https://www.facebook.com',
            'tw_url' => 'https://www.tweeter.com',
            'linkedin_url' => 'https://www.linkedin.com',
            'map_location' => 'Phnom Penh',
            'phone_en' => '096 560 0934',
            'phone_kh' => '096 560 0934',
            'phone_my' => '096 560 0934',
            'phone_sa' => '096 560 0934',
            'address_en' => 'Phnom Penh',
            'address_kh' => 'Phnom Penh',
            'address_my' => 'Phnom Penh',
            'address_sa' => 'Phnom Penh',
            'copyright_en' => 'Content copyright. Alright reserved.',
            'copyright_kh' => 'Content copyright. Alright reserved.',
            'copyright_my' => 'Content copyright. Alright reserved.',
            'copyright_sa' => 'Content copyright. Alright reserved.',
            'welcome_message_en' => 'Welcome to BSS Solution',
            'welcome_message_kh' => 'Welcome to BSS Solution',
            'welcome_message_my' => 'Welcome to BSS Solution',
            'welcome_message_sa' => 'Welcome to BSS Solution',
            'header_color' => '#000A19',
            'footer_color' => '#000A19',
            'body_color' => '#000A19',
            'menu_active_color' => '#000A19',
            'text_color' => '#000A19',
        ]);  
         
    }
}
