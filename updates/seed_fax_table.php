<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\PcRepair\Updates
 */

namespace AxC\PcRepair\Updates;

use AxC\DataManagement\Models\Fax;

/**
 * Add data to Fax DB scheme.
 */
class SeedFaxTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Fax::truncate();

		$pos = 1;

		Fax::create( [
			'type' => 'work',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 0131-61.99.78',
			'principal' => true
		] );
	}
}