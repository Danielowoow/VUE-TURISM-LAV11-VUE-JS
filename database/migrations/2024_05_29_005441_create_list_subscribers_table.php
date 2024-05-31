<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('list_subscriber', function (Blueprint $table) {
            $table->foreignId('mailing_list_id')->constrained('mailing_lists')->onDelete('cascade');
            $table->foreignId('subscriber_id')->constrained()->onDelete('cascade');
            $table->timestamp('subscribed_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(['mailing_list_id', 'subscriber_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_subscribers');
    }
};
