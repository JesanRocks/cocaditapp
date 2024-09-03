<?php
// database/seeders/MarcaSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    public function run(): void
    {
        $marcas = [
            // Autos
            'Acura', 'Alfa Romeo', 'Aston Martin', 'Audi', 'Bentley', 'BMW', 'Bugatti', 'Buick', 'Cadillac', 'Chevrolet', 'Chery', 
            'Chrysler', 'Citroën', 'Dodge', 'Ferrari', 'Fiat', 'Fisker', 'Ford', 'Genesis', 'Geely', 'GMC', 'Great Wall', 'Holden', 
            'Honda', 'Hummer', 'Hyundai', 'Infiniti', 'Isuzu', 'Jaguar', 'Jeep', 'Kia', 'Lamborghini', 'Land Rover', 'Lexus', 
            'Lincoln', 'Lucid', 'Lynk & Co', 'Maserati', 'Mazda', 'McLaren', 'Mercedes-Benz', 'Mini', 'Mitsubishi', 'Nissan', 
            'Pagani', 'Peugeot', 'Polestar', 'Porsche', 'Proton', 'Ram', 'Renault', 'Rivian', 'Rolls-Royce', 'Saab', 'SEAT', 
            'Skoda', 'Smart', 'SsangYong', 'Subaru', 'Suzuki', 'Tata', 'Tesla', 'Toyota', 'Vauxhall', 'Volkswagen', 'Volvo', 
            'Zotye',
        
            // Motos
            'AJS', 'Aprilia', 'Bajaj', 'Benelli', 'Beta', 'Bimota', 'BMW Motorrad', 'BRP', 'Cagiva', 'Can-Am', 'Cleveland CycleWerks', 
            'CFMoto', 'Ducati', 'Derbi', 'Fantic', 'Gas Gas', 'GASGAS', 'Gilera', 'Haojin', 'Harley-Davidson', 'Hero', 'Husaberg', 
            'Husqvarna', 'Indian', 'Kawasaki', 'KTM', 'Kymco', 'Laverda', 'Malaguti', 'Mash', 'Mondial', 'Moto Guzzi', 'MV Agusta', 
            'Norton', 'Piaggio', 'QJMotor', 'Rieju', 'Royal Enfield', 'Sherco', 'SWM', 'SYM', 'TM Racing', 'Triumph', 'TVS', 
            'Ural', 'Vespa', 'Voge', 'Yamaha', 'Zero', 'Zongshen', 'Zontes',
        
            // Camiones
            'Beiben', 'BYD', 'DAF', 'Dongfeng', 'FAW', 'Freightliner', 'Hino', 'Howo', 'Iveco', 'JAC', 'Kenworth', 'Mack', 
            'MAN', 'Navistar', 'Scania', 'Shaanxi', 'Sinotruk', 'UD', 'Volvo', 'Yutong', 'Zhongtong'
        ];
        

        foreach ($marcas as $marca) {
            Marca::create(['nombre' => $marca]);
        }
    }
}
