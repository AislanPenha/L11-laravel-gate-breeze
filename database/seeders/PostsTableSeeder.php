<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Seja bem-vindo',
                'content' => 'Este é o primeiro post do administrador do sistema. Sejam bem-vindos à comunidade.',
            ],
            [
                'user_id' => 1,
                'title' => 'Novidades do sistema',
                'content' => 'Estamos trabalhando em novas funcionalidades para melhorar a experiência dos usuários.',
            ],
            [
                'user_id' => 2,
                'title' => 'Meu primeiro post',
                'content' => 'Olá, pessoal! Estou muito feliz em participar desta comunidade e compartilhar minhas experiências.',
            ],
            [
                'user_id' => 3,
                'title' => 'Aprendendo Laravel',
                'content' => 'Hoje comecei meus estudos sobre Laravel e estou descobrindo como trabalhar com rotas, controllers e models.',
            ],
            [
                'user_id' => 3,
                'title' => 'Dicas de programação',
                'content' => 'Uma boa prática de programação é manter o código organizado, reutilizável e fácil de entender.',
            ],
            [
                'user_id' => 1,
                'title' => 'Trabalhando com banco de dados',
                'content' => 'O Laravel facilita bastante o acesso ao banco de dados utilizando o Eloquent ORM.',
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
