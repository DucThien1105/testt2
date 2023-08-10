<?php
namespace Magentop\Helloworld2\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Index extends Template
{
    public function getText() {
        return "Hello World";
    }
}