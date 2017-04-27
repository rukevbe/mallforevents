<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;
use App\vendorlistings;

class VendorListingsTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(vendorlistings $listings)
    {
        $user = User::where('id', $listings->user_id)->first();
        return [
            'id' => (int)$listings->id,
            'username'=>ucfirst($user->username),
            'user_fullname' => ucfirst($user->first_name)." ".ucfirst($user->last_name),
            'title' => ucfirst($listings->title),
            'listing_desc' => ucfirst($listings->listing_desc),
            'phone_number' => $listings->phone_number,
            'state_id' => $listings->state_id,
            'city' => $listings->city,
            'min_price' => $listings->min_price,
            'max_price' => $listings->max_price,
            'category_id' => $listings->category_id,
            'pix_upload' => $listings->pix_upload,

        ];
    }
}
