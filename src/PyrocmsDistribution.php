<?php namespace Anomaly\PyrocmsDistribution;

use Anomaly\StreamsDistribution\StreamsDistribution;

/**
 * Class PyrocmsDistribution
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PyrocmsDistribution
 */
class PyrocmsDistribution extends StreamsDistribution
{

    /**
     * The default standard theme.
     *
     * @var string
     */
    protected $standardTheme = 'anomaly.theme.pyrocms';

    /**
     * The default admin theme.
     *
     * @var string
     */
    protected $adminTheme = 'anomaly.theme.pyrocms';

}
