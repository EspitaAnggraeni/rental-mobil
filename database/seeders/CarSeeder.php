use Illuminate\Database\Seeder;
use App\Models\Car; // Sesuaikan namespace dengan lokasi model Car Anda

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'nama_mobil' => 'Toyota Avanza',
            'slug' => 'toyota-avanza',
            'type_id' => 1,
            'price' => 150000000,
            'pintu' => 4,
            'penumpang' => 7,
            'description' => 'Toyota Avanza adalah mobil MPV keluarga yang populer di Indonesia.',
            'image' => 'avanza.jpg',
            'status' => 'active'
        ]);

        Car::create([
            'nama_mobil' => 'Honda Civic',
            'slug' => 'honda-civic',
            'type_id' => 2,
            'price' => 250000000,
            'pintu' => 4,
            'penumpang' => 5,
            'description' => 'Honda Civic adalah mobil sedan yang elegan dan sporty.',
            'image' => 'civic.jpg',
            'status' => 'active'
        ]);

        Car::create([
            'nama_mobil' => 'Mitsubishi Pajero Sport',
            'slug' => 'mitsubishi-pajero-sport',
            'type_id' => 3,
            'price' => 400000000,
            'pintu' => 5,
            'penumpang' => 7,
            'description' => 'Mitsubishi Pajero Sport adalah SUV tangguh untuk pengembaraan di jalan dan off-road.',
            'image' => 'pajero.jpg',
            'status' => 'active'
        ]);
    }
}

