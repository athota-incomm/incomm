<?php

/**
 *
 */
namespace Kensium\Testimonial\Plugin;

/**
 *
 */
class CreatePostPlugin
{

    /**
     * Change redirect after login to home instead of dashboard.
     *
     * @param \Magento\Customer\Controller\Account $subject
     * @param \Magento\Framework\Controller\Result\Redirect $result
     */
    public function afterExecute(
        \Magento\Customer\Controller\Account\CreatePost $subject,
        $result)
    {
        //echo "Hi am in this"; exit;
        $result->setPath('/'); // Change this to what you want
        return $result;
    }

}