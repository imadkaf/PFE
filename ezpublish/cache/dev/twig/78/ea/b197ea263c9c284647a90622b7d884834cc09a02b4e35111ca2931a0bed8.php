<?php

/* eZDemoBundle:block:gallery.html.twig */
class __TwigTemplate_78eab197ea263c9c284647a90622b7d884834cc09a02b4e35111ca2931a0bed8 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        list($context["big_image_alias"], $context["items_count"]) =         array("gallery", twig_length_filter($this->env, (isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items"))));
        // line 2
        echo "<!-- BLOCK: START -->
<div class=\"block-type-gallery\">

    <div class=\"block-gallery\">
        <div class=\"gallery-viewer\">
            ";
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items")), 0, array(), "array"), "locationId", array()), "viewType" => "gallery_viewer", "params" => array("image_alias" => (isset($context["big_image_alias"]) ? $context["big_image_alias"] : $this->getContext($context, "big_image_alias")), "total_items" => (isset($context["items_count"]) ? $context["items_count"] : $this->getContext($context, "items_count"))))));
        // line 18
        echo "
        </div>
        <div class=\"gallery-navigator\">
            <a href=\"#\" class=\"navig prev\" style=\"opacity:0;\"><span class=\"hide\">&lt;</span></a>
            <a href=\"#\" class=\"navig next\"><span class=\"hide\">&gt;</span></a>

            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ezdemo/images/fg-selected.png"), "html", null, true);
        echo "\" alt=\"Selected indicator\" class=\"cursor\" />

            ";
        // line 27
        echo "            <ul class=\"images\">
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                <li>
                    ";
            // line 30
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($context["item"], "locationId", array()), "viewType" => "gallery_item", "params" => array("big_alias" => (isset($context["big_image_alias"]) ? $context["big_image_alias"] : $this->getContext($context, "big_image_alias")), "thumb_alias" => "gallerythumbnail"))));
            // line 39
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </ul>
        </div>


    </div>

    <script type=\"text/javascript\">
        YUI(YUI3_config).use('ezgallery', 'event', function (Y) {
            Y.on('domready', function () {
                Y.all('.block-type-gallery').each(function () {
                    var g = new Y.eZ.Gallery({
                        title: 'h3 a',
                        caption: 'figcaption div',
                        autoFixSizes: false,
                        autoScrollOnSelect: false,
                        navigator: {
                            gallery: this.one('.block-gallery')
                        },
                        initFunc: function () {
                            var imgs = this.navigator.getImages();

                            setTimeout(function () {
                                imgs.each(function(elem) {
                                    (new Image).src = elem.getAttribute('data-gallery-src');
                                });
                            }, 0);
                        },
                        updateFunc: function (item) {
                            var node = item.imageNode,
                                    img = this.container.one('.gallery-viewer-image').one('> img');

                            if ( node.getAttribute('data-gallery-item') == 'image' ) {
                                this.container.one('.visible').replaceClass('visible', 'hidden');
                                this.container.one('.gallery-viewer-image').replaceClass('hidden', 'visible');
                            } else if ( node.getAttribute('data-gallery-item') == 'video' ) {
                                this.container.one('.gallery-viewer-image').replaceClass('visible', 'hidden');
                                this.container.one('#gallery-viewer-video-' + node.getAttribute('data-gallery-node-id')).replaceClass('hidden', 'visible');
                            }

                            if ( img ) {
                                img.setAttribute('src', node.getAttribute('data-gallery-src'));
                                img.setAttribute('height', node.getAttribute('data-gallery-height'));
                                img.setAttribute('width', node.getAttribute('data-gallery-width'));
                                img.setAttribute('alt', node.get('title'));
                            }

                            var t = this.container.one('.visible ' + this.conf.title),
                                    cap = this.container.one('.visible ' + this.conf.caption),
                                    c = this.container.one('.visible ' + this.conf.counter);

                            t.setContent(node.get('title'));
                            t.setAttribute('href', node.getAttribute('data-gallery-node-url'));
                            c.setContent(item.index + 1);
                            cap.setContent(node.one('figcaption').getContent());
                        }
                    });
                });
            });
        });

    </script>
</div>
<!-- BLOCK: END -->
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 42,  58 => 39,  56 => 30,  53 => 29,  49 => 28,  46 => 27,  41 => 24,  33 => 18,  30 => 9,  28 => 8,  21 => 2,  19 => 1,);
    }
}
