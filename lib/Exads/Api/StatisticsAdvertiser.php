<?php

namespace Exads\Api;

/**
 * @link   https://api.exads.com/v1/docs/index.html#!/statistics
 */
class StatisticsAdvertiser extends AbstractStatistics
{
    protected $subGroup = 'advertiser';

    /**
     * @param array $params
     *
     * @return array
     */
    public function language(array $params = array())
    {
        return $this->get($this->getPath('language'), $params);
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function variation(array $params = array())
    {
        return $this->get($this->getPath('variation'), $params);
    }
}
