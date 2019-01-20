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
                            'kelas_mancing_mania',
                            'kelas_ternak_lele',
                            'kelas_panen_meme',
                            'bukti_pembayaran',
                            'biaya',
                            'sudah_bayar'
                                );
}
