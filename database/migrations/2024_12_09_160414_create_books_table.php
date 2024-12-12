<?php

use App\Models\Category;
use App\Models\State;
use App\Models\User;
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


        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('edition');
            $table->date('published_at');
            $table->text('resume');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(State::class);
            $table->foreignIdFor(Category::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
