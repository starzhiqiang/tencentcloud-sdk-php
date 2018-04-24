<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method string getInstanceFamily() 获取实例机型系列。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例机型系列。
 * @method integer getGPU() 获取GPU核数，单位：核。
 * @method void setGPU(integer $GPU) 设置GPU核数，单位：核。
 * @method integer getCPU() 获取CPU核数，单位：核。
 * @method void setCPU(integer $CPU) 设置CPU核数，单位：核。
 * @method integer getMemory() 获取内存容量，单位：`GB`。
 * @method void setMemory(integer $Memory) 设置内存容量，单位：`GB`。
 * @method string getCbsSupport() 获取是否支持云硬盘。取值范围：<br><li>`TRUE`：表示支持云硬盘；<br><li>`FALSE`：表示不支持云硬盘。
 * @method void setCbsSupport(string $CbsSupport) 设置是否支持云硬盘。取值范围：<br><li>`TRUE`：表示支持云硬盘；<br><li>`FALSE`：表示不支持云硬盘。
 * @method string getInstanceTypeState() 获取机型状态。取值范围：<br><li>`AVAILABLE`：表示机型可用；<br><li>`UNAVAILABLE`：表示机型不可用。
 * @method void setInstanceTypeState(string $InstanceTypeState) 设置机型状态。取值范围：<br><li>`AVAILABLE`：表示机型可用；<br><li>`UNAVAILABLE`：表示机型不可用。
 */

/**
 *描述实例机型配置信息
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var string 实例机型系列。
     */
    public $InstanceFamily;

    /**
     * @var integer GPU核数，单位：核。
     */
    public $GPU;

    /**
     * @var integer CPU核数，单位：核。
     */
    public $CPU;

    /**
     * @var integer 内存容量，单位：`GB`。
     */
    public $Memory;

    /**
     * @var string 是否支持云硬盘。取值范围：<br><li>`TRUE`：表示支持云硬盘；<br><li>`FALSE`：表示不支持云硬盘。
     */
    public $CbsSupport;

    /**
     * @var string 机型状态。取值范围：<br><li>`AVAILABLE`：表示机型可用；<br><li>`UNAVAILABLE`：表示机型不可用。
     */
    public $InstanceTypeState;
    /**
     * @param string $Zone 可用区。
     * @param string $InstanceType 实例机型。
     * @param string $InstanceFamily 实例机型系列。
     * @param integer $GPU GPU核数，单位：核。
     * @param integer $CPU CPU核数，单位：核。
     * @param integer $Memory 内存容量，单位：`GB`。
     * @param string $CbsSupport 是否支持云硬盘。取值范围：<br><li>`TRUE`：表示支持云硬盘；<br><li>`FALSE`：表示不支持云硬盘。
     * @param string $InstanceTypeState 机型状态。取值范围：<br><li>`AVAILABLE`：表示机型可用；<br><li>`UNAVAILABLE`：表示机型不可用。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("GPU",$param) and $param["GPU"] !== null) {
            $this->GPU = $param["GPU"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CbsSupport",$param) and $param["CbsSupport"] !== null) {
            $this->CbsSupport = $param["CbsSupport"];
        }

        if (array_key_exists("InstanceTypeState",$param) and $param["InstanceTypeState"] !== null) {
            $this->InstanceTypeState = $param["InstanceTypeState"];
        }
    }
}