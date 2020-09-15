<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StatusTest extends TestCase
{
    use RefreshDatabase;

    public function a_authenticated_user_can_create_post()
    {
        //1.Teniendo
        $user = Factory(User::class)->create();
        //2.Cuando

        //3.Entonces

    }
}
