<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Medcine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Medcine::factory()->create([
            'medcine' => 'أسبرين',
            'description' =>
            ' يُستخدم كمسكن للألم ومضاد للالتهابات، ويُفيد في تقليل الحمى.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'باراسيتامول ',
            'description' =>
            ' يستخدم لتخفيف الألم وخفض الحمى، ولكنه ليس مضادًا للالتهابات.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'إيبوبروفين ',
            'description' =>
            ' مسكن للألم ومضاد للالتهابات، يُستخدم لعلاج الآلام والتهابات المفاصل.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'أموكسيسيلين ',
            'description' =>
            ' مضاد حيوي يُستخدم لعلاج الالتهابات البكتيرية، مثل التهابات الجهاز التنفسي.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'لوراتادين ',
            'description' =>
            ' مضاد للهيستامين يُستخدم لعلاج الحساسية وأعراض الزكام.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'سيرترالين ',
            'description' =>
            ' مضاد للاكتئاب يستخدم لعلاج اضطرابات المزاج والاكتئاب.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'ليفوثيروكسين ',
            'description' =>
            ' هرمون الغدة الدرقية يستخدم لعلاج نقص الغدة الدرقية.
'
        ]);
        Medcine::factory()->create([
            'medcine' => 'هيدروكلوروكوين ',
            'description' =>
            ' يستخدم لعلاج بعض أمراض المناعة الذاتية والملاريا.

'
        ]);
    }
}