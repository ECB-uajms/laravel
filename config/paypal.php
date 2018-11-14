<?php
return array(
    // set your paypal credential
    'client_id' => 'AVAzsJM0UTG9bLg_4uVITYtOS5-m7AkE61NSsFelFGWYQSbygQnioxPsNOYauQoSxPwshmuvEtYoGBiB',
    'secret' => 'EPW6zJ_Yj8XfZxUPVN9kkPALMgeSFDjKFyF3Gu2ewtMPG-aGkgGCMCU4yEp9DSGdvrefG-eAvFuroqzC',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);