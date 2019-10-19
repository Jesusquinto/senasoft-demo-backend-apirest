<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class ProductosAlmacenes extends Model implements AuthenticatableContract, AuthorizableContract
{      
    protected $table = "productos_almacenes";
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_producto', 'id_almacen' ,'estado' 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];


    public function producto()
    {
        return $this->belongsTo(Productos::class,'id_producto');
    }

    public function almacen()
    {
        return $this->belongsTo(Almacenes::class, 'id_almacen');
    }
}
