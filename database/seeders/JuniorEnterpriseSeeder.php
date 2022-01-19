<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Core;
use App\Models\JuniorEnterprise;

class JuniorEnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $core = Core::where('name', 'Triângulo')->first();

        JuniorEnterprise::create([
            'name' => 'Concreta - Soluções em Engenharia',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/1038/15873453_1205382942848632_4776490536798662294_n.png',
            'core_id' => $core->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'InfoAlto Empresa Júnior',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/679/logo-infoalto-colorida.png',
            'core_id' => $core->id,
        ]);
    }
}
