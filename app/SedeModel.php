<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_SEDE_OLIMPICA
 * @property string $NOMBRE
 * @property string $UBICACION
 * @property int $NO_COMPLEJOS
 * @property float $PRESPUESTO
 * @property TbcomplejoDep[] $tbcomplejoDeps
 */
class SedeModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbsede_olim';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_SEDE_OLIMPICA';
    public $timestamps = false;

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['NOMBRE', 'UBICACION', 'NO_COMPLEJOS', 'PRESPUESTO'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbcomplejoDeps()
    {
        return $this->hasMany('App\TbcomplejoDep', 'ID_SEDE_OLIMPICA', 'ID_SEDE_OLIMPICA');
    }
}
