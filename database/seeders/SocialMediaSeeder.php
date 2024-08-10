<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socialMediaInformations = [
            [
                'name' => 'facebook',
                'link' => 'www.facebook.com',
            ],
            [
                'name' => 'linkedin',
                'link' => 'www.linkedin.com',
            ],
            [
                'name' => 'twitter',
                'link' => 'www.x.com',
            ],
            [
                'name' => 'instagram',
                'link' => 'www.instagram.com',
            ],
            [
                'name' => 'youtube',
                'link' => 'www.instagram.com',
            ]
        ];

        foreach ($socialMediaInformations as $socialMediaInformation ){
            SocialMedia::query()->updateOrCreate(['name' => $socialMediaInformation['name']], [
                'name' => $socialMediaInformation['name'],
                'link' => $socialMediaInformation['link']
            ]);

        }
    }
}
