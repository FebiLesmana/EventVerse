<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventList extends Model
{
    use HasFactory;

    protected $table = 'event_list';

    protected $primaryKey = 'id'; // <- tambahkan ini jika belum ada

    public $incrementing = true; // pastikan primary key auto-increment
    protected $keyType = 'int';  // pastikan key bertipe integer

    protected $fillable = [
        'id', 'nama', 'jenis', 'deskripsi', 'tempat', 'waktu',
        'pembicara', 'organizer', 'instagram', 'poster'
    ];

    public function favoredByUsers()
{
    return $this->belongsToMany(User::class, 'favorites', 'event_id', 'user_id')->withTimestamps();
}

}
