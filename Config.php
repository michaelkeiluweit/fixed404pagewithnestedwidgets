<?php


namespace OxidSupport\Fixed404PageWithNestedWidgets;

/**
 * Class Config
 * @link https://github.com/OXID-eSales/oxideshop_ce/pull/757
 */
class Config extends Config_parent
{
    /** @var bool */
    private $initDone = false;

    /**
     * Starts session manager
     *
     * @return null
     */
    public function init()
    {
        $firstRun = false;

        if (!$this->_blInit) {
            $firstRun = true;
        }

        $parentReturn = parent::init();

        if ($firstRun) {
            $this->initDone = true;
        }

        return $parentReturn;
    }

    /**
     * Unsets all session data.
     *
     * @return null
     */
    public function pageClose()
    {
        if (!$this->initDone) {
            return;
        }

        return parent::pageClose();
    }
}