<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_EVENTO_EQUIPAMENTO
 * @property int $ID_EVENTO
 * @property int $ID_EQUIPAMENTO
 * @property TbEvento $tbEvento
 * @property TbEquipamento $tbEquipamento
 */
class EventoEquipamientoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tb_evento_equipamento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_EVENTO_EQUIPAMENTO';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['ID_EVENTO', 'ID_EQUIPAMENTO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tbEvento()
    {
        return $this->belongsTo('App\TbEvento', 'ID_EVENTO', 'ID_EVENTO');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tbEquipamento()
    {
        return $this->belongsTo('App\TbEquipamento', 'ID_EQUIPAMENTO', 'ID_EQUIPAMENTO');
    }
}
