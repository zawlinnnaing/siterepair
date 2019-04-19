<?php
/**
 * Created by PhpStorm.
 * User: zhiyu1205
 * Date: 2019-04-19
 * Time: 20:59
 */

namespace App\General\FormRequestRules;


trait UserFormRequestRules
{
    public function storeRules()
    {
        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ];
    }

    public function updateRules()
    {
        return [
            'name'     => 'required|string|max:255',
        ];
    }

}