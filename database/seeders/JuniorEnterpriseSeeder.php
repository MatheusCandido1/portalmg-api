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
        $triangulo = Core::where('name', 'Triângulo')->first();
        $mata = Core::where('name', 'Mata')->first();
        $central = Core::where('name', 'Central')->first();
        $sul = Core::where('name', 'Sul')->first();
        $vertentes = Core::where('name', 'Vertentes')->first();
        $nuva = Core::where('name', 'Vale do Aço')->first();

        JuniorEnterprise::create([
            'name' => 'Concreta - Soluções em Engenharia',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/1038/15873453_1205382942848632_4776490536798662294_n.png',
            'core_id' => $triangulo->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'InfoAlto Empresa Júnior',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/679/logo-infoalto-colorida.png',
            'core_id' => $triangulo->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Porte Empresa Júnior',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/52/Logo_Porte.png',
            'core_id' => $mata->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Code Empresa Júnior de Computação',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/11/LOGO_CODE_1.png',
            'core_id' => $mata->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'UNIFEI JUNIOR',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/56/Unifei_Jr..png',
            'core_id' => $sul->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Concampo Jr - Consultoria e Pesquisa Agrícola',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/1796/Logo_-_Png.png',
            'core_id' => $triangulo->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Cria UFMG',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/7/identidade_visual_cria_ufmg-14.png',
            'core_id' => $central->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'EMAS Jr. Consultoria',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/39/Logotipo_EMAS-01.png',
            'core_id' => $central->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Soluções Consultoria',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/55/COM_-_LOGO_-_COLORIDA_3__1_.png',
            'core_id' => $mata->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'ConsultEQ - Empresa Júnior de Soluções em Engenharia Química',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/201/10.png',
            'core_id' => $triangulo->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Ideal Consultoria Jr.',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/202/Logo_Transparente.png',
            'core_id' => $vertentes->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Arq Jr. Projetos e Consultorias',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/213/NovaLogo_ArqJr.png',
            'core_id' => $vertentes->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'UP Consultoria Jr.',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/211/FotoUP_portal.png',
            'core_id' => $nuva->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Projet',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/242/logo.png',
            'core_id' => $vertentes->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Arché Empresa Júnior',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/244/logo_vetor-02.png',
            'core_id' => $vertentes->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'SEC Jr. Consultoria',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/435/pp__2_.jpeg',
            'core_id' => $mata->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Ambiental Jr.',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/395/Roda.png',
            'core_id' => $mata->id,
        ]);

        JuniorEnterprise::create([
            'name' => 'Preserva Jr. Projetos e Consultoria Ambiental e Sanitária',
            'logo' => 'https://uploads.brasiljunior.org.br/uploads/ej/image/293/15658648_1197571730333651_73079614_o.jpg',
            'core_id' => $sul->id,
        ]);
    }
}
