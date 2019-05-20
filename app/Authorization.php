<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    protected $fillable = [
        'admin_id',
        'is_super_admin',
        'can_news_category',
        'can_news',
        'can_contact',
        'can_menu',
        'can_partner',
        'can_about',
        // 'can_recruitment',
        'can_slider',
        // 'can_project',
        // 'can_business_area',
        // 'can_cv',        
    ];

    public $selector = [
        'is_super_admin' => 'Super Admin',
        'can_news_category'   => 'Quản lý danh mục',
        'can_news' => 'Quản lý bài viết', 
        'can_contact' => 'Quản lý liên hệ',
        'can_menu' => 'Quản lý menu',
        'can_partner' => 'Quản lý đối tác và khách hàng',
        'can_about' => 'Quản lý giới thiệu',
        // 'can_recruitment' => 'Quản lý tuyển dụng',
        'can_slider' => 'Quản lý slider',
        // 'can_project' => 'Quản lý dự án',
        // 'can_business_area' => 'Quản lý lĩnh vực kinh doanh',
        // 'can_cv' => 'Quản lý CV,
    ];

    public function isSuperAdmin()
    {
        return $this->is_super_admin;
    }

    public function canNewsCategory()
    {
    	return $this->can_news_category;
    }
    public function canNews()
    {
    	return $this->can_news;
    }
    public function canContact()
    {
    	return $this->can_contact;
    }
    public function canMenu()
    {
    	return $this->can_menu;
    }
    public function canPartner()
    {
    	return $this->can_partner;
    }
    public function canAbout()
    {
    	return $this->can_about;
    }
    // public function canRecruitment()
    // {
    // 	return $this->can_recruitment;
    // }
    public function canSlider()
    {
    	return $this->can_slider;
    }
    // public function canProject()
    // {
    // 	return $this->can_project;
    // }

    // public function canBusinessArea()
    // {
    // 	return $this->can_business_area;
    // }
}
