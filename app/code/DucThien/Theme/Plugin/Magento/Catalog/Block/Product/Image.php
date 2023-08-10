<?php
namespace DucThien\Theme\Plugin\Magento\Catalog\Block\Product;

use Magento\Catalog\Block\Product\ImageFactory as MagentoImage;
use Magento\Catalog\Block\Product\Image as ImageBlock;

class Image
{
    /**
     * @param MagentoImage $subject
     * @param ImageBlock $result
     *
     * @return ImageBlock
     */
    public function afterCreate(MagentoImage $subject, ImageBlock $result)
    {
        $url = $result->getImageUrl();
        $url = str_replace('\\', '/', $url);
        $url = str_replace('\/', '/', $url);

        return $result->setImageUrl($url);
    }
}
