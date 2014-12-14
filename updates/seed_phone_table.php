<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\PcRepair\Updates
 */

namespace AxC\PcRepair\Updates;

use AxC\DataManagement\Models\Phone;

/**
 * Add data to Phone DB scheme.
 */
class SeedPhoneTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Phone::truncate();

		$pos = 1;

		Phone::create( [
			'type' => 'work',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 0131-61.99.78',
			'principal' => true
		] );

		Phone::create( [
			'type' => 'mobile',
			'position' => $pos++, 'published' => true, 'number' => '(+39) 348-89.65.890'
		] );
	}
}