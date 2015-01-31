<?php

/* MainBundle:Annonce:new.html.twig */
class __TwigTemplate_e4686c4acc571b57e2fa52c4762dfb63c3aaf3a36532364ac094aca3ed2d8033 extends Twig_Template
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
        echo "    <div class=\"col-lg-4\">
    <h1>Annonce creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">
                    Back to the list
                </a>
            </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Annonce:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
