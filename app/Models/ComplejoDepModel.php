<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID_COMPLEJO_DEP
 * @property string $LOCALIZACION
 * @property string $JEFE_ORGANIZACION
 * @property string $AREA_TOTAL
 * @property int $ID_SEDE_OLIMPICA
 * @property TbsedeOlim $tbsedeOlim
 * @property TbcomplejoDepUnico[] $tbcomplejoDepUnicos
 * @property TbcomplejoPolideportivo[] $tbcomplejoPolideportivos
 */
class ComplejoDepModel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tbcomplejo_dep';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_COMPLEJO_DEP';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['LOCALIZACION', 'JEFE_ORGANIZACION', 'AREA_TOTAL', 'ID_SEDE_OLIMPICA'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tbsedeOlim()
    {
        return $this->belongsTo('App\TbsedeOlim', 'ID_SEDE_OLIMPICA', 'ID_SEDE_OLIMPICA');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbcomplejoDepUnicos()
    {
        return $this->hasMany('App\TbcomplejoDepUnico', 'ID_COMPLEJO_DEP', 'ID_COMPLEJO_DEP');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tbcomplejoPolideportivos()
    {
        return $this->hasMany('App\TbcomplejoPolideportivo', 'ID_COMPLEJO_DEP', 'ID_COMPLEJO_DEP');
    }
}
