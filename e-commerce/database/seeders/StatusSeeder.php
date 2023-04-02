<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = "";
        for ($i = 0; $name != "end"; $i++) {
            $name = readline('Enter Name : ');
            if ($name != "end") {
                $slug = Str::slug($name);
                Status::insert([
                    'name' => $name,
                    'slug' => $slug,
                ]);
            }
        }
    }
}
