<?php
namespace Tests\Feature;

use App\Models\Category;
use App\Models\Exercise;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExerciseControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_the_exercise_library()
    {
        // Create some categories and exercises
        $category = Category::factory()->create();
        $exercise = Exercise::factory()->create(['category_id' => $category->id]);

        // Make a GET request to the elibrary route
        $response = $this->get('/elibrary');

        // Assert that the page loads correctly and contains the exercise data
        $response->assertStatus(200);
        $response->assertSee($exercise->name);
    }

    /** @test */
    public function it_shows_exercise_details_page()
    {
        // Create an exercise
        $exercise = Exercise::factory()->create();

        // Make a GET request to the exercise details route
        $response = $this->get(route('elibrarydetails', $exercise->id));

        // Assert that the page loads and displays the exercise details
        $response->assertStatus(200);
        $response->assertSee($exercise->name);
        $response->assertSee($exercise->description);
    }

public function testExerciseBelongsToCategory()
{
    // Create a category with a name
    $category = Category::create([
        'name' => 'Cardio',
    ]);

    // Now, you can create an exercise linked to this category
    $exercise = Exercise::create([
        'category_id' => $category->id,
        'name' => 'Test Exercise',
        'image' => 'image.jpg',
        'video' => 'video.mp4',
        'description' => 'A test description',
    ]);

    $this->assertEquals($exercise->category->id, $category->id);
}

}
