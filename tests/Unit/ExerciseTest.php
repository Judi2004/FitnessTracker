<?php
namespace Tests\Unit;

use App\Models\Exercise;
use App\Models\Category;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExerciseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belongs_to_a_category()
    {
        // Create a category and an exercise associated with it
        $category = Category::factory()->create();
        $exercise = Exercise::factory()->create(['category_id' => $category->id]);

        // Assert that the exercise's category matches
        $this->assertInstanceOf(Category::class, $exercise->category);
        $this->assertEquals($category->id, $exercise->category->id);
    }

    /** @test */
    public function testItHasFillableFields()
    {
        // Step 1: Create a category
        $category = Category::create([
            'name' => 'Cardio',
        ]);

        // Step 2: Create an exercise associated with that category
        $exercise = Exercise::create([
            'category_id' => $category->id, // Use the ID of the category you just created
            'name' => 'Test Exercise',
            'image' => 'image.jpg',
            'video' => 'video.mp4',
            'description' => 'A test description',
        ]);

        // Step 3: Assert the fields were correctly filled
        $this->assertEquals($exercise->category_id, $category->id);
        $this->assertEquals($exercise->name, 'Test Exercise');
    }
}
