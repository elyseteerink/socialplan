<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Boot3 extends Theme {

    public $name = 'boot3';
    public $author = 'Peter Varga - Binvision Ltd.';
    public $author_website = 'http://vargapeter.com';
    public $website = 'http://vargapeter.com';
    public $description = 'Twitter Bootstrap 3 theme for PyroCMS';
    public $version = '1.0.0';
    public $options 		= array(
        'theme' => array(
            'title'         => 'Theme Style',
            'description'   => 'Choose a color style for your Bootstrap 3 theme (by <a href="http://bootswatch.com/">Bootswatch</a>)<br/> Documentation: <a href="http://www.vargapeter.com/blog/2013/12/boot3-theme-for-pyrocms.html">boot3 theme</a>',
            'default'       => 'default',
            'type'          => 'select',
            'options'       => 'custom=Custom (for developers)|default=Default (with shadows and gradients)|default_flat=Default (flat version)|amelia=Amelia|cerulean=Cerulean|cosmo=Cosmo|cyborg=Cyborg|flatly=Flatly|journal=Journal|readable=Readable|simplex=Simplex|slate=Slate|spacelab=Spacelab|united=United|yeti=Yeti',
            'is_required'   => true
        ),
        'cdn' => array(
            'title'         => 'CDN',
            'description'   => 'CDN support for Bootstrap\'s CSS and JavaScript',
            'default'       => '0',
            'type'          => 'select',
            'options'       => '0=Local|1=CDN',
            'is_required'   => true
        ),
        'js' => array(
            'title'         => 'Bootstrap JS mode',
            'description'   => 'Use the compiled bootstrap js with all plugins or set to load plugins individualy. If you use CND, this option is not aviable. ',
            'default'       => 'compiled',
            'type'          => 'select',
            'options'       => 'compiled=Compiled (load all plugins)|plugins=Load plugins individualy',
            'is_required'   => true
        ),
        'js_plugins' 	=> array(
            'title'         => 'Bootstrap JS plugins',
            'description'   => 'Use only if you don\' use CDN and "Bootstrap JS mode" value is "Load plugins".',
            'default'       => 'affix,alert,button,carousel,collapse,dropdown,modal,popover,scrollspy,tab,tooltip,transition',
            'type'          => 'select-multiple',
            'options'       => 'affix=affix|alert=alert|button=button|carousel=carousel|collapse=collapse|dropdown=dropdown|modal=modal|popover=popover|scrollspy=scrollspy|tab=tab|tooltip=tooltip|transition=transition',
            'is_required'   => true
        ),
        'ie' => array(
            'title'         => 'IE Support',
            'description'   => 'Bootstrap and icon IE support',
            'default'       => '1',
            'type'          => 'select',
            'options'       => '0=IE9+|1=IE7+',
            'is_required'   => true
        ),
    );
}
/* End of file theme.php */