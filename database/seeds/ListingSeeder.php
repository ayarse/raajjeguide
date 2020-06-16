<?php

use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings')->insert([
            'title' => 'Seahouse',
            'avatar' => 'logos/seahouse.png',
            'cover_pic' => 'covers/seahouse.png',
            'address' => 'Dhiraagu Head Office, Ameenee Magu, Malé',
            'phone' => '+9603305900',
            'latitude' => '4.172362',
            'longitude' => '73.502002',
            'category_id' => '1',
            'social' => '{"socials": [
                {"key":"fb",        "value": "http: //facebook.com/seahousebrasserie"},
                {"key":"twitter",   "value": "http://twitter.com/seahousemv"},
                {"key":"website",   "value": "http://seahouse.com.mv"},
                {"key":"instagram", "value": "http://instagram.com/seahousemv"}
            ]}'
        ]);
        DB::table('listings')->insert([
            'title' => 'Seahouse Cafe',
            'avatar' => 'logos/seahouse.png',
            'cover_pic' => 'covers/seahouse.png',
            'address' => 'Dhiraagu Head Office, Ameenee Magu, Malé',
            'phone' => '+9603305900',
            'latitude' => '4.178020',
            'longitude' => '73.517134',
            'category_id' => '1',
            'social' => '{"socials": [
                {"key":"fb",        "value": "http: //facebook.com/seahousebrasserie"},
                {"key":"twitter",   "value": "http://twitter.com/seahousemv"}
            ]}'
        ]);
        DB::table('listings')->insert([
            'title' => 'Sonee Hardware',
            'avatar' => 'logos/seahouse.png',
            'cover_pic' => 'covers/seahouse.png',
            'address' => 'Dhiraagu Head Office, Ameenee Magu, Malé',
            'phone' => '+9603305900',
            'latitude' => '4.174015',
            'longitude' => '73.516113',
            'category_id' => '3',
            'social' => '{"socials": [
                {"key":"fb",        "value": "http: //facebook.com/seahousebrasserie"},
                {"key":"twitter",   "value": "http://twitter.com/seahousemv"}
            ]}'
        ]);
    }
}
