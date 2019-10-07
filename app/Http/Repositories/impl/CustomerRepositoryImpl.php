<?php


namespace App\Http\Repositories\impl;


use App\Customer;

class CustomerRepositoryImpl
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}
