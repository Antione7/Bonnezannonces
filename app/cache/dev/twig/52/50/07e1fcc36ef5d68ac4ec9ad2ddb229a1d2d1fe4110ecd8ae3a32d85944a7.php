<?php

/* MainBundle:Main:categorie.html.twig */
class __TwigTemplate_525007e1fcc36ef5d68ac4ec9ad2ddb229a1d2d1fe4110ecd8ae3a32d85944a7 extends Twig_Template
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
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 9
            echo "                    <div class=\"col-lg-3 trait-gauche\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main_annonce_par_categorie", array("id" => $this->getAttribute($context["categorie"], "idCategorie", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-default\"><h4><strong>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array())), "html", null, true);
            echo "</strong></h4></li></button></a>
                        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subcategories"]) ? $context["subcategories"] : $this->getContext($context, "subcategories")), $this->getAttribute($context["categorie"], "idCategorie", array()), array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategorie"]) {
                // line 12
                echo "                            
                            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main_annonce_par_categorie", array("id" => $this->getAttribute($context["subcategorie"], "idCategorie", array()))), "html", null, true);
                echo "\"><h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategorie"], "libelle", array()), "html", null, true);
                echo "</h5></a>
                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    
            
    </div>

    
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Main:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  76 => 16,  65 => 13,  62 => 12,  58 => 11,  52 => 10,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
