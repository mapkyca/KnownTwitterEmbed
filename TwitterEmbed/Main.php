<?php

    namespace IdnoPlugins\TwitterEmbed {
        class Main extends \Idno\Common\Plugin {
            function registerPages() {                
                \Idno\Core\site()->template()->extendTemplate('entity/content/embed','twitterembed/embed');
		\Idno\Core\site()->template()->extendTemplate('shell/footer','twitterembed/footer');
            }
        }
    }
