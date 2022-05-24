<?php

    namespace Tests\Feature;

    use App\Models\BlogPost;
    use App\Models\Comment;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;
    use App\Http\Middleware as Middleware;

    class PostTest extends TestCase
    {
        use RefreshDatabase;

        public function test_no_blog_posts_when_nothing_in_database_with_no_comments ()
        {
            $response = $this->get("/posts");

            $response->assertSeeText("No Posts");
        }

        public function test_see_one_blog_post_when_there_is_one_with_comments()
        {
            $post = $this->createDummyBlogPost();

            Comment::factory()->count(4)->create(["blog_post_id" => $post->id]);

            $response = $this->get("/posts");

            $response->assertSeeText("Comments: 4");
        }

        public function test_see_one_blog_post_when_there_is_one ()
        {
            $this->createDummyBlogPost();

            $response = $this->get("/posts");

            $response->assertSeeText("new title");
            $response->assertSeeText("No comments");

            $this->assertDatabaseHas("blog_posts", [
                "title" => "new title",
            ]);
        }

        public function test_store_post_is_valid ()
        {
            $this->withoutExceptionHandling();

            $params = [
                "_token" => "test",
                "title" => "Valid title",
                "content" => "At least 10 characters",
            ];

            $this->withSession(["_token" => "test"])
                ->post("/posts", $params)
                ->assertStatus(302)
                ->assertSessionHas("status");

            $this->assertEquals(session("status"), "Blog post created successfully.");
        }

        public function test_store_post_fails ()
        {
            $params = [
                "title" => "x",
                "content" => "x",
                "_token" => "test"
            ];

            $this->withSession(["_token" => "test"])
                ->post("/posts", $params)
                ->assertSessionHas("errors");

            $messages = session("errors")->getMessages();

            $this->assertEquals($messages["title"][0], "The title must be at least 5 characters.");

            $this->assertEquals($messages["content"][0], "The content must be at least 10 characters.");
        }

        public function test_update_post_valid ()
        {
            $this->withoutExceptionHandling();

            $post = $this->createDummyBlogPost();

            $this->assertDatabaseHas("blog_posts", [
                "title" => "new title",
                "content" => "new content",
            ]);

            $params = [
                "title" => "updated title",
                "content" => "updated content",
                "_token" => "updated_test",
            ];

            $this->withSession(["_token" => "updated_test"])
                ->put("/posts/{$post->id}", $params)
                ->assertStatus(302)
                ->assertSessionHas("status");

            $this->assertEquals(session("status"), "Blog post updated successfully.");
        }

        public function test_delete_post ()
        {
            $this->withoutMiddleware(Middleware\VerifyCsrfToken::class);
            $this->withoutExceptionHandling();

            $post = $this->createDummyBlogPost();

            $this->assertDatabaseHas("blog_posts", $post->toArray());

            $this->withSession(["_token" => "delete_test"])
                ->delete("/posts/{$post->id}")
                ->assertStatus(302)
                ->assertSessionHas("status");

            $this->assertEquals(session("status"), "Blog post deleted successfully");
        }

        private function createDummyBlogPost ()
        {
            $post = BlogPost::factory()->newTitleAndContent()->create();

            return $post;
        }
    }
