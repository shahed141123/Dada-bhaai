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
        Schema::create('employee_information', function (Blueprint $table) {
            
            $table->id();

            $table->unsignedBigInteger('admin_id')->unique()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

            $table->unsignedBigInteger('employee_department_id');//
            $table->foreign('employee_department_id')->references('id')->on('employee_depts')->onDelete('cascade');//

            $table->unsignedBigInteger('employee_category_id');//
            $table->foreign('employee_category_id')->references('id')->on('employee_categories')->onDelete('cascade');//

            $table->string('name', 30)->nullable();//
            $table->text('address')->nullable();//
            $table->string('city', 100)->nullable();//
            $table->string('postal', 255)->nullable();//
            $table->string('role')->nullable();//

            $table->string('total_years_of_job_experience')->nullable();//
            $table->string('total_years_of_related_experience')->nullable();//
            $table->string('total_years_of_related_education')->nullable();/////
            $table->string('lowest_job_duration_in_past', 50)->nullable();//
            $table->string('highest_job_duration_in_past', 50)->nullable();//

            $table->string('concern_with_social_work', 50)->nullable();//
            $table->text('what_turns_you_on_off')->nullable();//
            $table->text('preference_in_professional_life')->nullable();//

            $table->text('action_in_negative_situation')->nullable();//
            $table->string('recent_job_info_one_company_name')->nullable();//
            $table->text('recent_job_info_one_address')->nullable();//
            $table->string('recent_job_info_one_designation')->nullable();//
            $table->string('recent_job_info_one_contact_no')->nullable();//
            $table->string('recent_job_info_one_duration')->nullable();//

            $table->string('recent_job_info_two_company_name')->nullable();//
            $table->text('recent_job_info_two_address')->nullable();//
            $table->string('recent_job_info_two_designation')->nullable();//
            $table->string('recent_job_info_two_contact_no')->nullable();//
            $table->string('recent_job_info_two_duration')->nullable();//

            $table->string('professional_reference_name')->nullable();//

            $table->text('professional_reference_address')->nullable();//
            $table->string('professional_reference_contact_no_one')->nullable();//
            $table->string('professional_reference_contact_no_two')->nullable();//
            $table->string('professional_reference_contact_relation')->nullable();//

            $table->string('relative_reference_name')->nullable();//
            $table->text('relative_reference_address')->nullable();//
            $table->string('relative_reference_contact_no_one')->nullable();//
            $table->string('relative_reference_contact_no_two')->nullable();//
            $table->string('relative_reference_contact_relation')->nullable();//
            $table->string('highest_degree', 50)->nullable();

            $table->string('passing_year')->nullable();//
            $table->string('university', 100)->nullable();//
            $table->string('major_subjects', 100)->nullable();//

            $table->text('other_training_information_technical_training')->nullable();//
            $table->string('technical_training_duration_date')->nullable();//
            $table->text('other_training_information_certificate_course')->nullable();//
            $table->string('certificate_course_duration_date')->nullable();//

            $table->text('academic_achievements')->nullable();//
            $table->text('professional_achievements')->nullable();//
            $table->text('social_achievements')->nullable();//
            $table->text('personal_achievements')->nullable();//

            $table->text('permanent_address')->nullable();//
            $table->string('permanent_address_city')->nullable();//
            $table->string('permanent_address_state')->nullable();//
            $table->string('permanent_address_zip_code')->nullable();//

            $table->text('current_address')->nullable();//
            $table->string('current_address_city')->nullable();//
            $table->string('current_address_state')->nullable();//
            $table->string('current_address_zip_code')->nullable();//

            $table->string('alternate_email', 100)->nullable()->unique();//

            $table->string('home_phone', 20)->nullable();//
            $table->string('emergency_number', 20)->nullable();//
            $table->string('nid_bri_ppn', 50)->nullable()->unique();
            $table->date('birth_date')->nullable();//

            $table->string('marital_status')->nullable();//

            $table->string('spouse_name', 100)->nullable();//
            $table->string('spouse_employer', 100)->nullable();//
            $table->string('spouse_work_phone', 255)->nullable();//

            $table->string('emergency_contact_information_name')->nullable();//
            $table->text('emergency_contact_information_address')->nullable();//
            $table->string('emergency_contact_information_city')->nullable();//
            $table->string('emergency_contact_information_zip_code')->nullable();//
            $table->string('emergency_contact_information_phone')->nullable();//
            $table->string('emergency_contact_information_relationsip')->nullable();//

            $table->string('father_name', 100)->nullable();//
            $table->string('mother_name', 100)->nullable();//
            $table->string('father_service', 100)->nullable();//
            $table->string('mother_service', 100)->nullable();//

            $table->string('brothers_total')->nullable();//
            $table->string('sisters_total')->nullable();//

            $table->text('siblings_contact_info_one')->nullable();//
            $table->text('siblings_contact_info_two')->nullable();//

            $table->string('sign')->comment('file')->nullable();// 
            $table->string('ceo_sign')->comment('file')->nullable();//
            //files
            $table->string('operation_director_sign')->comment('file')->nullable();// 
            $table->string('managing_director_sign')->comment('file')->nullable();//
            //file
            $table->string('sign_date')->nullable();//

            $table->date('evaluation_date')->nullable();//

            $table->integer('casual_leave_due_as_on')->default('0')->nullable();
            $table->integer('casual_leave_availed')->default('0')->nullable();
            $table->integer('casual_balance_due')->default('0')->nullable();
            $table->integer('earned_leave_due_as_on')->default('0')->nullable();
            $table->integer('earned_leave_availed')->default('0')->nullable();
            $table->integer('earned_balance_due')->default('0')->nullable();
            $table->integer('medical_leave_due_as_on')->default('0')->nullable();
            $table->integer('medical_leave_availed')->default('0')->nullable();
            $table->integer('medical_balance_due')->default('0')->nullable();

            $table->enum('police_verification', ['verified', 'unverified'])->default('unverified')->nullable();//
            $table->enum('acknowledgement', ['acknowledged', 'unacknowledged'])->default('acknowledged')->nullable();

            $table->string('status')->default('1');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_information');
    }
};
