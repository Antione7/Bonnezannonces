<?php

/* MainBundle:Main:menu.html.twig */
class __TwigTemplate_1ce0575ea76b7b72ef94cfacb2558901563687183a56f365762ab1b8869b754b extends Twig_Template
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
        echo "
<div class=\"row\">
    <nav class=\"navbar navbar-inverse\">
             <ul class=\"nav navbar-nav\">
                    <li class=\"";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "main_homepage")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">&nbsp;Nouvelles annonces</a></li>
                    <li class=\"";
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "main_categorie")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("main_categorie");
        echo "\">&nbsp;Catégories</a></li>
                    
            </ul>
            ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                
            <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"";
            // line 12
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "main_annonces")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("annonce");
            echo "\">Mes annonces&nbsp;</a></li>
                    <!--<li class=\"";
            // line 13
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "main_profile")) {
                echo "active";
            }
            echo "\"><a href=\"profile\">Mon profile&nbsp;</a></li>-->
                    <li><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter&nbsp;</a></li>
            </ul>
            
            ";
        } else {
            // line 18
            echo "                
            
            <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"";
            // line 21
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_inscription")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_inscription");
            echo "\">Créer un compte&nbsp;</a></li>
                    <li class=\"";
            // line 22
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_connection")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_connection");
            echo "\">Se connecter&nbsp;</a></li>
            </ul>
            
            ";
        }
        // line 26
        echo "            
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "MainBundle:Main:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  83 => 22,  75 => 21,  70 => 18,  63 => 14,  57 => 13,  49 => 12,  45 => 10,  43 => 9,  33 => 6,  25 => 5,  19 => 1,);
    }
}
