<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getOrderId() 获取订单号
 * @method void setOrderId(string $OrderId) 设置订单号
 * @method integer getStatus() 获取订单状态
 * @method void setStatus(integer $Status) 设置订单状态
 * @method string getPayer() 获取支付者
 * @method void setPayer(string $Payer) 设置支付者
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method integer getRealTotalCost() 获取实际支付金额（分）
 * @method void setRealTotalCost(integer $RealTotalCost) 设置实际支付金额（分）
 * @method integer getVoucherDecline() 获取代金券抵扣金额（分）
 * @method void setVoucherDecline(integer $VoucherDecline) 设置代金券抵扣金额（分）
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getGoodsCategoryId() 获取产品分类ID
 * @method void setGoodsCategoryId(integer $GoodsCategoryId) 设置产品分类ID
 */

/**
 *订单数据对象
 */
class Deal extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $OrderId;

    /**
     * @var integer 订单状态
     */
    public $Status;

    /**
     * @var string 支付者
     */
    public $Payer;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var integer 实际支付金额（分）
     */
    public $RealTotalCost;

    /**
     * @var integer 代金券抵扣金额（分）
     */
    public $VoucherDecline;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 产品分类ID
     */
    public $GoodsCategoryId;
    /**
     * @param string $OrderId 订单号
     * @param integer $Status 订单状态
     * @param string $Payer 支付者
     * @param string $CreateTime 创建时间
     * @param string $Creator 创建人
     * @param integer $RealTotalCost 实际支付金额（分）
     * @param integer $VoucherDecline 代金券抵扣金额（分）
     * @param integer $ProjectId 项目ID
     * @param integer $GoodsCategoryId 产品分类ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("VoucherDecline",$param) and $param["VoucherDecline"] !== null) {
            $this->VoucherDecline = $param["VoucherDecline"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }
    }
}