<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2020 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2018-2020 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: ClientMessageDtos.proto

namespace Prooph\EventStoreClient\Messages\ClientMessages;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Prooph.EventStoreClient.Messages.ClientMessages.TransactionStart</code>
 */
class TransactionStart extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     */
    private $event_stream_id = '';
    /**
     * Generated from protobuf field <code>int64 expected_version = 2;</code>
     */
    private $expected_version = 0;
    /**
     * Generated from protobuf field <code>bool require_master = 3;</code>
     */
    private $require_master = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_stream_id
     *     @type int|string $expected_version
     *     @type bool $require_master
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->event_stream_id;
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventStreamId($var)
    {
        GPBUtil::checkString($var, true);
        $this->event_stream_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expected_version = 2;</code>
     * @return int|string
     */
    public function getExpectedVersion()
    {
        return $this->expected_version;
    }

    /**
     * Generated from protobuf field <code>int64 expected_version = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpectedVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->expected_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool require_master = 3;</code>
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->require_master;
    }

    /**
     * Generated from protobuf field <code>bool require_master = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireMaster($var)
    {
        GPBUtil::checkBool($var);
        $this->require_master = $var;

        return $this;
    }
}
