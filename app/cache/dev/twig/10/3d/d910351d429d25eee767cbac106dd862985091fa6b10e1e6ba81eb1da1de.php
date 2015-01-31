<?php

/* MainBundle::main_n2.html.twig */
class __TwigTemplate_103dd910351d429d25eee767cbac106dd862985091fa6b10e1e6ba81eb1da1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::main_n1.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'n3' => array($this, 'block_n3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::main_n1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container margin-container-top\">
";
        // line 7
        echo "        ";
        $this->displayBlock('n3', $context, $blocks);
        // line 10
        echo "    </div>
";
    }

    // line 7
    public function block_n3($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MainBundle::main_n2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  51 => 7,  46 => 10,  43 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
