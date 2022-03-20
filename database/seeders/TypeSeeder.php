<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $type = new Type();
        $type->name = "Thời Trang Nam";
        // $type->description = "Day la quan ao nam";
        // $type->parent_id=0;
        $type->save();

        // $type = new Type();
        // $type->name = "Do Dien Tu";
        // // $type->description = "Day la quan ao nam";
        // // $type->parent_id=0;
        // $type->save();

        // $type = new Type();
        // $type->name = "Do Gia Dung";
        // // $type->description = "Day la quan ao nam";
        // // $type->parent_id=0;
        // $type->save();

        // $type = new Type();
        // $type->name = "Do Nhap Khau";
        // // $type->description = "Day la quan ao nam";
        // // $type->parent_id=0;
        // $type->save();
        // Type::factory(20)->create();
    }
}
