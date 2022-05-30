<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_role','user_id','role_id');
    }

    public function hasAnyRole($roles)
    {
        if(is_array($roles))
        {
            foreach ($roles as $role) {
                if($this->hasRole($role)) {
                    return true;
                }
            }
        }
        else{
            if($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    public function hasRole($role)
    {
       
         

        if($this->roles()->where('name',$role)->first()) {
            return true;
        }
        return false;
    }
    public function user_roles()
    {
        $query = $this->roles()->get();
        return $query;
    }


    public function user_roles_string() {
        $list = $this->user_roles();
        $new = array();
        foreach($list as $data) {
            array_push($new, $data->name);
        }
        $new = implode(',', $new);
        return $new;
        
    }

    public function is_admin()
    {
        if($this->hasRole('Admin')) {
            return true;
        }

        return false;
    }

    public function hasPermission($permissionshortname) 
    {
        $roles = $this->user_roles();
        $checkpermission = false;
        foreach($roles as $role) {
            if($role->name == 'Super Admin') {
                return true;
            }else{
            
                $permissionid=Permission::where('shortname',$permissionshortname)->value('id');
            
            if($role->hasPermission($permissionid) == true) {
                return true;
            }  
       
                }
        }
        return false;
        
    }
}
