<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peserta';

    protected $fillable = array(
                            'nama', 
                            'nomor_identitas', 
                            'nomor_telp',
                            'kode_peserta',
                            'Web_Apps',
                            'Database',
                            'Motion_Graphic',
                            'Cyber_Security',
                            'Graphic_Design',
                            'Game_Development',
                            'Android_Apps',
                            'Web_Design',
                            'bukti_pembayaran',
                            'biaya',
                            'sudah_bayar'
                                );
}
