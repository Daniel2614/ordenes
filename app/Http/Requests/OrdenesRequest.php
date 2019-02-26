<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'area'              => 'required',
            'tramite'           => 'required',
            'numTramite'        => 'required',
            'fechaElaboracion'  => 'required',
            //'oc'                => 'required',
            //'fechaOC'           => 'required',
            'importeOrden'      => 'required',
            //'letraImporte'      => 'required',
            //'recepcion'         => 'required',
            //'fechaRecepcion'    => 'required',
            'rpand'             => 'required',
            'proPresupuestal.*'   => 'required',
            'numPartida.*'        => 'required',
            'nombrePartida.*'       => 'required',
            'rfc.*'               => 'required',
            'importeParcial.*'    => 'required',
            'nombre.*'            => 'required',
            //'organizacion'      => 'required',
            'concepto.*'          => 'required'
        ];
    }
}
