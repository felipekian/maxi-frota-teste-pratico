<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /** @test */
    public function rota_criar_usuario()
    {
        $response = $this->get('/api/criar-usuario');

        $response->assertStatus(200);
    }

    /** @test */
    public function rota_logar()
    {
        $response = $this->get('/api/logar');

        $response->assertStatus(200);
    }

    /** @test */
    public function rota_pegar_dados_usuario_por_hash_email_md5()
    {
        $response = $this->get('/pegar-dados-usuario/{email_hash_md5}');

        $response->assertStatus(200);
    }
}
