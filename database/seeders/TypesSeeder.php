<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Database',
            'Back-End',
            'Front-end',

               ];


        foreach($types as $type) {

            $newType = new Types();

            $newType->title = $type;

            $newType->save();

        }
}
}
