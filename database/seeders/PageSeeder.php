<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pages array
        $pages = [
            [
                'key' => 'home'
            ],
            [
                'key' => 'product'
            ],
            [
                'key' => 'service'
            ],
            [
                'key' => 'about'
            ],
            [
                'key' => 'project'
            ],
            [
                'key' => 'contact'
            ],
            [
                'key' => 'company'
            ],
            [
                'key' => 'blog'
            ]

        ];

        // Insert Pages
        Page::insert($pages);
    }
}
