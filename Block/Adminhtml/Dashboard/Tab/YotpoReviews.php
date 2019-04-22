<?php

namespace Yotpo\Yotpo\Block\Adminhtml\Dashboard\Tab;

/**
 * Adminhtml dashboard Yotpo reviews tab
 */
class YotpoReviews extends \Yotpo\Yotpo\Block\Adminhtml\Report\Reviews
{
    /**
     * @var string
     */
    protected $_template = 'Yotpo_Yotpo::dashboard/yotpo_reviews_tab.phtml';

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('yotpoReviewsTab');
    }
}
