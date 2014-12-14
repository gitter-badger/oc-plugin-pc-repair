<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\PcRepair\Components
 */

namespace AxC\PcRepair\Components;

use AxC\PcRepair\Models\Settings as SettingsModel;

/**
 * PcRepair component class
 */
class PcRepair extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name'				=> trans('axc.pcrepair::lang.component.name'),
			'description'	=> trans('axc.pcrepair::lang.component.description')
		];
	}

	/**
	 * Return the setting values.
	 * @return array
	 */
	public function settings()
	{
		return SettingsModel::instance();
	}
}