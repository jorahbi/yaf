<?php

namespace Entity;

/**
 * BorrowInvest
 */
class BorrowInvest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $bid;

    /**
     * @var integer
     */
    private $debtId;

    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $capital;

    /**
     * @var string
     */
    private $capitalYear;

    /**
     * @var string
     */
    private $interest;

    /**
     * @var string
     */
    private $fee;

    /**
     * @var string
     */
    private $receiveCapital;

    /**
     * @var string
     */
    private $receiveInterest;

    /**
     * @var string
     */
    private $paidFee;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var boolean
     */
    private $dealStatus;

    /**
     * @var string
     */
    private $discount;

    /**
     * @var string
     */
    private $orderNo;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var integer
     */
    private $addMs;

    /**
     * @var integer
     */
    private $deadline;

    /**
     * @var boolean
     */
    private $isAuto;

    /**
     * @var boolean
     */
    private $client;

    /**
     * @var integer
     */
    private $serviceId;

    /**
     * @var string
     */
    private $sale;

    /**
     * @var string
     */
    private $jobNum;

    /**
     * @var string
     */
    private $brokerage;

    /**
     * @var string
     */
    private $brokerageExt;

    /**
     * @var boolean
     */
    private $brokerageType;

    /**
     * @var boolean
     */
    private $isFirst;

    /**
     * @var string
     */
    private $rate;

    /**
     * @var integer
     */
    private $isBeyond;

    /**
     * @var string
     */
    private $addIp;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowInvest
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set debtId
     *
     * @param integer $debtId
     *
     * @return BorrowInvest
     */
    public function setDebtId($debtId)
    {
        $this->debtId = $debtId;

        return $this;
    }

    /**
     * Get debtId
     *
     * @return integer
     */
    public function getDebtId()
    {
        return $this->debtId;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return BorrowInvest
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set capital
     *
     * @param string $capital
     *
     * @return BorrowInvest
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set capitalYear
     *
     * @param string $capitalYear
     *
     * @return BorrowInvest
     */
    public function setCapitalYear($capitalYear)
    {
        $this->capitalYear = $capitalYear;

        return $this;
    }

    /**
     * Get capitalYear
     *
     * @return string
     */
    public function getCapitalYear()
    {
        return $this->capitalYear;
    }

    /**
     * Set interest
     *
     * @param string $interest
     *
     * @return BorrowInvest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set fee
     *
     * @param string $fee
     *
     * @return BorrowInvest
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set receiveCapital
     *
     * @param string $receiveCapital
     *
     * @return BorrowInvest
     */
    public function setReceiveCapital($receiveCapital)
    {
        $this->receiveCapital = $receiveCapital;

        return $this;
    }

    /**
     * Get receiveCapital
     *
     * @return string
     */
    public function getReceiveCapital()
    {
        return $this->receiveCapital;
    }

    /**
     * Set receiveInterest
     *
     * @param string $receiveInterest
     *
     * @return BorrowInvest
     */
    public function setReceiveInterest($receiveInterest)
    {
        $this->receiveInterest = $receiveInterest;

        return $this;
    }

    /**
     * Get receiveInterest
     *
     * @return string
     */
    public function getReceiveInterest()
    {
        return $this->receiveInterest;
    }

    /**
     * Set paidFee
     *
     * @param string $paidFee
     *
     * @return BorrowInvest
     */
    public function setPaidFee($paidFee)
    {
        $this->paidFee = $paidFee;

        return $this;
    }

    /**
     * Get paidFee
     *
     * @return string
     */
    public function getPaidFee()
    {
        return $this->paidFee;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return BorrowInvest
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dealStatus
     *
     * @param boolean $dealStatus
     *
     * @return BorrowInvest
     */
    public function setDealStatus($dealStatus)
    {
        $this->dealStatus = $dealStatus;

        return $this;
    }

    /**
     * Get dealStatus
     *
     * @return boolean
     */
    public function getDealStatus()
    {
        return $this->dealStatus;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return BorrowInvest
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return BorrowInvest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return BorrowInvest
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set addMs
     *
     * @param integer $addMs
     *
     * @return BorrowInvest
     */
    public function setAddMs($addMs)
    {
        $this->addMs = $addMs;

        return $this;
    }

    /**
     * Get addMs
     *
     * @return integer
     */
    public function getAddMs()
    {
        return $this->addMs;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     *
     * @return BorrowInvest
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return integer
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set isAuto
     *
     * @param boolean $isAuto
     *
     * @return BorrowInvest
     */
    public function setIsAuto($isAuto)
    {
        $this->isAuto = $isAuto;

        return $this;
    }

    /**
     * Get isAuto
     *
     * @return boolean
     */
    public function getIsAuto()
    {
        return $this->isAuto;
    }

    /**
     * Set client
     *
     * @param boolean $client
     *
     * @return BorrowInvest
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return boolean
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return BorrowInvest
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return integer
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set sale
     *
     * @param string $sale
     *
     * @return BorrowInvest
     */
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return string
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set jobNum
     *
     * @param string $jobNum
     *
     * @return BorrowInvest
     */
    public function setJobNum($jobNum)
    {
        $this->jobNum = $jobNum;

        return $this;
    }

    /**
     * Get jobNum
     *
     * @return string
     */
    public function getJobNum()
    {
        return $this->jobNum;
    }

    /**
     * Set brokerage
     *
     * @param string $brokerage
     *
     * @return BorrowInvest
     */
    public function setBrokerage($brokerage)
    {
        $this->brokerage = $brokerage;

        return $this;
    }

    /**
     * Get brokerage
     *
     * @return string
     */
    public function getBrokerage()
    {
        return $this->brokerage;
    }

    /**
     * Set brokerageExt
     *
     * @param string $brokerageExt
     *
     * @return BorrowInvest
     */
    public function setBrokerageExt($brokerageExt)
    {
        $this->brokerageExt = $brokerageExt;

        return $this;
    }

    /**
     * Get brokerageExt
     *
     * @return string
     */
    public function getBrokerageExt()
    {
        return $this->brokerageExt;
    }

    /**
     * Set brokerageType
     *
     * @param boolean $brokerageType
     *
     * @return BorrowInvest
     */
    public function setBrokerageType($brokerageType)
    {
        $this->brokerageType = $brokerageType;

        return $this;
    }

    /**
     * Get brokerageType
     *
     * @return boolean
     */
    public function getBrokerageType()
    {
        return $this->brokerageType;
    }

    /**
     * Set isFirst
     *
     * @param boolean $isFirst
     *
     * @return BorrowInvest
     */
    public function setIsFirst($isFirst)
    {
        $this->isFirst = $isFirst;

        return $this;
    }

    /**
     * Get isFirst
     *
     * @return boolean
     */
    public function getIsFirst()
    {
        return $this->isFirst;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return BorrowInvest
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set isBeyond
     *
     * @param integer $isBeyond
     *
     * @return BorrowInvest
     */
    public function setIsBeyond($isBeyond)
    {
        $this->isBeyond = $isBeyond;

        return $this;
    }

    /**
     * Get isBeyond
     *
     * @return integer
     */
    public function getIsBeyond()
    {
        return $this->isBeyond;
    }

    /**
     * Set addIp
     *
     * @param string $addIp
     *
     * @return BorrowInvest
     */
    public function setAddIp($addIp)
    {
        $this->addIp = $addIp;

        return $this;
    }

    /**
     * Get addIp
     *
     * @return string
     */
    public function getAddIp()
    {
        return $this->addIp;
    }
}

