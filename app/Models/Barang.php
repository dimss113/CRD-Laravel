<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'condition_id',
        'type_id',
        'jumlah',
        'deskripsi',
        'kecacatan',
        'image',
    ];

    public function condition(): BelongsTo
    {
        return $this->belongsTo(Condition::class, 'condition_id', 'id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
