<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Core;

class CoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Core::create([
            'name' => 'Central',
            'fullname' => 'Núcleo Central',
            'backgroundColor' => '#e8306b',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/dd74'
        ]);

        Core::create([
            'name' => 'Mata',
            'fullname' => 'Núcleo da Mata',
            'backgroundColor' => '#054d4f',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/dd8g'
        ]);

        Core::create([
            'name' => 'Norte',
            'fullname' => 'Núcleo Norte',
            'backgroundColor' => '#0067e2',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/dd8e'
        ]);

        Core::create([
            'name' => 'Sul',
            'fullname' => 'Núcleo Sul',
            'backgroundColor' => '#971d6f',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/dd8d'
        ]);

        Core::create([
            'name' => 'Triângulo',
            'fullname' => 'Núcleo Triângulo',
            'backgroundColor' => '#fb6e64',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/ddqi'
        ]);

        Core::create([
            'name' => 'Vale do Aço',
            'fullname' => 'Núcleo Vale do Aço',
            'backgroundColor' => '#ff7200',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/dd8f'
        ]);

        Core::create([
            'name' => 'Vertentes',
            'fullname' => 'Núcleo',
            'backgroundColor' => '#f9c800',
            'color' => '#FFF',
            'logo' => 'https://hmp.me/dd73'
        ]);
    }
}
