<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banquetHallReservations extends Model
{
    //
    /**
     * @var mixed
     */
    private $hallId;
    /**
     * @var mixed
     */
    private $reservationDate;
    /**
     * @var mixed
     */
    private $package;
    /**
     * @var mixed
     */
    private $customerName;
    /**
     * @var mixed
     */
    private $customerEmail;
    /**
     * @var mixed
     */
    private $customerMobile;
    /**
     * @var mixed|string
     */
    private $status;
}
