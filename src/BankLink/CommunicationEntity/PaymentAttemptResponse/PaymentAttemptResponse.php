<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse;

use JMS\Serializer\Annotation;
use SwedbankPaymentPortal\SharedEntity\AbstractResponse;
use SwedbankPaymentPortal\SharedEntity\Type\MerchantMode;
use SwedbankPaymentPortal\SharedEntity\Type\PurchaseStatus;

/**
 * The container for the XML request.
 *
 * @Annotation\XmlRoot("Response")
 * @Annotation\AccessType("public_method")
 */
class PaymentAttemptResponse extends AbstractResponse
{
    /**
     * The top level container for the query results.
     *
     * @var QueryTxnResult
     *
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult")
     * @Annotation\SerializedName("QueryTxnResult")
     */
    private $queryTxnResult;

    /**
     * Indicates if simulators have been used or a payment provider has been contacted.
     *
     * @var MerchantMode
     *
     * @Annotation\Type("SwedbankPaymentPortal\SharedEntity\Type\MerchantMode")
     */
    private $mode;

    /**
     * A numeric status code.
     *
     * @var PurchaseStatus
     *
     * @Annotation\Type("SwedbankPaymentPortal\SharedEntity\Type\PurchaseStatus")
     */
    private $status;

    /**
     * PaymentAttemptResponse constructor.
     *
     * @param QueryTxnResult $queryTxn
     * @param MerchantMode   $mode
     * @param string         $reason
     * @param PurchaseStatus $status
     * @param int            $time
     */
    public function __construct(QueryTxnResult $queryTxn, MerchantMode $mode, $reason, PurchaseStatus $status, $time)
    {
        parent::__construct($reason, $time);
        $this->queryTxnResult = $queryTxn;
        $this->mode = $mode;
        $this->status = $status;
    }

    /**
     * QueryTxnResult getter.
     *
     * @return QueryTxnResult
     */
    public function getQueryTxnResult()
    {
        return $this->queryTxnResult;
    }

    /**
     * QueryTxnResult setter.
     *
     * @param QueryTxnResult $queryTxnResult
     */
    public function setQueryTxnResult($queryTxnResult)
    {
        $this->queryTxnResult = $queryTxnResult;
    }

    /**
     * Mode getter.
     *
     * @return MerchantMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Mode setter.
     *
     * @param MerchantMode $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * Status getter.
     *
     * @return PurchaseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status setter.
     *
     * @param PurchaseStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
