<?php

namespace App\Http\Resources;

use App\Models\Company;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CompanyCollection extends ResourceCollection
{
//    public $collects = Company::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
//        return [
//            'id' => $this->id,
//            'name' => $this->name,
//        ];
    }
}
