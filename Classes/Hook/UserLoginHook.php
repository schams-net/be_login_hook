<?php
namespace SchamsNet\BeLoginHook\Hook;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Authentication\AbstractUserAuthentication;

class UserLoginHook
{
    /**
     * @var AbstractUserAuthentication
     */
    private $user = null;

    /**
     * @var \TYPO3\CMS\Core\Log\Logger
     */
    private $logger;

    /**
     * Post User Lookup Hook
     *
     * @access public
     * @param array $params
     * @param AbstractUserAuthentication $authentication
     * @see AbstractUserAuthentication
     */
    public function postUserLookUp(array $params, AbstractUserAuthentication $authentication)
    {
        $this->init();
        $this->user = $authentication;

        // Logging API
        $this->logger->info('gettype: ' . gettype($this->user));

        // At least, this should write something, if/when the hook is executed
        $stream = fopen('debug.log', 'a');
        fputs($stream, time() . PHP_EOL);
    }

    /**
     *
     */
    public function init()
    {
        /** @var $logger \TYPO3\CMS\Core\Log\Logger */
        $this->logger = GeneralUtility::makeInstance('TYPO3\CMS\Core\Log\LogManager')->getLogger(__CLASS__);
    }
}
