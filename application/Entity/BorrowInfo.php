<?php

namespace Entity;

/**
 * BorrowInfo
 */
class BorrowInfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $package;

    /**
     * @var string
     */
    private $classify;

    /**
     * @var string
     */
    private $borrowName;

    /**
     * @var string
     */
    private $borrowOrder;

    /**
     * @var integer
     */
    private $borrowUid;

    /**
     * @var boolean
     */
    private $borrowType;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $durationUnit;

    /**
     * @var string
     */
    private $durationMonth;

    /**
     * @var integer
     */
    private $durationOriginal;

    /**
     * @var string
     */
    private $money;

    /**
     * @var string
     */
    private $investMoney;

    /**
     * @var string
     */
    private $interest;

    /**
     * @var string
     */
    private $finialMoney;

    /**
     * @var string
     */
    private $finialInterest;

    /**
     * @var string
     */
    private $finialBaseInterest;

    /**
     * @var string
     */
    private $receiveMoney;

    /**
     * @var string
     */
    private $receiveInterest;

    /**
     * @var string
     */
    private $interestRate;

    /**
     * @var string
     */
    private $baseRate;

    /**
     * @var string
     */
    private $alsRate;

    /**
     * @var boolean
     */
    private $repaymentType;

    /**
     * @var boolean
     */
    private $repaymentDay;

    /**
     * @var boolean
     */
    private $borrowStatus;

    /**
     * @var string
     */
    private $cover;

    /**
     * @var string
     */
    private $startPrice;

    /**
     * @var string
     */
    private $upperPrice;

    /**
     * @var string
     */
    private $perPrice;

    /**
     * @var integer
     */
    private $startTime;

    /**
     * @var string
     */
    private $hasMoney;

    /**
     * @var integer
     */
    private $openTime;

    /**
     * @var integer
     */
    private $endTime;

    /**
     * @var integer
     */
    private $fullTime;

    /**
     * @var integer
     */
    private $deadline;

    /**
     * @var boolean
     */
    private $isShow;

    /**
     * @var boolean
     */
    private $isAuto;

    /**
     * @var boolean
     */
    private $isOverdue;

    /**
     * @var boolean
     */
    private $isLoan;

    /**
     * @var boolean
     */
    private $couponsType;

    /**
     * @var integer
     */
    private $hits;

    /**
     * @var string
     */
    private $risk;

    /**
     * @var string
     */
    private $danbaoName;

    /**
     * @var string
     */
    private $zhaiwuName;

    /**
     * @var string
     */
    private $zhaiwuIdcard;

    /**
     * @var string
     */
    private $zhaiwuCompany;

    /**
     * @var boolean
     */
    private $pactType;

    /**
     * @var boolean
     */
    private $pactZhang;

    /**
     * @var string
     */
    private $rongziyongtu;

    /**
     * @var boolean
     */
    private $saleAuto;

    /**
     * @var integer
     */
    private $addTime;


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
     * Set package
     *
     * @param string $package
     *
     * @return BorrowInfo
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set classify
     *
     * @param string $classify
     *
     * @return BorrowInfo
     */
    public function setClassify($classify)
    {
        $this->classify = $classify;

        return $this;
    }

    /**
     * Get classify
     *
     * @return string
     */
    public function getClassify()
    {
        return $this->classify;
    }

    /**
     * Set borrowName
     *
     * @param string $borrowName
     *
     * @return BorrowInfo
     */
    public function setBorrowName($borrowName)
    {
        $this->borrowName = $borrowName;

        return $this;
    }

    /**
     * Get borrowName
     *
     * @return string
     */
    public function getBorrowName()
    {
        return $this->borrowName;
    }

    /**
     * Set borrowOrder
     *
     * @param string $borrowOrder
     *
     * @return BorrowInfo
     */
    public function setBorrowOrder($borrowOrder)
    {
        $this->borrowOrder = $borrowOrder;

        return $this;
    }

    /**
     * Get borrowOrder
     *
     * @return string
     */
    public function getBorrowOrder()
    {
        return $this->borrowOrder;
    }

    /**
     * Set borrowUid
     *
     * @param integer $borrowUid
     *
     * @return BorrowInfo
     */
    public function setBorrowUid($borrowUid)
    {
        $this->borrowUid = $borrowUid;

        return $this;
    }

    /**
     * Get borrowUid
     *
     * @return integer
     */
    public function getBorrowUid()
    {
        return $this->borrowUid;
    }

    /**
     * Set borrowType
     *
     * @param boolean $borrowType
     *
     * @return BorrowInfo
     */
    public function setBorrowType($borrowType)
    {
        $this->borrowType = $borrowType;

        return $this;
    }

    /**
     * Get borrowType
     *
     * @return boolean
     */
    public function getBorrowType()
    {
        return $this->borrowType;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return BorrowInfo
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set durationUnit
     *
     * @param string $durationUnit
     *
     * @return BorrowInfo
     */
    public function setDurationUnit($durationUnit)
    {
        $this->durationUnit = $durationUnit;

        return $this;
    }

    /**
     * Get durationUnit
     *
     * @return string
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * Set durationMonth
     *
     * @param string $durationMonth
     *
     * @return BorrowInfo
     */
    public function setDurationMonth($durationMonth)
    {
        $this->durationMonth = $durationMonth;

        return $this;
    }

    /**
     * Get durationMonth
     *
     * @return string
     */
    public function getDurationMonth()
    {
        return $this->durationMonth;
    }

    /**
     * Set durationOriginal
     *
     * @param integer $durationOriginal
     *
     * @return BorrowInfo
     */
    public function setDurationOriginal($durationOriginal)
    {
        $this->durationOriginal = $durationOriginal;

        return $this;
    }

    /**
     * Get durationOriginal
     *
     * @return integer
     */
    public function getDurationOriginal()
    {
        return $this->durationOriginal;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return BorrowInfo
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set investMoney
     *
     * @param string $investMoney
     *
     * @return BorrowInfo
     */
    public function setInvestMoney($investMoney)
    {
        $this->investMoney = $investMoney;

        return $this;
    }

    /**
     * Get investMoney
     *
     * @return string
     */
    public function getInvestMoney()
    {
        return $this->investMoney;
    }

    /**
     * Set interest
     *
     * @param string $interest
     *
     * @return BorrowInfo
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
     * Set finialMoney
     *
     * @param string $finialMoney
     *
     * @return BorrowInfo
     */
    public function setFinialMoney($finialMoney)
    {
        $this->finialMoney = $finialMoney;

        return $this;
    }

    /**
     * Get finialMoney
     *
     * @return string
     */
    public function getFinialMoney()
    {
        return $this->finialMoney;
    }

    /**
     * Set finialInterest
     *
     * @param string $finialInterest
     *
     * @return BorrowInfo
     */
    public function setFinialInterest($finialInterest)
    {
        $this->finialInterest = $finialInterest;

        return $this;
    }

    /**
     * Get finialInterest
     *
     * @return string
     */
    public function getFinialInterest()
    {
        return $this->finialInterest;
    }

    /**
     * Set finialBaseInterest
     *
     * @param string $finialBaseInterest
     *
     * @return BorrowInfo
     */
    public function setFinialBaseInterest($finialBaseInterest)
    {
        $this->finialBaseInterest = $finialBaseInterest;

        return $this;
    }

    /**
     * Get finialBaseInterest
     *
     * @return string
     */
    public function getFinialBaseInterest()
    {
        return $this->finialBaseInterest;
    }

    /**
     * Set receiveMoney
     *
     * @param string $receiveMoney
     *
     * @return BorrowInfo
     */
    public function setReceiveMoney($receiveMoney)
    {
        $this->receiveMoney = $receiveMoney;

        return $this;
    }

    /**
     * Get receiveMoney
     *
     * @return string
     */
    public function getReceiveMoney()
    {
        return $this->receiveMoney;
    }

    /**
     * Set receiveInterest
     *
     * @param string $receiveInterest
     *
     * @return BorrowInfo
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
     * Set interestRate
     *
     * @param string $interestRate
     *
     * @return BorrowInfo
     */
    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;

        return $this;
    }

    /**
     * Get interestRate
     *
     * @return string
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * Set baseRate
     *
     * @param string $baseRate
     *
     * @return BorrowInfo
     */
    public function setBaseRate($baseRate)
    {
        $this->baseRate = $baseRate;

        return $this;
    }

    /**
     * Get baseRate
     *
     * @return string
     */
    public function getBaseRate()
    {
        return $this->baseRate;
    }

    /**
     * Set alsRate
     *
     * @param string $alsRate
     *
     * @return BorrowInfo
     */
    public function setAlsRate($alsRate)
    {
        $this->alsRate = $alsRate;

        return $this;
    }

    /**
     * Get alsRate
     *
     * @return string
     */
    public function getAlsRate()
    {
        return $this->alsRate;
    }

    /**
     * Set repaymentType
     *
     * @param boolean $repaymentType
     *
     * @return BorrowInfo
     */
    public function setRepaymentType($repaymentType)
    {
        $this->repaymentType = $repaymentType;

        return $this;
    }

    /**
     * Get repaymentType
     *
     * @return boolean
     */
    public function getRepaymentType()
    {
        return $this->repaymentType;
    }

    /**
     * Set repaymentDay
     *
     * @param boolean $repaymentDay
     *
     * @return BorrowInfo
     */
    public function setRepaymentDay($repaymentDay)
    {
        $this->repaymentDay = $repaymentDay;

        return $this;
    }

    /**
     * Get repaymentDay
     *
     * @return boolean
     */
    public function getRepaymentDay()
    {
        return $this->repaymentDay;
    }

    /**
     * Set borrowStatus
     *
     * @param boolean $borrowStatus
     *
     * @return BorrowInfo
     */
    public function setBorrowStatus($borrowStatus)
    {
        $this->borrowStatus = $borrowStatus;

        return $this;
    }

    /**
     * Get borrowStatus
     *
     * @return boolean
     */
    public function getBorrowStatus()
    {
        return $this->borrowStatus;
    }

    /**
     * Set cover
     *
     * @param string $cover
     *
     * @return BorrowInfo
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set startPrice
     *
     * @param string $startPrice
     *
     * @return BorrowInfo
     */
    public function setStartPrice($startPrice)
    {
        $this->startPrice = $startPrice;

        return $this;
    }

    /**
     * Get startPrice
     *
     * @return string
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Set upperPrice
     *
     * @param string $upperPrice
     *
     * @return BorrowInfo
     */
    public function setUpperPrice($upperPrice)
    {
        $this->upperPrice = $upperPrice;

        return $this;
    }

    /**
     * Get upperPrice
     *
     * @return string
     */
    public function getUpperPrice()
    {
        return $this->upperPrice;
    }

    /**
     * Set perPrice
     *
     * @param string $perPrice
     *
     * @return BorrowInfo
     */
    public function setPerPrice($perPrice)
    {
        $this->perPrice = $perPrice;

        return $this;
    }

    /**
     * Get perPrice
     *
     * @return string
     */
    public function getPerPrice()
    {
        return $this->perPrice;
    }

    /**
     * Set startTime
     *
     * @param integer $startTime
     *
     * @return BorrowInfo
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set hasMoney
     *
     * @param string $hasMoney
     *
     * @return BorrowInfo
     */
    public function setHasMoney($hasMoney)
    {
        $this->hasMoney = $hasMoney;

        return $this;
    }

    /**
     * Get hasMoney
     *
     * @return string
     */
    public function getHasMoney()
    {
        return $this->hasMoney;
    }

    /**
     * Set openTime
     *
     * @param integer $openTime
     *
     * @return BorrowInfo
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;

        return $this;
    }

    /**
     * Get openTime
     *
     * @return integer
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return BorrowInfo
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set fullTime
     *
     * @param integer $fullTime
     *
     * @return BorrowInfo
     */
    public function setFullTime($fullTime)
    {
        $this->fullTime = $fullTime;

        return $this;
    }

    /**
     * Get fullTime
     *
     * @return integer
     */
    public function getFullTime()
    {
        return $this->fullTime;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     *
     * @return BorrowInfo
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
     * Set isShow
     *
     * @param boolean $isShow
     *
     * @return BorrowInfo
     */
    public function setIsShow($isShow)
    {
        $this->isShow = $isShow;

        return $this;
    }

    /**
     * Get isShow
     *
     * @return boolean
     */
    public function getIsShow()
    {
        return $this->isShow;
    }

    /**
     * Set isAuto
     *
     * @param boolean $isAuto
     *
     * @return BorrowInfo
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
     * Set isOverdue
     *
     * @param boolean $isOverdue
     *
     * @return BorrowInfo
     */
    public function setIsOverdue($isOverdue)
    {
        $this->isOverdue = $isOverdue;

        return $this;
    }

    /**
     * Get isOverdue
     *
     * @return boolean
     */
    public function getIsOverdue()
    {
        return $this->isOverdue;
    }

    /**
     * Set isLoan
     *
     * @param boolean $isLoan
     *
     * @return BorrowInfo
     */
    public function setIsLoan($isLoan)
    {
        $this->isLoan = $isLoan;

        return $this;
    }

    /**
     * Get isLoan
     *
     * @return boolean
     */
    public function getIsLoan()
    {
        return $this->isLoan;
    }

    /**
     * Set couponsType
     *
     * @param boolean $couponsType
     *
     * @return BorrowInfo
     */
    public function setCouponsType($couponsType)
    {
        $this->couponsType = $couponsType;

        return $this;
    }

    /**
     * Get couponsType
     *
     * @return boolean
     */
    public function getCouponsType()
    {
        return $this->couponsType;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return BorrowInfo
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set risk
     *
     * @param string $risk
     *
     * @return BorrowInfo
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;

        return $this;
    }

    /**
     * Get risk
     *
     * @return string
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * Set danbaoName
     *
     * @param string $danbaoName
     *
     * @return BorrowInfo
     */
    public function setDanbaoName($danbaoName)
    {
        $this->danbaoName = $danbaoName;

        return $this;
    }

    /**
     * Get danbaoName
     *
     * @return string
     */
    public function getDanbaoName()
    {
        return $this->danbaoName;
    }

    /**
     * Set zhaiwuName
     *
     * @param string $zhaiwuName
     *
     * @return BorrowInfo
     */
    public function setZhaiwuName($zhaiwuName)
    {
        $this->zhaiwuName = $zhaiwuName;

        return $this;
    }

    /**
     * Get zhaiwuName
     *
     * @return string
     */
    public function getZhaiwuName()
    {
        return $this->zhaiwuName;
    }

    /**
     * Set zhaiwuIdcard
     *
     * @param string $zhaiwuIdcard
     *
     * @return BorrowInfo
     */
    public function setZhaiwuIdcard($zhaiwuIdcard)
    {
        $this->zhaiwuIdcard = $zhaiwuIdcard;

        return $this;
    }

    /**
     * Get zhaiwuIdcard
     *
     * @return string
     */
    public function getZhaiwuIdcard()
    {
        return $this->zhaiwuIdcard;
    }

    /**
     * Set zhaiwuCompany
     *
     * @param string $zhaiwuCompany
     *
     * @return BorrowInfo
     */
    public function setZhaiwuCompany($zhaiwuCompany)
    {
        $this->zhaiwuCompany = $zhaiwuCompany;

        return $this;
    }

    /**
     * Get zhaiwuCompany
     *
     * @return string
     */
    public function getZhaiwuCompany()
    {
        return $this->zhaiwuCompany;
    }

    /**
     * Set pactType
     *
     * @param boolean $pactType
     *
     * @return BorrowInfo
     */
    public function setPactType($pactType)
    {
        $this->pactType = $pactType;

        return $this;
    }

    /**
     * Get pactType
     *
     * @return boolean
     */
    public function getPactType()
    {
        return $this->pactType;
    }

    /**
     * Set pactZhang
     *
     * @param boolean $pactZhang
     *
     * @return BorrowInfo
     */
    public function setPactZhang($pactZhang)
    {
        $this->pactZhang = $pactZhang;

        return $this;
    }

    /**
     * Get pactZhang
     *
     * @return boolean
     */
    public function getPactZhang()
    {
        return $this->pactZhang;
    }

    /**
     * Set rongziyongtu
     *
     * @param string $rongziyongtu
     *
     * @return BorrowInfo
     */
    public function setRongziyongtu($rongziyongtu)
    {
        $this->rongziyongtu = $rongziyongtu;

        return $this;
    }

    /**
     * Get rongziyongtu
     *
     * @return string
     */
    public function getRongziyongtu()
    {
        return $this->rongziyongtu;
    }

    /**
     * Set saleAuto
     *
     * @param boolean $saleAuto
     *
     * @return BorrowInfo
     */
    public function setSaleAuto($saleAuto)
    {
        $this->saleAuto = $saleAuto;

        return $this;
    }

    /**
     * Get saleAuto
     *
     * @return boolean
     */
    public function getSaleAuto()
    {
        return $this->saleAuto;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return BorrowInfo
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
}

