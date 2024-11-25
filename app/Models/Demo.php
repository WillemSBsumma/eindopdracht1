<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;
    protected $table = 'eindopdracht';
    protected $primaryKey = 'DemoId';
    protected $fillable = ['name', 'description', 'prijs', 'aantalDownloads'];
}
