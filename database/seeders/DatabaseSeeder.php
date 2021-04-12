<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //INSERINDO DADOS NA TABELA UNIDADES
        DB::table('unidades')->insert([
            'nome' => 'APT 100',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 101',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 102',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 103',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 104',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 105',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 106',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 107',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 108',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 109',
            'id_dono' => '0',
        ]);
        DB::table('unidades')->insert([
            'nome' => 'APT 110',
            'id_dono' => '0',
        ]);


        //INSERIR DADOS NA TABELA AREA
        DB::table('areas')->insert([
            'liberado' => '1',
            'titulo' => 'Piscina',
            'capa' => 'piscina.jpg',
            'dia' => '1,2,3,4,5,6,7',
            'data_abertura' => '07:00:00',
            'data_fechamento' => '23:00:00'
        ]);

        DB::table('areas')->insert([
            'liberado' => '1',
            'titulo' => 'Churrasquira',
            'capa' => 'churrasqueira.jpg',
            'dia' => '3,4,5,6,7',
            'data_abertura' => '09:00:00',
            'data_fechamento' => '23:50:00'
        ]);

        DB::table('areas')->insert([
            'liberado' => '1',
            'titulo' => 'Salao de festa 1',
            'capa' => 'salao1.jpg',
            'dia' => '1,2,3,4,5,6,7',
            'data_abertura' => '07:00:00',
            'data_fechamento' => '23:50:00'
        ]);

        DB::table('areas')->insert([
            'liberado' => '1',
            'titulo' => 'Salao de festa 2',
            'capa' => 'salao2.jpg',
            'dia' => '1,2,3,4,5,6,7',
            'data_abertura' => '07:00:00',
            'data_fechamento' => '23:50:00'
        ]);

        DB::table('areas')->insert([
            'liberado' => '1',
            'titulo' => 'Sala de jogos',
            'capa' => 'sala_jogos.jpg',
            'dia' => '1,2,3,4,5,6,7',
            'data_abertura' => '08:00:00',
            'data_fechamento' => '22:00:00'
        ]);

        DB::table('areas')->insert([
            'liberado' => '1',
            'titulo' => 'Academia',
            'capa' => 'academia.jpg',
            'dia' => '1,2,3,4,5,6,7',
            'data_abertura' => '07:00:00',
            'data_fechamento' => '23:00:00'
        ]);

        //INSERINDO DADOS NA TABELA MURAL
        DB::table('mural')->insert([
            'titulo' => 'Manutençao do Jardin de entrada.',
            'descricao' => 'Será realizada a manutenção do jardin da entrada do condominio.',
            'data_criacao' => '2021-02-11 10:00:00'
        ]);

        DB::table('mural')->insert([
            'titulo' => 'Manutenção do elevador de serviço.',
            'descricao' => 'Será realizda a manutenção do elevador de serciço, por essa razão o mesmo ficara desligado até o  final da manutenção.',
            'data_criacao' => '2021-03-01 08:00:00'
        ]);
        
        DB::table('mural')->insert([
            'titulo' => 'Utilize mascara',
            'descricao' => 'Com o aumento do numero de casos de Covid19 na cidade, lembramos aos moradores que é exigido usar mascaras nas dependencias do condominio.',
            'data_criacao' => '2021-01-01 12:00:00'
        ]); 
    }
}
