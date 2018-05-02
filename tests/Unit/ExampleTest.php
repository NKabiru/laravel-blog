<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
//        Given two instances of posts
        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth()
        ]);
//        Apply the archives method
        $posts = Post::archives();

//        Assert that the method returns arrays with year,month,published
        $this->assertEquals([
            [
                'year' => $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 1
            ],
            [
                'year' => $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 1
            ],
        ], $posts);

    }
}
