<?php

use App\Models\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Permission::insert([
            [
                'permission_group_id'=>'1',
                'name'=>'view_students'
            ],
            [
                'permission_group_id'=>'1',
                'name'=>'add_student'
            ],
            [
                'permission_group_id'=>'1',
                'name'=>'view_student'
            ],
            [
                'permission_group_id'=>'1',
                'name'=>'edit_student'
            ],
            [
                'permission_group_id'=>'1',
                'name'=>'delete_student'
            ],
            [
                'permission_group_id'=>'1',
                'name'=>'bulk_enroll'
            ],
            [
                'permission_group_id'=>'1',
                'name'=>'enroll'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'view_sessions'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'add_session'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'edit_session'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'delete_session'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'export_student'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'export_student_attendance'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'view_attendance_sheet'
            ],
            [
                'permission_group_id'=>'3',
                'name'=>'set_attendance'
            ],
            [
                'permission_group_id'=>'3',
                'name'=>'set_bulk_attendance'
            ],
            [
                'permission_group_id'=>'3',
                'name'=>'set_import_attendance'
            ],
            [
                'permission_group_id'=>'3',
                'name'=>'create_certificate_list'
            ],
            [
                'permission_group_id'=>'3',
                'name'=>'set_attendance_dates'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'view_classes'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'add_class'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'edit_class'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'delete_class'
            ],
            [
                'permission_group_id'=>'5',
                'name'=>'view_notes'
            ],
            [
                'permission_group_id'=>'5',
                'name'=>'add_note'
            ],
            [
                'permission_group_id'=>'5',
                'name'=>'edit_note'
            ],
            [
                'permission_group_id'=>'5',
                'name'=>'delete_note'
            ],
            [
                'permission_group_id'=>'6',
                'name'=>'view_blog'
            ],
            [
                'permission_group_id'=>'6',
                'name'=>'add_blog'
            ],
            [
                'permission_group_id'=>'6',
                'name'=>'edit_blog'
            ],
            [
                'permission_group_id'=>'6',
                'name'=>'delete_blog'
            ],
            [
                'permission_group_id'=>'7',
                'name'=>'manage_files'
            ],
            [
                'permission_group_id'=>'8',
                'name'=>'view_articles'
            ],
            [
                'permission_group_id'=>'8',
                'name'=>'add_article'
            ],
            [
                'permission_group_id'=>'8',
                'name'=>'edit_article'
            ],
            [
                'permission_group_id'=>'8',
                'name'=>'delete_article'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_widgets'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'create_widget'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'delete_widget'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_registration_fields'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'add_registration_field'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'delete_registration_field'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_registration_field'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_site_settings'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_roles'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'add_role'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_role'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'delete_role'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_payment_methods'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_payment_methods'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_admins'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'add_admin'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_admin'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'view_transactions'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'view_tests'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'add_test'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'add_options'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'add_question'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'delete_question'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'delete_option'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'duplicate_question'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'edit_question'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'edit_option'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'export_result'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'manage_questions'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'view_results'
            ],
            [
                'permission_group_id'=>'10',
                'name'=>'view_result'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'view_payments'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'view_discussions'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'view_discussion'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'reply_discussion'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'delete_discussion'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'view_instructors'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'set_instructors'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'upgrade_database'
            ],
            [
                'permission_group_id'=>'12',
                'name'=>'view_certificates'
            ],
            [
                'permission_group_id'=>'12',
                'name'=>'edit_certificate'
            ],
            [
                'permission_group_id'=>'12',
                'name'=>'add_certificate'
            ],
            [
                'permission_group_id'=>'12',
                'name'=>'delete_certificate'
            ],
            [
                'permission_group_id'=>'13',
                'name'=>'view_downloads'
            ],
            [
                'permission_group_id'=>'13',
                'name'=>'edit_download'
            ],
            [
                'permission_group_id'=>'13',
                'name'=>'add_download'
            ],
            [
                'permission_group_id'=>'13',
                'name'=>'delete_download'
            ],
            [
                'permission_group_id'=>'14',
                'name'=>'global_resource_access'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'add_course'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'view_course_categories'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'add_course_category'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'edit_course_category'
            ],
            [
                'permission_group_id'=>'2',
                'name'=>'delete_course_category'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'view_class_groups'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'add_class_group'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'edit_class_group'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'delete_class_group'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'manage_class_downloads'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'view_lectures'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'add_lecture'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'edit_lecture'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'delete_lecture'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'manage_lecture_downloads'
            ],
            [
                'permission_group_id'=>'4',
                'name'=>'manage_lecture_content'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'add_homework'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'view_homework_list'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'edit_homework'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'view_homework'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'delete_homework'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'view_homework_submissions'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'view_homework_submission'
            ],
            [
                'permission_group_id'=>'15',
                'name'=>'export_homework_results'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_themes'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'customize_theme'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'install_theme'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'configure_sms_gateways'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_sms_gateway'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'install_gateway'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'uninstall_gateway'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'view_forum_topics'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'add_forum_topic'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'view_forum_topic'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'reply_forum_topic'
            ],
            [
                'permission_group_id'=>'11',
                'name'=>'delete_forum_topic'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_test_grades'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'add_test_grade'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_test_grade'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'delete_test_grade'
            ],
            [
                'permission_group_id'=>'16',
                'name'=>'view_report_page'
            ],
            [
                'permission_group_id'=>'16',
                'name'=>'view_class_report'
            ],
            [
                'permission_group_id'=>'16',
                'name'=>'view_students_report'
            ],
            [
                'permission_group_id'=>'16',
                'name'=>'view_tests_report'
            ],
            [
                'permission_group_id'=>'16',
                'name'=>'view_homework_report'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_email_notifications'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_email_notification'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_sms_notifications'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_sms_notification'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'view_coupons'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'add_coupon'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'edit_coupon'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'delete_coupon'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'manage_currencies'
            ],
            [
                'permission_group_id'=>'9',
                'name'=>'delete_currencies'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'view_surveys'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'add_survey'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'add_survey_options'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'add_survey_question'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'delete_survey_question'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'delete_survey_option'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'duplicate_survey_question'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'edit_survey_question'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'edit_survey_option'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'export_survey_result'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'manage_survey_questions'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'view_survey_results'
            ],
            [
                'permission_group_id'=>'17',
                'name'=>'view_survey_result'
            ]

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
