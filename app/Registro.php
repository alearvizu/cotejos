<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id', 'Fecha de solicitud', 'Tipo de operación','Abogado','Quien solicita','A quien se factura','Telefono','Correo electronico','Cliente consentrador','Feca de entrega','Trabajo a relizar y doc. entregados','Origen del documento','Concargoa  cliente',
    ];
}
