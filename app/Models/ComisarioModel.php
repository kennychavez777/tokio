<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_COMISARIO
 * @property string $NOMBRE
 * @property string $TIPO_COMISARIO
 * @property int $ID_EVENTO
 * @property TbEvento $tbEvento
 */
class ComisarioModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tb_comisario';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_COMISARIO';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['NOMBRE', 'TIPO_COMISARIO', 'ID_EVENTO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tbEvento()
    {
        return $this->belongsTo('App\TbEvento', 'ID_EVENTO', 'ID_EVENTO');
    }
}
