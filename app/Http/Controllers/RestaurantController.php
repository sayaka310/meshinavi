<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::simplePaginate(10);
        return view('restaurants.index', compact('restaurants'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        $zoom = 15;
        return view('restaurants.show', compact('restaurant', 'zoom'));
    }
}
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Restaurant  $restaurant
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Restaurant $restaurant)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Restaurant  $restaurant
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Restaurant $restaurant)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Restaurant  $restaurant
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Restaurant $restaurant)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Restaurant  $restaurant
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Restaurant $restaurant)
//     {
//         //
//     }
// }
