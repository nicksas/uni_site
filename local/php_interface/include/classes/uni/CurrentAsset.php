<?

namespace uni;

use Bitrix\Main\Page\Asset, Bitrix\Main\Page\AssetLocation;

class CurrentAsset
{
    protected static $styles = [
        'https://unpkg.com/swiper/swiper-bundle.min.css',
    ];

    protected static $scripts = [
        'https://unpkg.com/swiper/swiper-bundle.min.js',
        SITE_TEMPLATE_PATH . '/js/script.js',

    ];

    protected static $strings = [
        AssetLocation::BEFORE_CSS => [],
        AssetLocation::AFTER_CSS => [
            '<link rel="icon" type="image/x-icon" href="/favicon.ico"/>',
            '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>',
            '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">',
            '<meta name="viewport" content="width=device-width, initial-scale=1">',
        ],
        AssetLocation::AFTER_JS_KERNEL => [],
        AssetLocation::AFTER_JS => ['<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->',]
    ];

    /**
     * Set project-specific assets
     */
    public static function setProjectAsset()
    {
        $asset = new self();
        $asset->setProjectScripts()->setProjectStrings()->setProjectStyles();
    }

    /**
     * @return $this
     */
    protected function setProjectStyles()
    {
        $asset = Asset::getInstance();

        foreach (self::$styles as $style) {
            $asset->addCss($style);
        }

        return $this;
    }

    /**
     * @return $this
     */
    protected function setProjectScripts()
    {
        $asset = Asset::getInstance();

        foreach (self::$scripts as $script) {
            $asset->addJs($script);
        }

        return $this;
    }

    /**
     * @return $this
     */
    protected function setProjectStrings()
    {
        $asset = Asset::getInstance();

        foreach (self::$strings as $location => $stringList) {
            foreach ($stringList as $string) {
                $asset->addString($string, true, $location);
            }
        }

        return $this;
    }
}
