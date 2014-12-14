<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\PcRepair\Updates
 */

namespace AxC\PcRepair\Updates;

use AxC\PcRepair\Models\Settings;
use AxC\AddThis\Models\Settings as AddThisSettings;
use AxC\Segment\Models\Settings as SegmentSettings;
use AxC\reCAPTCHA\Models\Settings as reCAPTCHASettings;
use RainLab\GoogleAnalytics\Models\Settings as GoogleAnalyticsSettings;
use System\Models\MailSettings;
use AnandPatel\SeoExtension\models\Settings as SeoExtensionSettings;
use Backend\Models\BrandSettings;

/**
 * Add data to PcRepair Settings DB scheme.
 */
class SeedSettingsTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Settings::set('name', 'PcRepair');
		Settings::set('full_name', 'Pc-Repair.it di Dr. Enrico Ciliberti');
		Settings::set('slogan', 'TODO');
		Settings::set('about', implode("\n", [
			'Pc Repair designs measured networks for business and private use.',
			'Are you a small business and do you want to wire a plant LAN?!',
			'No problem, thanks to the top products on the market and the best brands, you can create customized networks with IP video surveillance, too.',
			'The IP video surveillance allows you to exploit your LAN and wi-fi network (with an ADSL subscription), for the connection of the cameras, so you can send images directly on your mobile or on your home computer, comfortably controlling and recording without leaving your home!'
		] ) );

		Settings::set('address_street_name', 'via Genova');
		Settings::set('address_street_number', '342');
		Settings::set('address_zip', '150122');
		Settings::set('address_city', 'Spinetta Marengo');
		Settings::set('address_province', 'AL');
		Settings::set('address_country', 'IT');

		Settings::set('vat', '2362030062');
		Settings::set('tax_id', 'CLBNRC84R24L304E');
		Settings::set('rea', '249061');

		AddThisSettings::set('pubid', 'ra-5481b81d1db3c0ea');

		SegmentSettings::set('write_key', 'kx6d0zq88l');

		$ga_settings = GoogleAnalyticsSettings::instance();
		$ga_settings->project_name = 'pc-repair';
		$ga_settings->client_id = '405319661433-vqp7bl1328v47kejc65b3egp126thjmt.apps.googleusercontent.com';
		$ga_settings->app_email =  '405319661433-vqp7bl1328v47kejc65b3egp126thjmt@developer.gserviceaccount.com';
		$ga_settings->profile_id = '57988834';
		$ga_settings->tracking_id = 'UA-30406637-1';
		$ga_settings->domain_name = 'pc-repair';
		$ga_settings->save();

		$mail_settings = MailSettings::instance();
		$mail_settings->send_mode = 'smtp';
		$mail_settings->sender_name = 'Pc-Repair.it di Dr. Enrico Ciliberti';
		$mail_settings->sender_email = 'info@pc-repair.it';
		$mail_settings->smtp_address ='smtp.aruba.it';
		$mail_settings->smtp_port = '465';
		$mail_settings->smtp_user = 'info@pc-repair.it';
		$mail_settings->smtp_password = 'info1984@';
		$mail_settings->smtp_authorization = '1';
		$mail_settings->smtp_ssl = '1';
		$mail_settings->save();

		$seo_extension_settings = SeoExtensionSettings::instance();
		$seo_extension_settings->enable_title = '1';
		$seo_extension_settings->enable_canonical_url = '1';
		$seo_extension_settings->title = '| PcRepair';
		$seo_extension_settings->title_position = 'suffix';
		$seo_extension_settings->other_tags = "<meta name=\"author\" content=\"Alex Carrega (AxC - http:\/\/www.alexcarrega.com)\">\r\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" \/>\r\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" \/>\r\n<meta name=\"description\" content=\"Contact page\" \/>\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
		$seo_extension_settings->save();

		$brand_settings = BrandSettings::instance();
		$brand_settings->app_name = 'PcRepair';
		$brand_settings->app_tagline = 'Pc-Repair.it di Dr. Enrico Ciliberti';
		$brand_settings->primary_color_light = '#68a2d0';
		$brand_settings->primary_color_dark = '#0e3584';
		$brand_settings->secondary_color_light = '#d0ca68';
		$brand_settings->secondary_color_dark = '#d06883';
		$brand_settings->save();

		$recaptcha_settings = reCAPTCHASettings::instance();
		$recaptcha_settings->public_key = '6LfxAfASAAAAAKfvUhOPEgPOdhZLXMf-c9ucQcrQ';
		$recaptcha_settings->private_key = '6LfxAfASAAAAAOI3695qPD3dlcHhK0k1DeKxD6ot';
		$recaptcha_settings->save();

		// @menu-bg: #515151;
		// @menu-color: #EEEEEE;
		// @menu_active-color: #FFFFFF;
		// @menu-down-bg: rgba(238, 238, 238, 0.75);
		// @menu-down-border: #D6D6D6;
		// @shadow-color: #666666;
		// @p-color: #0e3584;
		// @s-color: #68a2d0;
		// @bg-color: #FFFFFF;
		// @i-color: #68d06d;
		// @w-color: #d0ca68;
		// @d-color: #d06883;
	}
}