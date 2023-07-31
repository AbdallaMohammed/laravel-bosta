<?php

namespace LaravelBosta\Actions;

trait ManagePickUpLocations
{
    /**
     * @return mixed
     */
    public function listPickupLocations()
    {
        return $this->get('pickup-locations');
    }
}
