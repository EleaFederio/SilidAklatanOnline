<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentAuthDataCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'street_brgy' => $this->street_brgy,
            'student_id' => $this->student_id,
            'town' => $this->town,
            'province' => $this->province,
            'zip_code' => $this->zip_code,
            'b_day' => $this->b_day,
            'course' => $this->course,
            'year' => $this->year,
            'block' => $this->block,
            'major' => $this->major,
            'phone' => $this->phone,
            'profile_img' => $this->profile_img,
            'email' => $this->email
        ];
    }
}
