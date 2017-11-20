<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSclRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scl_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->nullable();
            //history
            $table->date('visit_date')->nullable();
            $table->text('history')->nullable();
            //habutal rx
            $table->text('hab_1_date')->nullable();
            $table->text('hab_1_type');           
            $table->text('hab_1_rx_od')->nullable();
            $table->text('hab_1_rx_os')->nullable();
            $table->text('hab_1_remarks')->nullable();
            $table->text('hab_2_date')->nullable();
            $table->text('hab_2_type')->nullable();
            $table->text('hab_2_rx_od')->nullable();
            $table->text('hab_2_rx_os')->nullable();
            $table->text('hab_2_remarks')->nullable();
            //full rx
            $table->text('rx_by')->nullable();
            $table->text('full_rx_od')->nullable();
            $table->text('full_rx_od_va')->nullable();
            $table->text('full_rx_os')->nullable();
            $table->text('full_rx_os_va')->nullable();
            $table->text('full_rx_remarks')->nullable();
            //scl rx
            $table->text('rx_by_2')->nullable();
            $table->text('scl_rx_od')->nullable();
            $table->text('scl_rx_od_va')->nullable();
            $table->text('scl_rx_os')->nullable();
            $table->text('scl_rx_os_va')->nullable();
            $table->text('scl_rx_remarks')->nullable();
            $table->text('rx_remarks')->nullable();

            //fit1
            $table->text('fit_1_con_od')->nullable();
            $table->text('fit_1_con_od_rx')->nullable();
            $table->text('fit_1_con_os')->nullable();
            $table->text('fit_1_con_os_rx')->nullable();
            $table->text('fit_1_moverment_od')->nullable();
            $table->text('fit_1_moverment_os')->nullable();
            $table->text('fit_1_centration_od')->nullable();
            $table->text('fit_1_centration_os')->nullable();
            $table->text('fit_1_rotation_od')->nullable();
            $table->text('fit_1_rotation_os')->nullable();
            $table->text('fit_1_con_va_od')->nullable();
            $table->text('fit_1_con_va_os')->nullable();
            $table->text('fit_1_con_va_ou')->nullable();
            $table->text('fit_1_orx_od')->nullable();
            $table->text('fit_1_orx_os')->nullable();
            $table->text('fit_1_orx_va_od')->nullable();
            $table->text('fit_1_orx_va_os')->nullable();
            $table->text('fit_1_orx_va_ou')->nullable();
            $table->text('fit_1_remarks')->nullable();
            //fit2
            $table->text('fit_2_con_od')->nullable();
            $table->text('fit_2_con_od_rx')->nullable();
            $table->text('fit_2_con_os')->nullable();
            $table->text('fit_2_con_os_rx')->nullable();
            $table->text('fit_2_moverment_od')->nullable();
            $table->text('fit_2_moverment_os')->nullable();
            $table->text('fit_2_centration_od')->nullable();
            $table->text('fit_2_centration_os')->nullable();
            $table->text('fit_2_rotation_od')->nullable();
            $table->text('fit_2_rotation_os')->nullable();
            $table->text('fit_2_con_va_od')->nullable();
            $table->text('fit_2_con_va_os')->nullable();
            $table->text('fit_2_con_va_ou')->nullable();
            $table->text('fit_2_orx_od')->nullable();
            $table->text('fit_2_orx_os')->nullable();
            $table->text('fit_2_orx_va_od')->nullable();
            $table->text('fit_2_orx_va_os')->nullable();
            $table->text('fit_2_orx_va_ou')->nullable();
            $table->text('fit_2_remarks')->nullable();
            //fit3
            $table->text('fit_3_con_od')->nullable();
            $table->text('fit_3_con_od_rx')->nullable();
            $table->text('fit_3_con_os')->nullable();
            $table->text('fit_3_con_os_rx')->nullable();
            $table->text('fit_3_moverment_od')->nullable();
            $table->text('fit_3_moverment_os')->nullable();
            $table->text('fit_3_centration_od')->nullable();
            $table->text('fit_3_centration_os')->nullable();
            $table->text('fit_3_rotation_od')->nullable();
            $table->text('fit_3_rotation_os')->nullable();
            $table->text('fit_3_con_va_od')->nullable();
            $table->text('fit_3_con_va_os')->nullable();
            $table->text('fit_3_con_va_ou')->nullable();
            $table->text('fit_3_orx_od')->nullable();
            $table->text('fit_3_orx_os')->nullable();
            $table->text('fit_3_orx_va_od')->nullable();
            $table->text('fit_3_orx_va_os')->nullable();
            $table->text('fit_3_orx_va_ou')->nullable();
            $table->text('fit_3_remarks')->nullable();
            //fit4
            $table->text('fit_4_con_od')->nullable();
            $table->text('fit_4_con_od_rx')->nullable();
            $table->text('fit_4_con_os')->nullable();
            $table->text('fit_4_con_os_rx')->nullable();
            $table->text('fit_4_moverment_od')->nullable();
            $table->text('fit_4_moverment_os')->nullable();
            $table->text('fit_4_centration_od')->nullable();
            $table->text('fit_4_centration_os')->nullable();
            $table->text('fit_4_rotation_od')->nullable();
            $table->text('fit_4_rotation_os')->nullable();
            $table->text('fit_4_con_va_od')->nullable();
            $table->text('fit_4_con_va_os')->nullable();
            $table->text('fit_4_con_va_ou')->nullable();
            $table->text('fit_4_orx_od')->nullable();
            $table->text('fit_4_orx_os')->nullable();
            $table->text('fit_4_orx_va_od')->nullable();
            $table->text('fit_4_orx_va_os')->nullable();
            $table->text('fit_4_orx_va_ou')->nullable();
            $table->text('fit_4_remarks')->nullable();
            //oh
            $table->text('oh_cornea_od')->nullable();
            $table->text('oh_cornea_os')->nullable();
            $table->text('oh_conjunctiva_od')->nullable();
            $table->text('oh_conjunctiva_os')->nullable();
            $table->text('oh_tear_od')->nullable();
            $table->text('oh_tear_os')->nullable();
            $table->text('oh_lids_od')->nullable();
            $table->text('oh_lids_os')->nullable();
            $table->text('oh_remarks')->nullable();
            

        




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scl_records');
    }
}
