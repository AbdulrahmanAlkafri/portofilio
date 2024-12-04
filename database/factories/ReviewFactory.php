<?php  

namespace Database\Factories;  

use App\Models\Review;  
use Illuminate\Database\Eloquent\Factories\Factory;  

/**  
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>  
 */  
class ReviewFactory extends Factory  
{  

    /**  
     * Define the model's default state.  
     *  
     * @return array<string, mixed>  
     */  
    public function definition(): array  
    {  
        return [  
            'customer_name' => $this->faker->name(),  
            'title' => $this->faker->sentence(),  
            'rate' => $this->faker->numberBetween(1, 5), // Assuming a rating between 1 and 5  
            'desc' => $this->faker->paragraph(),  
            'customer_image' => $this->faker->imageUrl(640, 480, 'people', true), // Generates a random image URL  
        ];  
    }  
}