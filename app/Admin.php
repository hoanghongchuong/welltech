<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
	use Notifiable;
    /**
     * active account
     */
    const ACTIVE     = 1;
    const NOT_ACTIVE = 0;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'password',
        'avatar',
        'active',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * get field list
     * @return array
     */
    public function getFieldList()
    {
        return $this->fillable;
    }

    public function getList()
    {
        $query = $this->selectRaw("
            admins.id,
            admins.name,
            admins.username,
            admins.phone,
            admins.password,
            admins.email,
            admins.active
        ");
        return $query->orderBy('name')->get();
    }

    /**
     * [authorization description]
     * @return [data] [description]
     */
    public function authorization()
    {
        return $this->hasOne('App\Authorization', 'admin_id')->select([
            'admin_id',
            'is_super_admin',
            'can_product_category',
            'can_product',
            'can_orders',
            'can_news_category',
            'can_news',
            'can_contact',
            // 'can_menu',
            'can_partner',
            'can_about',
            // 'can_recruitment',
            'can_slider'
            // 'can_project',
            // 'can_business_area',
        ]);
    }

    /**
     * [getAuthorizationData description]
     * @return [data] [description]
     */
    public function getAuthorizationData()
    {
        $auth = [];
        foreach ($this->authorization->toArray() as $field => $value) {
            if ($value) {
                $auth[] = $field;
            }
        }
        return $auth;
    }
}
