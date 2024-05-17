<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\ExcludedService;
use App\Models\Image;
use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;
use App\Models\IncludedService;
use App\Models\Itinerary;
use App\Models\Restriction;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        $tours = Tour::factory(25)->create();
        $allDestinationIds = Destination::all()->pluck('id'); // Obtener todos los IDs de destinos

        //foreach para recorrer los tours
        foreach ($tours as $tour) {
            Image::factory(1)->create([
                'imageable_id' => $tour->id,
                'imageable_type' => Tour::class,
            ]);
            $tour->destinations()->attach(
                $allDestinationIds->random(rand(1, 5)) // Suponiendo que un tour puede tener entre 1 y 5 destinos
            );
            Faq::factory(5)->create([
                'tour_id' => $tour->id
            ]);
            IncludedService::factory(5)->create([
                'tour_id' => $tour->id
            ]);
            ExcludedService::factory(5)->create([
                'tour_id' => $tour->id
            ]);
            Itinerary::factory(5)->create([
                'tour_id' => $tour->id
            ]);
            Restriction::factory(5)->create([
                'tour_id' => $tour->id
            ]);
        }
    }
}
