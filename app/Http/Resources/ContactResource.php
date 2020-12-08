<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Nom' =>$this->Nom,
            'Prenom' => $this->Prenom,
            'Ville' => $this->Ville,
            'Tell' => $this->Tell,
          
            
        ];
    }
}
