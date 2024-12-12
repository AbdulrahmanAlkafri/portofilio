<?php  

use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

return new class extends Migration  
{  
    /**  
     * Run the migrations.  
     */  
    public function up(): void  
    {  
        Schema::create('reviews', function (Blueprint $table) {  
            $table->id();  
            $table->string('customer_name_en'); // English customer name  
            $table->string('customer_name_ar'); // Arabic customer name  
            $table->string('title_en'); // English title  
            $table->string('title_ar'); // Arabic title  
            $table->integer('rate');  
            $table->text('desc_en'); // English description  
            $table->text('desc_ar'); // Arabic description  
            $table->string('customer_image')->nullable();  
            $table->timestamps();  
        });  
    }  

    /**  
     * Reverse the migrations.  
     */  
    public function down(): void  
    {  
        Schema::dropIfExists('reviews');  
    }  
};