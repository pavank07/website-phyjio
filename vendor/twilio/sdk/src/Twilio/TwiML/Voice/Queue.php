<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Queue extends TwiML {
    /**
     * Queue constructor.
     *
     * @param string $name Queue name
     * @param array $attributes Optional attributes
     */
    public function __construct($name, $attributes = array()) {
        parent::__construct('Queue', $name, $attributes);
    }

    /**
     * Add Url attribute.
     *
     * @param string $url Action URL
     * @return static $this.
     */
    public function setUrl($url) {
        return $this->setAttribute('url', $url);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Action URL method
     * @return static $this.
     */
    public function setMethod($method) {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add ReservationSid attribute.
     *
     * @param string $reservationSid TaskRouter Reservation SID
     * @return static $this.
     */
    public function setReservationSid($reservationSid) {
        return $this->setAttribute('reservationSid', $reservationSid);
    }

    /**
     * Add PostWorkActivitySid attribute.
     *
     * @param string $postWorkActivitySid TaskRouter Activity SID
     * @return static $this.
     */
    public function setPostWorkActivitySid($postWorkActivitySid) {
        return $this->setAttribute('postWorkActivitySid', $postWorkActivitySid);
    }
}