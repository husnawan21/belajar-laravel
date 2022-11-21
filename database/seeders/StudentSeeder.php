<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Schema::disableForeignKeyConstraints();
    // Student::truncate();
    // Schema::enableForeignKeyConstraints();

    // $data = [
    //     ['name' => 'Ayu', 'gender' => 'P', 'nis' => '1001', 'class_id' => 1],
    //     ['name' => 'Budi', 'gender' => 'L', 'nis' => '1002', 'class_id' => 2],
    //     ['name' => 'Wahyu', 'gender' => 'L', 'nis' => '1003', 'class_id' => 2],
    //     ['name' => 'Doni', 'gender' => 'L', 'nis' => '1004', 'class_id' => 1],
    // ];

    // foreach ($data as $value) {
    //     Student::insert([
    //         'name' => $value['name'],
    //         'gender' => $value['gender'],
    //         'nis' => $value['nis'],
    //         'class_id' => $value['class_id'],
    //         'created_at' => Carbon::now(),
    //         'updated_at' => Carbon::now(),
    //     ]);
    // }

    Student::factory(20)->create();
  }
}
