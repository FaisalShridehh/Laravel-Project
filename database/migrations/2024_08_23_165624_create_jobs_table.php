<?php

use App\JobSchedule;
use App\Models\Employer;
use App\SalaryType;
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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class)->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->float('salary',8);
            $table->enum('salary_type', array_column(SalaryType::cases(), 'value'))->default(SalaryType::PER_HOUR->value);
            $table->string('location');
            $table->string( 'company');
            $table->text('description');
            $table->enum('schedule', array_column(JobSchedule::cases(), 'value'))
                ->default(JobSchedule::FullTime->value);
            $table->string('url');
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
