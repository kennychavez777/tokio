<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_EQUIPAMENTO
 * @property string $TIPO_EQUIPAMENTO
 * @property TbEventoEquipamento[] $tbEventoEquipamentos
 */
class EquipamientoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tb_equipamento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_EQUIPAMENTO';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['TIPO_EQUIPAMENTO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEventoEquipamentos()
    {
        return $this->hasMany('App\TbEventoEquipamento', 'ID_EQUIPAMENTO', 'ID_EQUIPAMENTO');
    }
}
