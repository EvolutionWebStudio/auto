<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    public $metaData;

	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public function init() {
        $this->metaData = new MetaData(array(
            'title' => 'Auto Rašević Pale',
            'description' => 'Auto plac Rašević na Palama Vam nudi širok asortiman polovnih automobila, mogućnost zamjene staro za novo kao i mogućnost kupovine na lizing.',
            'image' => 'autorasevic.com/img/autorasevic-logo-social-image.png',
            'url' => 'autorasevic.com',
            'keywords' => 'polovni automobili, republika srpska, bosna i hercegovina, automobil, polovan auto, vozilo, kupovina auta',
            'language' => 'sr',
            'type' => 'article'
        ));
	}
}