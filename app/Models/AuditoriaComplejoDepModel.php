<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_ACCION
 * @property string $ACCION
 */
class AuditoriaComplejoDepModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'auditoria_complejo_dep';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_ACCION';

    /**
     * @var array
     */
    protected $fillable = ['ACCION'];

}
