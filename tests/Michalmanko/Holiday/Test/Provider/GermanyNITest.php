<?php

/*
 * This file is part of the Holiday Library.
 *
 * (c) Michał Mańko <github@michalmanko.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Michalmanko\Holiday\Test\Provider;

/**
 * @author ottowayne <mr.ottowayne@gmail.com>
 */
class GermanyNITest extends GermanyTest
{
    public function getProviderCountryCode()
    {
        return 'GER_NI';
    }

    public function getProviderCountryName()
    {
        return 'GermanyNI';
    }

    public function getProviderInstanceOf()
    {
        return '\\Michalmanko\\Holiday\\Provider\\GermanyNI';
    }

    public function dataProvider()
    {
        $parentData = parent::dataProvider();

        $providerData = array(
            //
        );

        return array_merge($parentData, $providerData);
    }
}
