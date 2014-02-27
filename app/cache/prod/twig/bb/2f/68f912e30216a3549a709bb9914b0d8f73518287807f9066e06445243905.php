<?php

/* ::base.html.twig */
class __TwigTemplate_bb2f68f912e30216a3549a709bb9914b0d8f73518287807f9066e06445243905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
    <head>
        <title>Gus</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"description\" content=\"Simulator for Human Internet Traffic\" />
        <meta name=\"keywords\" content=\"\"/>
\t";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2814d27_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2814d27_0") : $this->env->getExtension('assets')->getAssetUrl("css/styles_part_1_style_1.css");
            // line 9
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "2814d27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2814d27") : $this->env->getExtension('assets')->getAssetUrl("css/styles.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    </head>

    <body>
\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1aa6170_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_0") : $this->env->getExtension('assets')->getAssetUrl("js/1aa6170_part_1_jquery.min_1.js");
            // line 15
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "1aa6170_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_1") : $this->env->getExtension('assets')->getAssetUrl("js/1aa6170_part_1_menu_2.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "1aa6170_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_2") : $this->env->getExtension('assets')->getAssetUrl("js/1aa6170_part_1_rss_3.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "1aa6170_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_3") : $this->env->getExtension('assets')->getAssetUrl("js/1aa6170_part_1_zjquery.easing.1.3_4.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "1aa6170"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170") : $this->env->getExtension('assets')->getAssetUrl("js/1aa6170.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 17
        echo "\t\t<div class=\"menu\">
\t\t\t<h1 class=\"title\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Gus</a></h1>
\t\t\t<ul id=\"sdt_menu\" class=\"sdt_menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("web");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Web</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"#\">Websites</a>
\t\t\t\t\t\t\t<a href=\"#\">Illustrations</a>
\t\t\t\t\t\t\t<a href=\"#\">Photography</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("email");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Email</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"#\">Websites</a>
\t\t\t\t\t\t\t<a href=\"#\">Illustrations</a>
\t\t\t\t\t\t\t<a href=\"#\">Photography</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("data");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Data</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"#\">Websites</a>
\t\t\t\t\t\t\t<a href=\"#\">Illustrations</a>
\t\t\t\t\t\t\t<a href=\"#\">Photography</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("schedule");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Schedule</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"#\">Websites</a>
\t\t\t\t\t\t\t<a href=\"#\">Illustrations</a>
\t\t\t\t\t\t\t<a href=\"#\">Photography</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Settings</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t<a href=\"#\">IP Addresses</a>
\t\t\t\t\t\t<a href=\"#\">Client Users</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
        <div id=\"content\" class=\"content\">
        ";
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "        </div>
    </body>
</html>
";
    }

    // line 92
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 92,  185 => 93,  183 => 92,  165 => 77,  148 => 63,  131 => 49,  114 => 35,  97 => 21,  91 => 18,  88 => 17,  56 => 15,  52 => 14,  47 => 11,  33 => 9,  29 => 8,  20 => 1,  31 => 4,  28 => 3,);
    }
}
