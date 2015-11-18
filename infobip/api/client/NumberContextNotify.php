<?php

namespace infobip\api\client;

use infobip\api\AbstractApiClient;
use infobip\api\model\nc\notify\NumberContextRequest;
use infobip\api\model\nc\notify\NumberContextResponse;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class NumberContextNotify extends AbstractApiClient
{

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param NumberContextRequest $body
     * @return NumberContextResponse
     */
    public function execute(NumberContextRequest $body) {
        $restPath = $this->getRestUrl("/number/1/notify");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new NumberContextResponse));
    }

}