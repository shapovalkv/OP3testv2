<?php

/* default/template/extension/payment/emspay_payconiq.twig */
class __TwigTemplate_e39223b3b1fdbdbb67789b2f672f58db223d217363c80eeb846b6b6021d7d2df extends Twig_Template
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
        return "default/template/extension/payment/emspay_payconiq.twig";
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
