<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.ReceiveMessageRequest</code>
 */
class ReceiveMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource group = 1;</code>
     */
    protected $group = null;
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.MessageQueue message_queue = 2;</code>
     */
    protected $message_queue = null;
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.FilterExpression filter_expression = 3;</code>
     */
    protected $filter_expression = null;
    /**
     * Generated from protobuf field <code>int32 batch_size = 4;</code>
     */
    protected $batch_size = 0;
    /**
     * Required if client type is simple consumer.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration invisible_duration = 5;</code>
     */
    protected $invisible_duration = null;
    /**
     * For message auto renew and clean
     *
     * Generated from protobuf field <code>bool auto_renew = 6;</code>
     */
    protected $auto_renew = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\Resource $group
     *     @type \Apache\Rocketmq\V2\MessageQueue $message_queue
     *     @type \Apache\Rocketmq\V2\FilterExpression $filter_expression
     *     @type int $batch_size
     *     @type \Google\Protobuf\Duration $invisible_duration
     *           Required if client type is simple consumer.
     *     @type bool $auto_renew
     *           For message auto renew and clean
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource group = 1;</code>
     * @return \Apache\Rocketmq\V2\Resource|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Resource group = 1;</code>
     * @param \Apache\Rocketmq\V2\Resource $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\Resource::class);
        $this->group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.MessageQueue message_queue = 2;</code>
     * @return \Apache\Rocketmq\V2\MessageQueue|null
     */
    public function getMessageQueue()
    {
        return $this->message_queue;
    }

    public function hasMessageQueue()
    {
        return isset($this->message_queue);
    }

    public function clearMessageQueue()
    {
        unset($this->message_queue);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.MessageQueue message_queue = 2;</code>
     * @param \Apache\Rocketmq\V2\MessageQueue $var
     * @return $this
     */
    public function setMessageQueue($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\MessageQueue::class);
        $this->message_queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.FilterExpression filter_expression = 3;</code>
     * @return \Apache\Rocketmq\V2\FilterExpression|null
     */
    public function getFilterExpression()
    {
        return $this->filter_expression;
    }

    public function hasFilterExpression()
    {
        return isset($this->filter_expression);
    }

    public function clearFilterExpression()
    {
        unset($this->filter_expression);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.FilterExpression filter_expression = 3;</code>
     * @param \Apache\Rocketmq\V2\FilterExpression $var
     * @return $this
     */
    public function setFilterExpression($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\FilterExpression::class);
        $this->filter_expression = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 batch_size = 4;</code>
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batch_size;
    }

    /**
     * Generated from protobuf field <code>int32 batch_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBatchSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->batch_size = $var;

        return $this;
    }

    /**
     * Required if client type is simple consumer.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration invisible_duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInvisibleDuration()
    {
        return $this->invisible_duration;
    }

    public function hasInvisibleDuration()
    {
        return isset($this->invisible_duration);
    }

    public function clearInvisibleDuration()
    {
        unset($this->invisible_duration);
    }

    /**
     * Required if client type is simple consumer.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration invisible_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInvisibleDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->invisible_duration = $var;

        return $this;
    }

    /**
     * For message auto renew and clean
     *
     * Generated from protobuf field <code>bool auto_renew = 6;</code>
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->auto_renew;
    }

    /**
     * For message auto renew and clean
     *
     * Generated from protobuf field <code>bool auto_renew = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoRenew($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_renew = $var;

        return $this;
    }

}
