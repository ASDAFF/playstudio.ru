<?

define('MODULE_DIR', 'Sementsov.dewplayer');																											// <------------ HERE------------- MODULE DIR MUST BE CHANGED

global $MESS;
$strPath2Lang = str_replace('\\', '/', __FILE__);

$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));
include($strPath2Lang."/install/version.php");

Class Sementsov_dewplayer extends CModule 																								// <------------ HERE------------- CLASS NAME MUST BE CHANGED
{
        var $MODULE_ID = 'Sementsov.dewplayer';
        var $MODULE_VERSION;
        var $MODULE_VERSION_DATE;
        var $MODULE_NAME;
        var $MODULE_DESCRIPTION;
		
		var $arComponents = array(
							'sementsov.dewplayer',
									//<------------ HERE------------- LIST OF COMPONENTS. IT NEED TO DELETE COMPONENTS
						);

        function Sementsov_dewplayer()																												// <------------ HERE------------- CONSTRUCTOR NAME MUST BE CHANGED
        {
                $arModuleVersion = array();
				$path = str_replace("\\", "/", __FILE__);
				$path = substr($path, 0, strlen($path) - strlen("/index.php"));
				include($path."/version.php");
				$this->MODULE_VERSION = $arModuleVersion["VERSION"];
				$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
				$this->PARTNER_NAME = GetMessage("MODULE_PARTNER");
				$this->PARTNER_URI = GetMessage("MODULE_SITE");
				$this->MODULE_NAME = GetMessage("MODULE_NAME"); 												// <------------ HERE------------- LANG MUST BE CHANGED
				$this->MODULE_DESCRIPTION = GetMessage("MODULE_DESC"); 									// <------------ HERE------------- LANG MUST BE CHANGED

			return true;

        }



        function DoInstall(){
			CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".MODULE_DIR."/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components", true, true);
            RegisterModule($this->MODULE_ID);
        }

        function DoUninstall(){           
			foreach($this->arComponents as $comp)
				if($comp)
					Sementsov_dewplayer_removeDirRec($_SERVER["DOCUMENT_ROOT"]."/bitrix/components/sementsov/{$comp}");
			UnRegisterModule($this->MODULE_ID);
        }


}


function Sementsov_dewplayer_removeDirRec($dir)
{
   if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
           is_dir($obj) ? Sementsov_dewplayer_removeDirRec($obj) : unlink($obj);
       }
   }
   rmdir($dir);
}


?>

