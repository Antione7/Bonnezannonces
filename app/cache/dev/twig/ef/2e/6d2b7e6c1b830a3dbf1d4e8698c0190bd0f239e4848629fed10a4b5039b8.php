<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_ef2e6d2b7e6c1b830a3dbf1d4e8698c0190bd0f239e4848629fed10a4b5039b8 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    
    <div class=\"form-group ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), "vars", array()), "errors", array())) {
            echo "has-error";
        }
        echo " row\">
    <label class=\"col-lg-2\">Nom:</label>
    <div class=\"col-lg-3\">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Entrez votre nom", "required" => "required")));
        echo "
    </div>
    </div>
    
    <div class=\"form-group ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), "vars", array()), "errors", array())) {
            echo "has-error";
        }
        echo " row\">
    <label class=\"col-lg-2\">Prénom:</label>
    <div class=\"col-lg-3\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Entrez votre prénom", "required" => "required")));
        echo "
    </div>
    </div>
    
    <div class=\"form-group ";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array())) {
            echo "has-error";
        }
        echo " row\">
    <label class=\"col-lg-2\">Nom d'utilisateur:</label>
    <div class=\"col-lg-3\">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Entrez votre nom d'utilisateur", "required" => "required")));
        echo "
    </div>
    </div>
    
    <div class=\"form-group ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatarFile", array()), "vars", array()), "errors", array())) {
            echo "has-error";
        }
        echo " row\">
    <label class=\"col-lg-2\">Avatar:</label>
    <div class=\"col-lg-3\">
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatarFile", array()), 'widget');
        echo "
    </div>
    </div>
    
    <div class=\"form-group ";
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array())) {
            echo "has-error";
        }
        echo " row\">
    <label class=\"col-lg-2\">Email:</label>
    <div class=\"col-lg-3\">
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Entrez votre adresse email", "required" => "required")));
        echo "
    </div>
    </div>
    
    <div class=\"form-group ";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array())) {
            echo "has-error";
        }
        echo " row\">
    <label class=\"col-lg-2\">Mot de passe:</label>
    <div class=\"col-lg-3\">
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Entrez votre mot de passe", "required" => "required")));
        echo "
    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 43
            echo "      <label class=\"control-label has-error\" for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
    <div class=\"col-lg-3\">
    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Entrez votre mot de passe à nouveau", "required" => "required")));
        echo "
    </div>
    </div>
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
    <div class=\"row\">
        <div class=\"col-lg-8\">
        <input type=\"submit\" class=\"btn btn-sm btn-success pull-right\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
</form>














";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 50,  133 => 47,  129 => 45,  118 => 43,  114 => 42,  110 => 41,  102 => 38,  95 => 34,  87 => 31,  80 => 27,  72 => 24,  65 => 20,  57 => 17,  50 => 13,  42 => 10,  35 => 6,  27 => 3,  19 => 1,);
    }
}
