<?php

/* RoelabGusBundle:Default:clients.html.twig */
class __TwigTemplate_f50612c3ab0768c9fcde23ef5391444d99cbf9215f1210da6ec568379631734c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "     Clients!
\t<table border=1>
\t\t<tr>
\t\t\t<th>Action</th>
\t\t\t<th>Username</th>
\t\t\t<th>Domain</th>
\t\t\t<th>Pssword</th>
\t\t</tr>
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 13
            echo "\t\t\t<tr><td><a href=\"editclient/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/edit.png"), "html", null, true);
            echo "></a> <a href=\"deleteclient/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/delete.png"), "html", null, true);
            echo "></a></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "username"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "domain"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "password"), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</table>
\t<br>
     ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  66 => 15,  45 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
