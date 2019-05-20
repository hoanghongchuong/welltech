<?php

namespace App\Policies;

use App\Admin;
use App\Authorization;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function adminManager(Admin $admin)
    {
        
        return $admin->authorization->isSuperAdmin();
        // return Auth::guard('admin')->check();
    }
    public function categoryNewsManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canNewsCategory();
    }

    public function newsManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canNews();
    }
    public function contactManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canContact();
    }
    public function menuManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canMenu();
    }
    public function partnerManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canPartner();
    }
    public function aboutManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canAbout();
    }
    // public function recruitmentManager(Admin $admin)
    // {
    //     return $admin->authorization->isSuperAdmin() || $admin->authorization->canRecruitment();
    // }
    public function sliderManager(Admin $admin)
    {
        return $admin->authorization->isSuperAdmin() || $admin->authorization->canSlider();
    }
    // public function projectManager(Admin $admin)
    // {
    //     return $admin->authorization->isSuperAdmin() || $admin->authorization->canProject();
    // }
    // public function businessManager(Admin $admin)
    // {
    //     return $admin->authorization->isSuperAdmin() || $admin->authorization->canBusinessArea();
    // }
}
