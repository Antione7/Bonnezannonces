<?php

/* MainBundle:Annonce:show.html.twig */
class __TwigTemplate_e8b94b79e88dbabada2492ae0b0aebf6cc08f2baa58d515bd74a3d52964016b1 extends Twig_Template
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</h1>
    <div class=\"row\">
        <div class=\"col-lg-5\" style=\"height:300px\">
            <img style=\"max-height:100%; width:auto\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getWebPath", array(), "method")), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-lg-5\" style=\"height:300px\">
            <div class=\"row\" style=\"max-height:80%; width:auto\">
                <p><strong>Description:</strong></p><br/>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p> 
            </div>
            <div class=\"row\" style=\"max-height:20%; width:auto\">
                <p>Créé le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Annonce:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  78 => 27,  70 => 22,  60 => 15,  54 => 12,  46 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
