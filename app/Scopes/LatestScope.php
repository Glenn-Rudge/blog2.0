<?php
    /*
    * LatestScope.php
    * blog2.0
    * Created: 05, 27 2022
    *@author Glenn G. Rudge <glenn@hyperwebdev.com>
    *@package
    */

    namespace App\Scopes;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Scope;

    class LatestScope implements Scope
    {
        public function apply(Builder $builder, Model $model)
        {
            $builder->orderBy($model::CREATED_AT, "DESC");
        }
    }
