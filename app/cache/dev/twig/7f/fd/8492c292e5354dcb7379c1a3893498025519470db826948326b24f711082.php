<?php

/* MainBundle:Main:par_categorie.html.twig */
class __TwigTemplate_7ffd8492c292e5354dcb7379c1a3893498025519470db826948326b24f711082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MainBundle::main_n2.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'n3' => array($this, 'block_n3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::main_n2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_n3($context, array $blocks = array())
    {
        // line 4
        echo "    
    <div class=\"container\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 7
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h1>
    <div class=\"row\">
        <div class=\"col-lg-5\" style=\"height:300px\">
            <img style=\"max-height:100%; width:auto\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["annonce"], "getWebPath", array(), "method")), "html", null, true);
            echo "\">
        </div>
        <div class=\"col-lg-5\" style=\"height:300px\">
            <div class=\"row\" style=\"max-height:80%; width:auto\">
                <p><strong>Description:</strong></p><br/>
                <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</p> 
            </div>
            <div class=\"row\" style=\"max-height:10%; width:auto\">
                <p>Créé le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            </div>
            <div class=\"row\" style=\"max-height:10%; width:auto\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reponse_new", array("id" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-success\">Répondre</button></a>
            </div>
        </div>
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
    
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Main:par_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  74 => 21,  68 => 18,  62 => 15,  54 => 10,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
