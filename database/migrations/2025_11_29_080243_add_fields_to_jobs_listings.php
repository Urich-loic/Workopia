<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('job_listings')->truncate();

        Schema::table('job_listings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->string('salary')->after('user_id');
            $table->string('tags')->nullable()->after('salary');
            $table->enum('job_type', ['Full-time', 'Part-time', 'Internship', 'Contract', 'Temporary', 'Volunteer'])->default('Full-time')->after('tags');
            $table->boolean('remote')->after('job_type');
            $table->string('requirements')->nullable()->after('remote');
            $table->string('benefits')->nullable()->after('requirements');
            $table->string('country')->nullable()->after('benefits');
            $table->string('city')->nullable()->after('Country');
            $table->string('email')->after('city');
            $table->string('company_name')->after('email');
            $table->text('company_description')->after('company_name');
            $table->string('company_logo')->after('company_description');
            $table->string('company_website')->after('company_logo');
        });

        Schema::table('job_listings', function (Blueprint $table) {
            // Adding a foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            $table->dropColumn([
                'salary',
                'tags',
                'job_type',
                'remote',
                'requirements',
                'benefits',
                'country',
                'city',
                'email',
                'company_name',
                'company_description',
                'company_logo',
                'company_website',
            ]);
        });
    }
};
