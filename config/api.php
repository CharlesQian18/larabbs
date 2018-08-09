<?php

return [

  /*
     * 接口频率限制
     */
    'rate_limits' => [
        // 访问频率限制，次数/分钟（一分钟60次）
        'access' => [
            'expires' => env('RATE_LIMITS_EXPIRES', 1),
            'limit'  => env('RATE_LIMITS', 60),
        ],
        // 登录相关，次数/分钟（一分钟10次）
        'sign' => [
            'expires' => env('SIGN_RATE_LIMITS_EXPIRES', 1),
            'limit'  => env('SIGN_RATE_LIMITS', 1),
        ],
    ],
];