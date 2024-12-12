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
            'customer_name_en' => $this->faker->name(),             // English customer name  
            'customer_name_ar' => $this->faker->name(),             // Arabic customer name  
            'title_en' => $this->faker->sentence(),                 // English title  
            'title_ar' => $this->faker->sentence(),                 // Arabic title  
            'rate' => $this->faker->numberBetween(1, 5),            // Rating between 1 and 5  
            'desc_en' => $this->faker->paragraph(),                 // English description  
            'desc_ar' => $this->faker->paragraph(),                 // Arabic description  
            'customer_image' => $this->faker->imageUrl(640, 480, 'people', true), // Random image URL  
        ];  
    }  
}