<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $services = [
        [
            'id' => 1,
            'img' => 'img/igiene_orale.jpg',
            'name' => 'Igiene Orale',
            'costo' => '50',
            'description' => 'Descrizione dettagliata del servizio di Igiene Orale.'
        ],
        [
            'id' => 2,
            'img' => 'img/ortodonzia.jpg',
            'name' => 'Ortodonzia',
            'costo' => '100',
            'description' => 'Descrizione dettagliata del servizio di Ortodonzia.'
        ],
        [
            'id' => 3,
            'img' => 'img/implantologia.jpg',
            'name' => 'Implantologia',
            'costo' => '200',
            'description' => 'Descrizione dettagliata del servizio di Implantologia.'
        ]
    ];

    public function services()
    {
        $services = $this->services;
        return view('services', compact('services'));
    }

    public function show($id)
    {
        $service = collect($this->services)->firstWhere('id', $id);

        if (!$service) {
            abort(404);
        }

        return view('service-detail', compact('service'));
    }
}
