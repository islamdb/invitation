<?php

namespace Database\Seeders;

use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateOrDelete('theme_features');

        DB::table('theme_features')
            ->insert([
                [
                    'name' => 'Penghitung Mundur (counter)',
                    'price' => 10000,
                    'desc' => 'Menghitung mundur waktu acara'
                ],
                [
                    'name' => 'Buku Tamu',
                    'price' => 10000,
                    'desc' => 'Pengisian buku tamu online'
                ],
                [
                    'name' => 'Peta Digital (maps)',
                    'price' => 10000,
                    'desc' => 'Tunjukan alamat acaramu dengan peta digital'
                ],
            ]);

        DB::table('event_types')
            ->update([
                'created_at' => now(),
                'updated_at' => now()
            ]);

//        DB::table('theme_features')
//            ->insert($this->generate([
//                'name',
//                'price' => 2000,
//                'desc',
//                'created_at' => now()->toDateTimeString(),
//                'updated_at' => now()->toDateTimeString()
//            ], [
//                ['Event Counter', null, null],
//                ['Guest', null, null],
//                ['Maps', 5000, null]
//            ]));
    }

    public function truncateOrDelete(string $table)
    {
        try {
            DB::table($table)
                ->truncate();
        } catch (QueryException $exception) {
            DB::table($table)
                ->delete();
        }
    }

    public function generate(array $columns, array $values)
    {
        $data = [];
        foreach ($values as $value) {
            $row = [];
            $c = 0;
            foreach ($columns as $key => $column) {
                if ($key == $c) {
                    $row[$column] = $value[$c];
                } else {
                    if (array_key_exists($key, $value)) {
                        if (is_null($value[$c])) {
                            $row[$key] = $column;
                        } else {
                            $row[$key] = $value[$c];
                        }
                    } else {
                        $row[$key] = $column;
                    }
                }

                $c++;
            }
            $data[] = $row;
        }

        return $data;
    }
}
