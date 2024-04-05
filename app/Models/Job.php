<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        "title", "company", "location", "email", "tags", "website", "description", "logo", "listAll"
    ];

    public function scopeFilter($query, array $filters)
    {
        if (!$filters) {
            return $query;
        }

        if (request('tag')) {
            $query->where("tags", "like", "%" . request('tag') . "%");
        }

        if (request('search')) {
            $query->where("title", "like", "%" . request('search') . "%")
                ->orWhere("tags", "like", "%" . request('search') . "%")
                ->orWhere("company", "like", "%" . request('search') . "%")
                ->orWhere("location", "like", "%" . request('search') . "%");
        }
    }


    use HasFactory;
}
