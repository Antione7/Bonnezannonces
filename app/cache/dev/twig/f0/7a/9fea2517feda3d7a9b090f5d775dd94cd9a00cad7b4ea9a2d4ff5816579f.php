<?php

/* MainBundle:Main:banniere.html.twig */
class __TwigTemplate_f07a9fea2517feda3d7a9b090f5d775dd94cd9a00cad7b4ea9a2d4ff5816579f extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"banniere\">
        <div class=\"col-lg-4\">
            <!--<img src=\"img/bc.png\"/>-->
            <h1><strong>Bonnezannonces</strong></h1>
        </div>
    
        ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "        <div class=\"col-lg-offset-4 col-lg-4\">
        <h4 class=\"pull-right\">Bienvenue ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " ! </h4>
<!--        <img style=\"height:100px width:auto\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getWebPath", array(), "method")), "html", null, true);
            echo "\">-->
        </div>
        ";
        }
        // line 14
        echo "    
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MainBundle:Main:banniere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  37 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
