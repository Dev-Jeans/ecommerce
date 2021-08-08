<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id','status','created_at','updated_at'];

    const PENDIENTE = 1; //usuario genera la orden pero aun no paga
    const RECIBIDO = 2; // usuario genera orden y lo ha pagado
    const ENVIADO = 3; // orden se encuentra en ruta de entrega
    const ENTREGADO = 4; // orden ya fue recibida o recogida por el cliente
    const ANULADO = 5; // orden anulada

    //Relacion uno a muchos inversa
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
