<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        \App\Models\User::factory()->createMany([
        [
            'name' => 'Gian Lucca Quaglio',
            'role' => 'admin',
            'email' => 'gianluccaz@hotmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ],
        [
            'name' => 'Sergio Quaglio',
            'role' => 'admin',
            'email' => 'sergio@quaglio.com.br',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ],
        [
            'name' => 'User Test',
            'role' => 'user',
            'email' => 'test@test.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]
        ]);

        \App\Models\Ticket::factory()->createMany([
            [
                'situation' => 'Oscilando'
            ],
            [
                'situation' => 'Perda de Pacotes'
            ],
            [
                'situation' => 'Inoperante'
            ],
        ]);

        \App\Models\Carrier::factory()->createMany([
            [
                'name' => 'Vivo'
            ],
            [
                'name' => 'Algar'
            ],
            [
                'name' => 'Telium'
            ],
        ]);

        \App\Models\Facility::factory()->createMany([
            [
                'name' => 'Shop Ibirapuera - iP',
                'address' => 'Avenida Ibirapuera, 3103 SUC 97/98 - iP',
                'designation' => '0386212019 / 0401835025',
                'carrier_id' => 1
            ],
            [
                'name' => 'América Medical City - iP',
                'address' => 'Avenida Jorge Curi, 550 - iP',
                'designation' => '21000-01372702-9-8',
                'carrier_id' => 1
            ],
            [
                'name' => 'Shopping Barra - iP',
                'address' => 'Avenida das Américas, 4666 Descarga 10 - iP',
                'designation' => '21000-01372678-9-1',
                'carrier_id' => 1
            ],
            [
                'name' => 'Matriz Brasilia - iP',
                'address' => 'QUADRA SCS Quadra 9, Lote C 8º Andar - iP',
                'designation' => '61000-01409387-9-1',
                'carrier_id' => 1
            ],
            [
                'name' => 'Shop Rio Sul Vendas - iP',
                'address' => 'Rua Lauro Muller, 116, Lj 15A - iP',
                'designation' => '21000-01406573-9-8',
                'carrier_id' => 1
            ],
            [
                'name' => 'Shop Rio Sul Vendas - L2L',
                'address' => 'Rua Lauro Muller, 116, Lj 15A - L2L',
                'designation' => '08892443 e 44',
                'carrier_id' => 2
            ],
            [
                'name' => 'Malibu - iP',
                'address' => 'Avenida Pastor Martin Luther King Júnior, 126, 7º andar - iP',
                'designation' => '08819976 ou 08900973',
                'carrier_id' => 1
            ],
            [
                'name' => 'Malibu - L2L',
                'address' => 'Avenida Pastor Martin Luther King Júnior, 126, 7º andar - L2L',
                'designation' => '08892449 e 50',
                'carrier_id' => 2
            ],
            [
                'name' => 'ERRO - UNIDADE 9',
                'address' => 'erro9',
                'designation' => 'erro9',
                'carrier_id' => 2
            ],
            [
                'name' => 'Matriz Curitiba - L2L',
                'address' => 'Av. do Batel - Curitiba L2L',
                'designation' => '08892455 e 56',
                'carrier_id' => 2
            ],
            [
                'name' => 'Sede Brasil - L2L - 100',
                'address' => 'Av. Brig. Luis Antonio, 3521 - L2L',
                'designation' => '08892451 e 52',
                'carrier_id' => 2
            ],
            [
                'name' => 'Matriz Porto Alegre - L2L',
                'address' => 'Av. Carlos Gomes - Porto Alegre L2L',
                'designation' => '08892453 e 54',
                'carrier_id' => 2
            ],
            [
                'name' => 'Centro Médico Barra Shopping - iP',
                'address' => 'CM 1 - Avenida das Américas, 4666 - Lj 316, 317 e 318s - iP',
                'designation' => '75688-1',
                'carrier_id' => 3
            ],
            [
                'name' => 'Sede Brasil - iP',
                'address' => 'Av. Brig. Luis Antonio, 3521 - iP',
                'designation' => '77447-1',
                'carrier_id' => 3
            ],
            [
                'name' => 'ERRO - UNIDADE 15',
                'address' => 'erro15',
                'designation' => 'erro15',
                'carrier_id' => 2
            ],
            [
                'name' => 'Matriz Curitiba - iP',
                'address' => 'Av. do Batel - Curitiba - iP',
                'designation' => '08899029',
                'carrier_id' => 2
            ],
            [
                'name' => 'Nova América Office 3000 - L2L',
                'address' => 'Nova América Lj 1548 - L2L - RJ',
                'designation' => '08892445 e 46',
                'carrier_id' => 2
            ],
            [
                'name' => 'PASM Paris - L2L',
                'address' => 'Rua Gal. Chagas Santos, 314 - L2L - SP',
                'designation' => '08892447 e 8',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM São Bernardo do Campo - L2L',
                'address' => 'Av. Caminho do Mar, 2645 - L2L - SBC',
                'designation' => '08824799',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Mooca - L2L',
                'address' => 'Rua Figueira, 831 - L2L',
                'designation' => '08820055',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Itaim - L2L',
                'address' => 'Av. Santo Amaro,22 - L2L',
                'designation' => '08820554',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Paraíso - L2L',
                'address' => 'Rua Maestro Cardim, 1137 - L2L',
                'designation' => '09048718',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Pinheiros - L2L',
                'address' => 'Rua Cristiano Viana, 890 - L2L',
                'designation' => '09056959',
                'carrier_id' => 2
            ],
            [
                'name' => 'Casa do Ator - iP',
                'address' => 'Rua Casa do Ator, 1155 - IP',
                'designation' => '08840962',
                'carrier_id' => 2
            ],
            [
                'name' => 'Vergueiro - L2L',
                'address' => 'Rua Vergueiro, 1695 - L2L - 50Mb',
                'designation' => '09050065',
                'carrier_id' => 2
            ],
            [
                'name' => 'PASM Tatuapé - L2L',
                'address' => 'Rua Uriel Gaspar, 150 - L2L',
                'designation' => '09050081',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Alto da Mooca - L2L',
                'address' => 'Rua Tamarataca, 127 - L2L',
                'designation' => '',
                'carrier_id' => 2
            ],
            [
                'name' => 'Estevão Pernet - L2L',
                'address' => 'Rua Padre Estevão Pernet, 551 - L2L',
                'designation' => '09050090',
                'carrier_id' => 2
            ],
            [
                'name' => 'Clodomiro Amazonas - L2L',
                'address' => 'Rua Clodomiro Amazonas, 150 - L2L',
                'designation' => '09050124',
                'carrier_id' => 2
            ],
            [
                'name' => 'PASM Brigadeiro - L2L',
                'address' => 'Av. Brig Luis Antonio, 4312 - L2L',
                'designation' => '',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Londres - L2L',
                'address' => 'Av. Pedroso de Morais, 848 - L2L',
                'designation' => '09050129',
                'carrier_id' => 2
            ],
            [
                'name' => 'Brigadeiro Gastro - L2L',
                'address' => 'Av. Brig Luis Antonio, 4677 - L2L',
                'designation' => '09050266',
                'carrier_id' => 2
            ],
            [
                'name' => 'PASM Paris - L2La',
                'address' => 'Rua Gal. Chagas Santos, 314 - L2L (A)',
                'designation' => '09050096',
                'carrier_id' => 2
            ],
            [
                'name' => 'Anália Franco - L2L',
                'address' => 'Rua José Oscar Abreu Sampaio, 350 - L2L',
                'designation' => '09050077',
                'carrier_id' => 2
            ],
            [
                'name' => 'Conselheiro Saraiva - L2L',
                'address' => 'Rua Conselheiro Saraiva, 328 - L2L',
                'designation' => '09050274',
                'carrier_id' => 2
            ],
            [
                'name' => 'ERRO UNIDADE 36',
                'address' => 'erro36',
                'designation' => 'erro36',
                'carrier_id' => 2
            ],
            [
                'name' => 'Sede Brasil - L2L 500',
                'address' => 'Av. Brig Luis Antonio, 3521 - L2L (500Mb)',
                'designation' => '08932593',
                'carrier_id' => 2
            ],
            [
                'name' => 'HSM Santa Cecília - L2L',
                'address' => 'Rua Jaguaribe, 144 - L2L',
                'designation' => '09050219',
                'carrier_id' => 2
            ],
            [
                'name' => 'Bixira - L2L',
                'address' => 'Rua Bixira, 148 - L2L',
                'designation' => '09050146',
                'carrier_id' => 2
            ],
            [
                'name' => 'Paes de Barros - L2L',
                'address' => 'Av Paes de Barros, 3428 - L2L',
                'designation' => '',
                'carrier_id' => 2
            ],
            [
                'name' => 'PASM Butantã - L2L',
                'address' => 'Av Prof Fco Morato, 1177 - L2L',
                'designation' => '',
                'carrier_id' => 2
            ],
            [
                'name' => 'João Dias - L2L',
                'address' => 'Av João Dias, 257 - L2L',
                'designation' => '09050180',
                'carrier_id' => 2
            ],
            [
                'name' => 'ERRO UNIDADE 43',
                'address' => 'erro43',
                'designation' => 'erro43',
                'carrier_id' => 2
            ],
            [
                'name' => 'Santo André - L2L',
                'address' => 'Av Atlântica, 195 - L2L',
                'designation' => '09051096',
                'carrier_id' => 2
            ],
            [
                'name' => 'Jorge Tibiriça - L2L',
                'address' => 'Rua Jorge Tibiriça, 5 - L2L',
                'designation' => '09050117',
                'carrier_id' => 2
            ],
            [
                'name' => 'ERRO UNIDADE 46',
                'address' => 'erro46',
                'designation' => 'erro46',
                'carrier_id' => 2
            ],
            [
                'name' => 'Rio Sul Center - L2L',
                'address' => 'Rua Lauro Muller, 116, cj. 1302, 03 e 04 - L2L',
                'designation' => '09058801',
                'carrier_id' => 2
            ],
            [
                'name' => 'Santo Amaro - iP',
                'address' => 'Av Alfredo Egídio de Souza Aranha, 100 - iP',
                'designation' => '09010792 - 93',
                'carrier_id' => 2
            ],
            [
                'name' => 'Santo Amaro - L2L',
                'address' => 'Av Alfredo Egídio de Souza Aranha, 100 - L2L',
                'designation' => '09040067',
                'carrier_id' => 2
            ],
            [
                'name' => 'Jardim Oceânico - L2L',
                'address' => 'Av Armando Lombardi, 800 - L2L',
                'designation' => '',
                'carrier_id' => 2
            ]
        ]);

        //Deletando as unidades que não existem mais (foram desativadas / não estavam na planilha)
        $facilitiesIdsToDelete = [9, 15, 36, 43, 46];
        \App\Models\Facility::destroy($facilitiesIdsToDelete);

    }
}
