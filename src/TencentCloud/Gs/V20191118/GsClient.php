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

namespace TencentCloud\Gs\V20191118;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Gs\V20191118\Models as Models;

/**
* @method Models\CreateSessionResponse CreateSession(Models\CreateSessionRequest $req) 创建会话
* @method Models\DescribeWorkersResponse DescribeWorkers(Models\DescribeWorkersRequest $req) 查询空闲机器数量
* @method Models\StopGameResponse StopGame(Models\StopGameRequest $req) 强制退出游戏
* @method Models\TrylockWorkerResponse TrylockWorker(Models\TrylockWorkerRequest $req) 尝试锁定机器
 */

class GsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "gs.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-11-18";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("gs")."\\"."V20191118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
