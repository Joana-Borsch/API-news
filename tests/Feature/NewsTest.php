<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{

    public function test_users_can_view_all_news()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
        $response->assertSeeText('Camilion News');

    }
}
