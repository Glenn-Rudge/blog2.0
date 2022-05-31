<?php
    /*
    * DeletedAdminScope.php
    * blog2.0
    * Created: 05, 27 2022
    *@author Glenn G. Rudge <glenn@hyperwebdev.com>
    *@package
    */

    namespace App\Scopes;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Scope;
    use Illuminate\Support\Facades\Auth;

    class DeletedAdminScope implements Scope
    {
        public function apply(Builder $builder, Model $model)
        {
            if (Auth::check() && Auth::user()->is_admin) {
                $builder->withTrashed();
            }
        }
    }