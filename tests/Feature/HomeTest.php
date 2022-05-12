<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function test_home_page_is_working_correctly()
    {
        $response = $this->get("/");

        $response->assertSeeText("Laravel Blog");

        $response->assertStatus(200);
    }

    public function test_contact_page_is_working_correctly()
    {
        $response = $this->get("/contact");

        $response->assertSeeText("Contact Page");

        $response->assertStatus(200);
    }
}
