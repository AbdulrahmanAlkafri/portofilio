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
        Schema::create('questions', function (Blueprint $table) {  
            $table->id();  
            $table->string('question_en'); // English question  
            $table->string('question_ar'); // Arabic question  
            $table->text('answer_en'); // English answer  
            $table->text('answer_ar'); // Arabic answer  
            $table->timestamps();  
        });  
    }  

    /**  
     * Reverse the migrations.  
     */  
    public function down(): void  
    {  
        Schema::dropIfExists('questions');  
    }  
};