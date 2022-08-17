<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Documento');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->integer('Edad');
            $table->enum('Género',['F','M']);
            $table->bigIncrements('EPS',['COOSALUD EPS-S','NUEVA EPS','MUTUAL SER','ALIANSALUD EPS','SALUD TOTAL EPS S.A','EPS SANITAS','EPS SURA','FAMISANAR','SERVICIO OCCIDENTAL DE SALUD EPS SOS','SALUD MIA','COMFENALCO VALLE','COMPENSAR EPS','EPM - EMPRESAS PUBLICAS DE MEDELLIN','FONDO DE PASIVO SOCIAL DE FERROCARRILES NACIONALES DE COLOMBIA','CAJACOPI ATLANTICO','CAPRESOCA','COMFACHOCO','COMFAMILIAR DE LA GUAJIRA','COMFAMILIAR HUILA','COMFAORIENTE',' EPS FAMILIAR DE COLOMBIA','ECOOPSOS ESS EPS-S','ASMET SALUD','EMSSANAR E.S.S.','CAPITAL SALUD EPS-S','CONVIDA','SAVIA SALUD EPS','DUSAKAWI EPSI','ASOCIACION INDIGENA DEL CAUCA EPSI','ANAS WAYUU EPSI','MALLAMAS EPSI','PIJAOS SALUD EPSI']);
            $table->integer('TP');
            $table->integer('PTT');
            $table->integer('AT III');
            $table->integer('TT');
            $table->integer('Fibrinógeno');
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
        //
    }
}
