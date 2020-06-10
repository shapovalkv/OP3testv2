<?php

/* default/template/extension/payment/emspay_bancontact.twig */
class __TwigTemplate_a05105197288ab77583b0381506ecbd686cea2d288c6a15c266498b2501aff9b extends Twig_Template
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
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\">
    <div class=\"buttons pull-right\">
        <div class=\"right\">
            <input type=\"submit\" value=\"";
        // line 4
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" class=\"button btn btn-primary\"/>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/emspay_bancontact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 1,);
    }
}
/* <form action="{{ action }}" method="post">*/
/*     <div class="buttons pull-right">*/
/*         <div class="right">*/
/*             <input type="submit" value="{{ button_confirm }}" class="button btn btn-primary"/>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
