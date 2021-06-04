<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_COMPLEJO_DEP_UNICO
 * @property string $NOMBRE
 * @property string $LOCALIZACION
 * @property string $AREA
 * @property int $ID_COMPLEJO_DEP
 * @property TbcomplejoDep $tbcomplejoDep
 * @property TbEvento[] $tbEventos
 */
class ComplejoDepUnicoModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbcomplejo_dep_unico';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_COMPLEJO_DEP_UNICO';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['NOMBRE', 'LOCALIZACION', 'AREA', 'ID_COMPLEJO_DEP'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tbcomplejoDep()
    {
        return $this->belongsTo('App\TbcomplejoDep', 'ID_COMPLEJO_DEP', 'ID_COMPLEJO_DEP');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbEventos()
    {
        return $this->hasMany('App\TbEvento', 'ID_COMPLEJO_POLIDEPORTIVO', 'ID_COMPLEJO_DEP_UNICO');
    }
}
