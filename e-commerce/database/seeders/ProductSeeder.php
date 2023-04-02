<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            [
                'seller_id' => 1,
                'name' => 'LG Phone',
                'slug' => Str::slug('LG Phone'),
                'category_id' => 1,
                'price' => '100',
                'stock' => '100',
                'docs' => 'null',
                'discount' => '10',
                'description' => 'amazing product',
                'details' => 'Amazing details',
                'gallery' => 'https://imgs.search.brave.com/t2Q7-FfKENn_h6PaQhByB0L7qVsufMbBz6oqFWKSI0k/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly92ZW50/dXJlYmVhdC5jb20v/d3AtY29udGVudC91/cGxvYWRzLzIwMTYv/MDkvTEctVjIwLU5v/dmV0LmpwZz9maXQ9/Mzk2OCUyQzI5NzYm/c3RyaXA9YWxs',
                'ratings' => '5',
            ]
        );
        Product::insert([
            'seller_id' => 1,
            'name' => 'Tshirt',
            'slug' => Str::slug('Tshirt'),
            'category_id' => 1,
            'price' => '100',
            'stock' => '100',
            'docs' => 'null',
            'discount' => '10',
            'description' => 'amazing product',
            'details' => 'Amazing details',
            'gallery' => 'https://imgs.search.brave.com/aHOhKDTYsQI9Hb3TKZM8r6oJNZLDYQGuxeaswiL9-NA/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9tZWRp/YS5taXNzZ3VpZGVk/LmNvbS9zL21pc3Nn/dWlkZWQvVEpGMTYw/Mjlfc2V0LzMveWVs/bG93LXRpZ2VyLXBy/aW50LWdyYXBoaWMt/dC1zaGlydC5qcGc_/JHByb2R1Y3QtcGFn/ZV9fem9vbS0tM3gk',
            'ratings' => '5',
        ]);
        Product::insert([
                'seller_id' => 1,
                'name' => 'Ladies Jeans',
                'slug' => Str::slug('Ladies Jeans'),
                'category_id' => 1,
                'price' => '100',
                'stock' => '100',
                'docs' => 'null',
                'discount' => '10',
                'description' => 'amazing product',
                'details' => 'Amazing details',
                'gallery' => 'https://imgs.search.brave.com/3yFm7cFQTZhJy6dmuTZ4v0uT2npXy5BPk8lRTCYByPg/rs:fit:800:800:1/g:ce/aHR0cHM6Ly9hZTAx/LmFsaWNkbi5jb20v/a2YvSFRCMUIyajdj/NTZndXVSa1NtTHlx/NkF1bEZYYUkvU2V4/eS1Mb29zZS1IaWdo/LVdhaXN0LUZsYXJl/LVdvbWVuLUplYW5z/LUZhc2hpb24tV2lk/ZS1MZWctQm90dG9t/LUJsdWUtU2tpbm55/LURlbmltLUF1dHVt/bi1KZWFucy5qcGc',
                'ratings' => '5',
        ]);
    }
}
