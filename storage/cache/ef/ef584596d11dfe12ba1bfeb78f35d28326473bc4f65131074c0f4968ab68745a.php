<?php

/* default/template/extension/payment/emspay_sepa.twig */
class __TwigTemplate_2ed527afcae95d76d4ac84dcc17cbc003d94e5d1ec8fb88c9a4dca7a82096a7d extends Twig_Template
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
        echo "<h2>";
        echo (isset($context["ems_bank_details"]) ? $context["ems_bank_details"] : null);
        echo "</h2>
<p><b>";
        // line 2
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</b></p>

<form action=";
        // line 4
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " method=\"post\">
    <div class=\"well well-sm\">
        <p>";
        // line 6
        echo (isset($context["ems_payment_reference"]) ? $context["ems_payment_reference"] : null);
        echo "</p>
        <p>";
        // line 7
        echo (isset($context["ems_iban"]) ? $context["ems_iban"] : null);
        echo "</p>
        <p>";
        // line 8
        echo (isset($context["ems_bic"]) ? $context["ems_bic"] : null);
        echo "</p>
        <p>";
        // line 9
        echo (isset($context["ems_account_holder"]) ? $context["ems_account_holder"] : null);
        echo "</p>
        <p>";
        // line 10
        echo (isset($context["ems_residence"]) ? $context["ems_residence"] : null);
        echo "</p>
    </div>

    <div class=\"buttons pull-right\">
        <div class=\"right\">
            <input type=\"submit\" value=\"";
        // line 15
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" class=\"button btn btn-primary\"/>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/emspay_sepa.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <h2>{{ ems_bank_details }}</h2>*/
/* <p><b>{{ text_description }}</b></p>*/
/* */
/* <form action={{ action }} method="post">*/
/*     <div class="well well-sm">*/
/*         <p>{{ ems_payment_reference }}</p>*/
/*         <p>{{ ems_iban }}</p>*/
/*         <p>{{ ems_bic }}</p>*/
/*         <p>{{ ems_account_holder }}</p>*/
/*         <p>{{ ems_residence }}</p>*/
/*     </div>*/
/* */
/*     <div class="buttons pull-right">*/
/*         <div class="right">*/
/*             <input type="submit" value="{{ button_confirm }}" class="button btn btn-primary"/>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
