<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    use HasFactory;

    public function permissions()
    {
        return $this->hasMany('App\Models\Permission','group_id','id');
    }

    public function getPermissions()
    {
        $query = $this->permissions()->orderBy('id', 'asc')->get();
        return $query;
    }
}
