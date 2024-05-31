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
        Schema::create('campaign_list', function (Blueprint $table) {
            $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
            $table->foreignId('mailing_list_id')->constrained('mailing_lists')->onDelete('cascade');
            $table->primary(['campaign_id', 'mailing_list_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_lists');
    }
};
