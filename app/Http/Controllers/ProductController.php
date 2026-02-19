<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $animeProducts = [
            [
                'id' => 1,
                'title' => 'Violet Evergarden',
                'genre' => 'Drama/Romance',
                'description' => 'A young girl seeks to understand what it means to be human.',
            ],
            [
                'id' => 2,
                'title' => 'Fullmetal Alchemist: Brotherhood',
                'genre' => 'Action/Adventure',
                'description' => 'Two brothers search for the Philosopher\'s Stone to restore their bodies after a failed alchemy experiment.',
            ],
            [
                'id' => 3,
                'title' => 'Gurren Lagann',
                'genre' => 'Mecha/Action',
                'description' => 'In a post-apocalyptic world, a young man and his friends pilot a giant robot to fight against oppressive forces.',
            ],
            [
                'id' => 4,
                'title' => 'Nisekoi',
                'genre' => 'Romance/Comedy',
                'description' => 'A high school student is forced into a fake relationship',
            ],
            [
                'id' => 5,
                'title' => 'Frieren: Beyond Journeys End',
                'genre' => 'Fantasy/Adventure',
                'description' => 'After defeating the Demon King, a group of heroes goes their separate ways. Frieren, an elf mage, embarks on a journey to understand the true meaning of their adventure and the bonds they formed.',
            ], // <-- ADDED THE MISSING ] HERE
        ];

        return view('products.index', compact('animeProducts'));
    }
}