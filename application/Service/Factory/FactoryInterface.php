<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2014-04-19 
 */

namespace Service\Factory;

/**
 * Interface FactoryInterface
 * @package Service\Factory
 */
interface FactoryInterface
{
    /**
     * @return mixed
     */
    public function create();
} 