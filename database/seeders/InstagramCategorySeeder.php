<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InstagramCategory;

class InstagramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Butik & Giyim', 'color' => '#ec4899'],
            ['name' => 'Kozmetik & Güzellik', 'color' => '#8b5cf6'],
            ['name' => 'Gıda & Restoran', 'color' => '#f59e0b'],
            ['name' => 'Takı & Aksesuar', 'color' => '#10b981'],
            ['name' => 'Ev & Dekorasyon', 'color' => '#06b6d4'],
            ['name' => 'Ayakkabı & Çanta', 'color' => '#3b82f6'],
            ['name' => 'Anne & Bebek', 'color' => '#f43f5e'],
            ['name' => 'Hizmet & Danışmanlık', 'color' => '#64748b'],
            ['name' => 'E-Ticaret Dönüşüm Adayı', 'color' => '#ef4444'],
            ['name' => 'Diğer', 'color' => '#6b7280'],
        ];

        foreach ($categories as $cat) {
            InstagramCategory::firstOrCreate(
                ['name' => $cat['name']],
                ['color' => $cat['color']]
            );
        }
    }
}
