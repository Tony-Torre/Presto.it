<?php

use App\Models\Province;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('province');
            $table->string('region');
            $table->timestamps();
        });

        $provinces = Http::get('https://axqvoqvbfjpaamphztgd.functions.supabase.co/province')->json();
        foreach( $provinces as $province){
            Province::create([
                'province' => $province['nome'],
                'region' => $province['regione'],
            ]);
        }

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};
