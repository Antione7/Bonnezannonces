<?php

/* ::main_n1.html.twig */
class __TwigTemplate_12d5269be68bab589866dce70ab010cc8ec1992912238b2be2fd1b7c35b7fa79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- NIVEAU1 -->
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\"/>
    <title>Bonnezannonces</title>
        
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
    <!--<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bc16x16.ico"), "html", null, true);
        echo "\" />-->

  </head>

  <body>
  ";
        // line 15
        $this->env->loadTemplate("MainBundle:Main:banniere.html.twig")->display($context);
        // line 16
        echo "  ";
        $this->env->loadTemplate("MainBundle:Main:menu.html.twig")->display($context);
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "    ";
        echo "   
 
  </body>
</html><!-- Fin du NIVEAU 1 -->
        

";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::main_n1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  55 => 19,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  37 => 10,  33 => 9,  29 => 8,  20 => 1,);
    }
}
