namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

        protected $table = 'siswa';
        protected $primaryKey = 'id';
        public $incrementing = true;
        protected $keyType = 'int';

        protected $fillable = [
            'nama',
            'nisn',
            'kelas',
            'jurusan',
            'tanggal_pembayaran',
            'jumlahp_pembayaran',      
            'status',
        ];
    }