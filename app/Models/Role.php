<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User','user_role','role_id','user_id');
    }

    public function rolepermission()
    {
        return $this->hasMany('App\Models\RolePermission','role_id','id');
    }


    

    public function hasPermission($permissionid)
    {
        if($this->rolepermission()->where('permission_id',$permissionid)->first()) {
            return true;
        }
        return false;
    }
}
