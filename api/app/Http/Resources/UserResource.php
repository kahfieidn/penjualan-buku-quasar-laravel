<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public $status;
    public $message;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     public function __construct($status, $message, $resource)
     {
         parent::__construct($resource);
         $this->status  = $status;
         $this->message = $message;
     }
 

    public function toArray(Request $request): array
    {
        $response = [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource,
        ];
    
        if ($this->status === true) {
            $response['roles'] = $this->getRoleNames();
        }
    
        return $response;    
    }
}   
