<?php

namespace infobip\api\client;

use infobip\api\AbstractApiClient;
use infobip\api\model\nc\query\NumberContextRequest;
use infobip\api\model\nc\query\NumberContextResponse;

/**
 * This is a generated class and is not intended for modification!
 * TODO: Point to Github contribution instructions
 */
class NumberContextQuery extends AbstractApiClient
{

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param NumberContextRequest $body
     * @return NumberContextResponse
     */
    public function execute(NumberContextRequest $body) {
        $restPath = $this->getRestUrl("/number/1/query");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new NumberContextResponse));
    }

}