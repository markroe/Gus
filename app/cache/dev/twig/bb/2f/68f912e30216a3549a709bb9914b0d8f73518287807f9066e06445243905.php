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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2814d27_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/styles_part_1_style_1.css");
            // line 9
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "2814d27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2814d27") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/styles.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
\t";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1aa6170_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1aa6170_part_1_jquery.min_1.js");
            // line 16
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "1aa6170_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1aa6170_part_1_menu_2.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "1aa6170_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1aa6170_part_1_rss_3.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "1aa6170_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1aa6170_part_1_zjquery.easing.1.3_4.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "1aa6170"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1aa6170") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1aa6170.js");
            echo "    \t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 18
        echo "\t\t<div class=\"menu\">
\t\t\t<h1 class=\"title\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Gus</a>: The Simulator for Human Internet Traffic</h1>
\t\t\t<ul id=\"sdt_menu\" class=\"sdt_menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("web");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Web</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("webcans");
        echo "\">Cans</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("webjobs");
        echo "\">Jobs</a>
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
\t\t\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("emailcans");
        echo "\">Cans</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("emailjobs");
        echo "\">Jobs</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("data");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Data</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("dlpcans");
        echo "\">Cans</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("dlpjobs");
        echo "\">Jobs</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("status");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Status</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t\t<a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("webstatus");
        echo "\">Web</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("emailstatus");
        echo "\">Email</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("dlpstatus");
        echo "\">DLP</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\">
\t\t\t\t\t\t<span class=\"sdt_active\"></span>
\t\t\t\t\t\t<span class=\"sdt_wrap\">
\t\t\t\t\t\t\t<span class=\"sdt_link\">Settings</span>
\t\t\t\t\t\t\t<span class=\"sdt_descr\"></span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sdt_box\">
\t\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("general");
        echo "\">General</a>
\t\t\t\t\t\t<a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("ipaddresses");
        echo "\">IP Addresses</a>
\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("clients");
        echo "\">Clients</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
        <div id=\"content\" class=\"content\">
        ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "        </div>
    </body>
</html>
";
    }

    // line 91
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
        return array (  229 => 91,  222 => 92,  220 => 91,  211 => 85,  207 => 84,  203 => 83,  192 => 75,  185 => 71,  181 => 70,  177 => 69,  166 => 61,  159 => 57,  155 => 56,  144 => 48,  137 => 44,  133 => 43,  122 => 35,  115 => 31,  111 => 30,  100 => 22,  94 => 19,  91 => 18,  59 => 16,  55 => 15,  47 => 11,  33 => 9,  29 => 8,  20 => 1,  60 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
