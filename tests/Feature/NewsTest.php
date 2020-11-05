<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_logged_can_view_all_news()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)->get('/news');

        $response->assertStatus(200);
        $response->assertSeeText('Camilion News');

    }
    public function test_redirect_to_login_without_user()
    {
        $response = $this->get('/news');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
        $response->assertSeeText('login');
    }
    public function test_can_create_news()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)->post('/news', [
            'headline'=>'Yoga',
            'newsbody'=>'descripcio',

        ]);

        $this->assertDatabaseHas('news', [
            'headline'=>'Yoga',
            'newsbody'=>'descripcio',
        ]);
        $response->assertStatus(302);
    }
    public function test_can_view_one_news()
    {
        $news = News::factory()->make();

        $response = $this->get('/news/' . $news->id);

        $response->assertStatus(302);
    }
    public function test_can_update_news()
    {
        $user = User::factory()->make();
        $news = News::factory()->create([
                'headline'=>'Yoga',
                'newsbody'=>'descripcio',
            ]);

        $response = $this->actingAs($user)->patch('/news/' .$news->id, [
            'headline'=>'Equitacion',
            'newsbody'=>'descripcio',

        ]);
        $this->assertDatabaseHas('news', [
            'headline'=>'Equitacion',
            'newsbody'=>'descripcio',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/news');
    }
}
