<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_types')
            ->insert([
                [
                    'name' => 'Pernikahan',
                    'slug' => 'pernikahan',
                    'desc' => 'Undangan pernikahan digital'
                ]
            ]);

        DB::table('event_types')
            ->update([
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
