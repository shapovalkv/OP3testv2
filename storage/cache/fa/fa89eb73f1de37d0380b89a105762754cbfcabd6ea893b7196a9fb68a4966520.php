<?php

/* default/template/extension/payment/emspay_ideal.twig */
class __TwigTemplate_098c13a866846518a19d6c99516e948ab1083ca79f37516fc78e3dffe6a9faa3 extends Twig_Template
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

    ";
        // line 3
        echo (isset($context["text_select_bank"]) ? $context["text_select_bank"] : null);
        echo "

    <select name=\"issuer_id\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["issuers"]) ? $context["issuers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["issuer"]) {
            // line 7
            echo "            <option value=\"";
            echo $this->getAttribute($context["issuer"], "id", array());
            echo "\">";
            echo $this->getAttribute($context["issuer"], "name", array());
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['issuer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </select>

    <div class=\"buttons pull-right\">
        <div class=\"right\">
            <input type=\"submit\" value=\"";
        // line 13
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" class=\"button btn btn-primary\"/>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/emspay_ideal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 9,  35 => 7,  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <form action="{{ action }}" method="post">*/
/* */
/*     {{ text_select_bank }}*/
/* */
/*     <select name="issuer_id">*/
/*         {% for issuer in issuers %}*/
/*             <option value="{{issuer.id}}">{{ issuer.name }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* */
/*     <div class="buttons pull-right">*/
/*         <div class="right">*/
/*             <input type="submit" value="{{ button_confirm}}" class="button btn btn-primary"/>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
