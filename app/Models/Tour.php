<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    //protected con guarded
    protected $guarded = ['id', 'estatus'];
    //protected con withcount
    protected $withCount = ['reviews'];

    //define constantes para el estatus, y no solo activo e inactivo, sino tambien para mas estados
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
    const INACTIVO = 4;
    //devuelve el rating promedio de un tour

    public function getEstatusAttribute($value)
    {
        $statusClasses = [
            self::BORRADOR => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300',
            self::REVISION => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300',
            self::PUBLICADO => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300',
            self::INACTIVO => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300',
        ];
    
        $statusText = [
            self::BORRADOR => 'BORRADOR',
            self::REVISION => 'REVISIÓN',
            self::PUBLICADO => 'PUBLICADO',
            self::INACTIVO => 'INACTIVO',
        ];
    
        $classes = $statusClasses[$value] ?? 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300';
        $text = $statusText[$value] ?? 'Desconocido';
    
        return "<span class='$classes text-sm font-medium me-2 px-2.5 py-0.5 rounded'>$text</span>";
    }
    



    public function getRatingAttribute()
    {
        //condiciones le pasamos el atrinuto review si tiene calificaciones retorna el promedio de las calificaciones y si no, coloca 5
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    //relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }
    public function included_services()
    {
        return $this->hasMany(IncludedService::class);
    }
    public function excluded_services()
    {
        return $this->hasMany(ExcludedService::class);
    }
    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
    public function restrictions()
    {
        return $this->hasMany(Restriction::class);
    }


    //relacion uno a muchos inversa
    public function user_admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //relacion uno a muchos inversa
    public function price()
    {
        return $this->belongsTo(Price::class);
    }
    //relacion muchos a muchos users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    //relacion con la tabla de destinos
    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'tour_destination', 'tour_id', 'destination_id');
    }
}
