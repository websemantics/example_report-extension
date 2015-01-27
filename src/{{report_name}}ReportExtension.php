<?php namespace {{vendor_name}}\\{{report_name}}ReportExtension;

use Anomaly\DashboardModule\Dashboard\Component\Report\ReportExtension;

/**
 * Class ExampleReportExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\ExampleReportExtension
 */
class {{report_name}}ReportExtension extends ReportExtension
{

    /**
     * Extension identification.
     *
     * @var string
     */
    protected $identifier = 'anomaly.module.dashboard::report.{{toLowerCase report_name}}';

}
