<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_EVENTO
 * @property string $NOMBRE
 * @property string $FECHA
 * @property string $DURACION
 * @property int $NO_PARTICIPANTES
 * @property string $CATEGORIA
 * @property int $ID_COMPLEJO_POLIDEPORTIVO
 * @property TbcomplejoDepUnico $tbcomplejoDepUnico
 * @property TbComisario[] $tbComisarios
 * @property TbEventoEquipamento[] $tbEventoEquipamentos
 */
class EventoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tb_evento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_EVENTO';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['NOMBRE', 'FECHA', 'DURACION', 'NO_PARTICIPANTES', 'CATEGORIA', 'ID_COMPLEJO_POLIDEPORTIVO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tbcomplejoDepUnico()
    {
        return $this->belongsTo('App\TbcomplejoDepUnico', 'ID_COMPLEJO_POLIDEPORTIVO', 'ID_COMPLEJO_DEP_UNICO');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbComisarios()
    {
        return $this->hasMany('App\TbComisario', 'ID_EVENTO', 'ID_EVENTO');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEventoEquipamentos()
    {
        return $this->hasMany('App\TbEventoEquipamento', 'ID_EVENTO', 'ID_EVENTO');
    }
}
